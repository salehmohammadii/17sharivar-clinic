<?php

namespace app;

use auth\auth;
use database\database;

class FAQ extends home
{

    public function index()
    {
     $faqs= $this->db->select('select faq.*,ft.title as ft_title from faq left join faq_types ft on faq.types = ft.id')->fetchAll();
     $faq_type= $this->db->select('select * from faq_types')->fetchAll();
     $faq_user= $this->db->select('select * from faq_questions')->fetchAll();
     $this->showpage('faq.php','سوالات متداول',array_merge($this->get_general_info(),
         [
             'faqs'=>$faqs,
             'faq_types'=>$faq_type,
             'user_faq'=>$faq_user
         ]
     ));
    }


    public function store($request){
        $this->db->create('faq_questions',array_keys($request),array_values($request));
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
        $title = clinik_urldecode($title);
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

    public function view($id)
    {
        $message=$this->db->select('select * from faq_questions where link=?',[$id])->fetch();
        if ($message){
            $this->showpage('user-answer.php','کلینیک 17 شهریور',array_merge($this->get_general_info(),['message'=>$message]));
        }else{
            $this->redirect('');
        }

    }


}