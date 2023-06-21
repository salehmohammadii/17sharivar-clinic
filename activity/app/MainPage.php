<?php

namespace app;

use auth\auth;
use database\database;

class MainPage extends home
{
    
    public function index()
    {
        $settings=$this->get_site_settings();
        $articles=$this->get_articles(3);
        $slides=$this->get_slides();
        $sliders=$this->get_sliders();
        $paraclinics=$this->get_paraclinics(0);
        $parametrs=['health_services'=>$this->get_health_services(0),'paraclinics'=>$paraclinics,'settings'=>$settings,'articles'=>$articles,'slide'=>$slides,'slider'=>$sliders];
        $this->showpage("index.php", "کلینیک 17 شهریور", $parametrs);
    }



    public function doctor_search($search){
        $search=$search['search'];
        $search_val="%$search%";
        $general_settings=$this->get_general_info();
        $doctors=$this->db->select("SELECT presentday.*,users.* FROM presentday right join users on presentday.user_id = users.id  WHERE users.full_name  LIKE ? ||users.skill LIKE ?",[$search_val,$search_val])->fetchAll();
        $parametrs=array_merge($general_settings,['doctors'=>$doctors]);
        $this->showpage("search.php",$search,$parametrs);
    }

    public function about_us()
    {
        $content=$this->db->select("select * from settings where page_key='about'")->fetch();
        $doctors=$this->db->select("select u.*,s.title as sk_title from users as u left join skills s on u.skill = s.id where u.roll=2 ")->fetchAll();
        $this->showpage('about-us.php','درباره ما',array_merge($this->get_general_info(),['content'=>$content['value'],'doctors'=>$doctors]));
    }

    public function terms()
    {
        $doctors=$this->db->select("select * from trems where type=1")->fetchAll();
        $this->showpage('terms.php','قوانین استفاده',array_merge($this->get_general_info(),['terms'=>$doctors]));
    }
    public function privacy()
    {
        $doctors=$this->db->select("select * from trems where type=2")->fetchAll();
        $this->showpage('terms.php','حریم خصوصی',array_merge($this->get_general_info(),['terms'=>$doctors]));
    }

    public function paraclinic($title)
    {
        $title=urldecode($title);
        $paraclinics= $this->db->select('select * from paraclinic ')->fetchAll();
        $paraclinic= $this->db->select('select * from paraclinic where title=?',[$title])->fetch();
        $fathers=$this->get_fathers($paraclinics,$paraclinic['child_of']);
        $childs=$this->db->select('select * from paraclinic where child_of=?',[$paraclinic['id']])->fetchAll();
        $this->showpage('paraclinic.php',$title,array_merge($this->get_general_info(),[
            'paraclinic'=>$paraclinic,
            'fathers'=>$fathers,
            'childs'=>$childs
            ]));
    }
    public function health_service($title)
    {
        $title=urldecode($title);
        $health_services= $this->db->select('select * from health_ser ')->fetchAll();
        $health_service= $this->db->select('select * from health_ser where title=?',[$title])->fetch();
        $fathers=$this->get_fathers($health_services,$health_service['child_of']);
        $childs=$this->db->select('select * from health_ser where child_of=?',[$health_service['id']])->fetchAll();
        $this->showpage('health-service.php',$title,array_merge($this->get_general_info(),[
            'health_service'=>$health_service,
            'fathers'=>$fathers,
            'childs'=>$childs
        ]));
    }
    public function charity()
    {
        $content=$this->db->select("select * from settings where page_key='charity'")->fetch();
        $content=$content['value']??'';
        $this->showpage('charity.php','خیریه',array_merge(['content'=>$content],$this->get_general_info()));
    }
    public function drug_store()
    {
        $content=$this->db->select("select * from settings where page_key='drugstore'")->fetch();
        $content=$content['value']??'';
        $this->showpage('drugstore.php','داروخانه',array_merge(['content'=>$content],$this->get_general_info()));
    }
}