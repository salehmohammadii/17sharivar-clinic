<?php

namespace app;

use admin\Tag;
use auth\auth;
use database\database;

class home
{
    public $db;

    public function __construct()
    {
        $this->db = new database();
    }

    protected function redirect($url)
    {
        header('location: ' . trim(current_domain, "/ ") . "/" . $url);
        exit();
    }

    protected function redirectback()
    {
        header('location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    public function get_general_info()
    {
        $paraclinics=$this->get_all_paraclinics();
        $paraclinics=$this->get_array_of_childs($paraclinics);
        $paraclinics=$this->buildMenu($paraclinics,'paraclinic');

        $health=$this->get_all_health_services();
        $health=$this->get_array_of_childs($health);
        $health=$this->buildMenu($health,'health-service');
        return ['paraclinics' => $paraclinics, 'settings' => $this->get_site_settings(), 'health_services' => $health];
    }

    function get_array_of_childs(array &$elements, $parentId = 0)
    {
        $branch = array();
        foreach ($elements as &$element) {
            if ($element['child_of'] == $parentId) {
                $children = $this->get_array_of_childs($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['id']] = $element;

                unset($element);
            }
        }
        return $branch;
    }

    function buildMenu($items,$url) {
        $output = "<ul>";
        foreach ($items as $item) {
            $output .= "<li>";
            if (!empty($item['children'])){
                $icon='<i class=" fas fa-chevron-down " style="color: #000;"></i>';
            }else{
                $icon='';
            }
            $output .= "<a href='".url($url.'/'.clinik_urlencode( $item['url']))."'>{$item['title']} ".$icon."</a>";
            if (!empty($item['children'])) {
                $output .=$this->buildMenu($item['children'],$url); // recursively build sub-menu
            }
            $output .= "</li>";
        }
        $output .= "</ul>";
        return $output;
    }


    public function get_skills($limit = 1000)
    {
        return $this->db->select("SELECT * FROM skills limit $limit")->fetchAll();
    }

    protected function get_site_settings()
    {
        $settings = $this->db->select("select value from settings where id=1")->fetch();
        $settings = json_decode($settings['value'], true);
        return $settings;
    }

    protected function get_sliders()
    {
        return $this->db->select("SELECT * FROM sliders WHERE status=1")->fetchAll();
    }

    protected function get_slides()
    {
        return $this->db->select("SELECT * FROM slider_slides WHERE status=1")->fetchAll();
    }

    protected function get_reply_comments($id)
    {
        return $comments = $this->db->select('select * from comments where replay_to=? order by created_at desc ', [$id])->fetchAll();

    }


    protected function showpage($src, $title, $parametrs = null)
    {
        require_once base_path . "/templates/app/layouts/header.php";
        require_once base_path . "/templates/app/" . $src;
        require_once base_path . "/templates/app/layouts/footer.php";

    }

    protected function get_articles($limit)
    {
        return $this->db->select("SELECT * FROM articles ORDER BY id DESC LIMIT $limit")->fetchAll();
    }

    protected function get_articles_by_category($limit, $category)
    {
        return $this->db->select("SELECT a.*,t.title as t_title FROM articles as a left join article_type t on a.type = t.id where t.title like ? ORDER BY id DESC LIMIT $limit", ["%$category%"])->fetchAll();
    }

    protected function get_articles_by_tag($limit, $tag)
    {
        return $this->db->select("SELECT a.*,t.title as t_title FROM articles as a left join article_type t on a.type = t.id where a.tags like ? ORDER BY id DESC LIMIT $limit", ["%$tag%"])->fetchAll();
    }

    protected function get_article_types()
    {
        return $this->db->select("SELECT * FROM article_type ORDER BY title DESC ")->fetchAll();

    }


    public function get_health_services($parent)
    {
        return $this->db->select("select * from health_ser where child_of=?", [$parent])->fetchAll();
    }

    public function get_all_health_services()
    {
        return $this->db->select("select * from health_ser order by child_of")->fetchAll();
    }

    protected function get_paraclinics($child_of)
    {
        return $this->db->select("select * from paraclinic where child_of=?",[$child_of])->fetchAll();
    }

    protected function get_all_paraclinics()
    {
        return $this->db->select("select * from paraclinic order by child_of")->fetchAll();
    }


    protected function get_fathers($list, $father_id)
    {
        $fathers = [];
        while ($father_id != 0) {
            foreach ($list as $item) {
                if ($item['id'] == $father_id) {
                    $fathers[] = $item;
                    $father_id = $item['child_of'];
                }
            }
        }
        return array_reverse($fathers);
    }


}