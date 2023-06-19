<?php

namespace app;

use auth\auth;
use database\database;

class Rate extends home
{

    public function index()
    {
    $this->showpage('rate.php','نظر سنجی',$this->get_general_info());
    }


    public function store($request){
        $this->db->create('reating',array_keys($request),array_values($request));
        flash('status','t');
        $this->redirectback();
    }

    public function about_us()
    {
        $content = $this->db->select("select * from settings where page_key='about'")->fetch();
        $doctors = $this->db->select("select u.*,s.title as sk_title from users as u left join skills s on u.skill = s.id where u.roll=2 ")->fetchAll();
        $this->showpage('about-us.php', 'درباره ما', array_merge($this->get_general_info(), ['content' => $content['value'], 'doctors' => $doctors]));
    }

    public function paraclinic($title)
    {
        $title = urldecode($title);
        $paraclinics = $this->db->select('select * from paraclinic ')->fetchAll();
        $paraclinic = $this->db->select('select * from paraclinic where title=?', [$title])->fetch();
        $fathers = $this->get_fathers($paraclinics, $paraclinic['child_of']);
        $childs = $this->db->select('select * from paraclinic where child_of=?', [$paraclinic['id']])->fetchAll();
        $this->showpage('paraclinic.php', $title, array_merge($this->get_general_info(), [
            'paraclinic' => $paraclinic,
            'fathers' => $fathers,
            'childs' => $childs
        ]));
    }


}