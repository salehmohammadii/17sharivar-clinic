<?php

namespace app;

use auth\auth;
use database\database;

class Blog extends home
{
    public function index()
    {
        $settings = $this->get_site_settings();
        $articles = $this->get_articles(9);
        $categories = $this->get_article_types();
        $parametrs = array_merge($this->get_general_info(), ['posts' => $articles, 'categories' => $categories]);
        $this->showpage("blog/index.php", "بلاگ", $parametrs);
    }

    public function view_post($title)
    {
        $title = clinik_urldecode($title);
        $post = $this->db->select("select a.*,t.title as type from articles as a left join article_type t on a.type = t.id where a.url=?", [$title])->fetch();
        if ($post != false) {
            $suggested_post = $this->db->select("select a.*,t.title as type from articles as a left join article_type t on a.type = t.id where type=?", [$post['type']])->fetch();
            $comments = $this->db->select("select * from comments where for_Article=?  order by created_at desc", [$post['id']])->fetchAll();
            $comments = $this->get_array_of_comments_with_replies($comments);
//            dd($comments);
            $html='';
            foreach ($comments as $comment) {
                $html .= $this->generate_comments_html($comment);
            }
            $parametrs = array_merge($this->get_general_info(), ['post' => $post, 'suggested_posts' => $suggested_post, 'comments' => $html]);
            $this->showpage("blog/post.php", $title, $parametrs);
        } else {
            $this->redirect('');
        }
    }

    public function category($category)
    {
        $category = clinik_urldecode($category);
        $settings = $this->get_site_settings();
        $articles = $this->get_articles_by_category(9, $category);
        $categories = $this->get_article_types();
        $parametrs = array_merge($this->get_general_info(), ['posts' => $articles, 'categories' => $categories]);
        $this->showpage("blog/index.php", "بلاگ", $parametrs);
    }

    public function tag($tag)
    {
        $tag = clinik_urldecode($tag);
        $settings = $this->get_site_settings();
        $articles = $this->get_articles_by_tag(9, $tag);
        $categories = $this->get_article_types();
        $parametrs = array_merge($this->get_general_info(), ['posts' => $articles, 'categories' => $categories]);
        $this->showpage("blog/index.php", "بلاگ", $parametrs);
    }

    function get_array_of_comments_with_replies(array &$elements, $parentId = 0)
    {
        $branch = array();
        foreach ($elements as &$element) {
            if ($element['replay_to'] == $parentId) {
                $children = $this->get_array_of_comments_with_replies($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['id']] = $element;

                unset($element);
            }
        }
        return $branch;
    }

    protected function generate_comments_html($node, $dept = 0)
    {
        $indent = $dept*11;

        if (!isset($node['children'])) {
            $node['children'] = [];
        }
        if (isset($node['id'])) {
            if (isset($node['reply_to']) and !is_null($node['reply_to'])){
                $said='پاسخ داد';
            }else{
                $said='گفت';
            }
            $date = "<span direction='ltr' dir='ltr' style='direction: rtl'>" . toShamsi($node['created_at']) . "</span>";
            $html = '<div class="cmmBox">
                                                <div class=" commentBox_item" style="margin-right: '.$indent.'%">
                                                    <img  src="' . assets('public/app/img/vector.png') . '" alt="">
                                                    <div class="box3">
                                                        <div class="box3_part1" dir="ltr">
                                                            <span data-id="' . $node['id'] . '" class="replay_btn">پاسخ </span>
                                                            <small>
                                                                :'. $node['name']. " در تاریخ :  " . $date ."  $said  " .'
                                                            </small>
                                                        </div>
                                                        <div class="box3_part2">
                                                            <p>'. $node['content'] .'</p>
                                                        </div>
                                                    </div>
                                                </div>';
        } else {
            $html = '';
        }
        foreach ($node['children'] as $child) {
            $html .= $this->generate_comments_html($child, $dept + 1);
        }
        return $html;
    }

}