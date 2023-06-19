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
        return ['paraclinics' => $this->get_paraclinics(0), 'settings' => $this->get_site_settings(), 'health_services' => $this->get_health_services(0)];
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

    protected function get_articles_by_category($limit,$category)
    {
        return $this->db->select("SELECT a.*,t.title as t_title FROM articles as a left join article_type t on a.type = t.id where t.title like ? ORDER BY id DESC LIMIT $limit",["%$category%"])->fetchAll();
    }

    protected function get_articles_by_tag($limit,$tag)
    {
        return $this->db->select("SELECT a.*,t.title as t_title FROM articles as a left join article_type t on a.type = t.id where a.tags like ? ORDER BY id DESC LIMIT $limit",["%tag%"])->fetchAll();
    }

    protected function get_article_types()
    {
        return $this->db->select("SELECT * FROM article_type ORDER BY title DESC ")->fetchAll();

    }


    public function get_health_services($parent)
    {
        return $this->db->select("select * from health_ser where child_of=0")->fetchAll();

    }

    protected function get_paraclinics($child_of)
    {
        return $this->db->select("select * from paraclinic where child_of=?", [$child_of])->fetchAll();
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