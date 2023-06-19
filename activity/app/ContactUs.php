<?php

namespace app;

use auth\auth;
use database\database;

class ContactUs extends home
{
    
    public function index()
    {
        $parametrs=$this->get_general_info();
        $this->showpage("contact-us.php", "تماس با ما", $parametrs);
    }

    public function store($requuest)
    {

        if ($requuest['name']!='' and $requuest['phone']!=''
            and $requuest['roll']!='' and $requuest['subject'] and
            $requuest['content']!=''){
            $fields=[];
            $values=[];
            foreach ($requuest as $key=>$value){
                if ($value!=''){
                    $fields[]=$key;
                    $values[]=$value;
                }
            }
            $this->db->create('contact',$fields,$values);
            flash('contact_success','true');
        }else{
            flash('contact_error','فیلد های اجباری به درستی پر نشده اند');
        }
        $this->redirect('contact-us');
    }
    public function view($id)
    {
        $message=$this->db->select('select * from contact where link=?',[$id])->fetch();
        if ($message){
            $this->showpage('user-answer.php','کلینیک 17 شهریور',array_merge($this->get_general_info(),['message'=>$message]));
        }else{
            $this->redirect('');
        }
    }
}