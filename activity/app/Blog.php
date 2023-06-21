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
            $comments = $this->db->select("select * from comments where for_Article=? and replay_to IS NULL order by created_at desc", [$post['id']])->fetchAll();
            $comments = $comments == false ? [] : $comments;
            foreach ($comments as $key => $comment) {
                if ($comment['reply_count'] > 0) {
                    $comments[$key]['replies'] = $this->get_reply_comments($comment['id']);
                } else {
                    $comments[$key]['replies'] = [];
                }
            }
            $parametrs = array_merge($this->get_general_info(), ['post' => $post, 'suggested_posts' => $suggested_post, 'comments' => $comments]);
            $this->showpage("blog/post.php", $title, $parametrs);
        }else{
            $this->redirect('');
        }
    }
    public function category($category)
    {
        $category=clinik_urldecode($category);
        $settings = $this->get_site_settings();
        $articles = $this->get_articles_by_category(9,$category);
        $categories = $this->get_article_types();
        $parametrs = array_merge($this->get_general_info(), ['posts' => $articles, 'categories' => $categories]);
        $this->showpage("blog/index.php", "بلاگ", $parametrs);
    }
    public function tag($tag)
    {
        $tag=clinik_urldecode($tag);
        $settings = $this->get_site_settings();
        $articles = $this->get_articles_by_tag(9,$tag);
        $categories = $this->get_article_types();
        $parametrs = array_merge($this->get_general_info(), ['posts' => $articles, 'categories' => $categories]);
        $this->showpage("blog/index.php", "بلاگ", $parametrs);
    }
}