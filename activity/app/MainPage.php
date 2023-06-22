<?php

namespace app;

use auth\auth;
use database\database;

class MainPage extends home
{
    
    public function index()
    {
        $articles=$this->get_articles(3);
        $paraclinic_list=$this->get_paraclinics(0);
        $slides=$this->get_slides();
        $sliders=$this->get_sliders();
        $parametrs=array_merge($this->get_general_info(),['all_para'=>$paraclinic_list,'articles'=>$articles,'slide'=>$slides,'slider'=>$sliders]);
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
        $doctors=array_splice($doctors,0,3);
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
        $title=clinik_urldecode($title);
        $paraclinics= $this->db->select('select * from paraclinic ')->fetchAll();
        $paraclinic= $this->db->select('select * from paraclinic where url=?',[$title])->fetch();
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
        $title=clinik_urldecode($title);
        $health_services= $this->db->select('select * from health_ser ')->fetchAll();
        $health_service= $this->db->select('select * from health_ser where url=?',[$title])->fetch();
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
        $charity=$this->db->select("select * from settings where page_key='charity'")->fetch();
        $charity=json_decode($charity['value'],true);
        $content=$charity['content']??'';
        $url=$charity['url']??'#';
        $this->showpage('charity.php','خیریه',array_merge(['content'=>$content,'url'=>$url],$this->get_general_info(),));
    }
    public function drug_store()
    {
        $content=$this->db->select("select * from settings where page_key='drugstore'")->fetch();
        $content=$content['value']??'';
        $this->showpage('drugstore.php','داروخانه',array_merge(['content'=>$content],$this->get_general_info()));
    }

    public function all_paraclinics()
    {
      $paras=$this->get_paraclinics(0,100000);
        $this->showpage('all-paraclinic.php','پاراکلینیک ها',
            array_merge($this->get_general_info(),['all_paras'=>$paras]));
    }

    public function all_health_service()
    {
        $paras=$this->get_health_services(0);
        $this->showpage('all-health-service.php','خدمات',
            array_merge($this->get_general_info(),['all_paras'=>$paras]));
    }

}