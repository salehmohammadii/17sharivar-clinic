<?php

namespace app;

use auth\auth;
use database\database;

class Comment extends home
{

    public function reply($request)
    {
       $id=$request['id'];
       $comment=$request['content'];
       $parent_comment=$this->db->select('select * from comments where id=?',[$id])->fetch();
       if ($parent_comment!=false){
        $this->db->update('comments',['reply_count'],[$parent_comment['reply_count']+1],'id',$parent_comment['id'],'n');
        $this->db->create('comments',['content','name','for_Article','replay_to'],[$comment,'کاربر مهمان',$parent_comment['for_Article'],$parent_comment['id']]);
       }
        $this->redirectback();
    }


    public function store($request){
        $this->db->create('comments',['name','content','for_Article','phone'],[$request['name'],$request['content'],$request['article'],$request['phone']]);
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
        $paraclinic = $this->db->select('select * from paraclinic where url=?', [$title])->fetch();
        $fathers = $this->get_fathers($paraclinics, $paraclinic['child_of']);
        $childs = $this->db->select('select * from paraclinic where child_of=?', [$paraclinic['id']])->fetchAll();
        $this->showpage('paraclinic.php', $title, array_merge($this->get_general_info(), [
            'paraclinic' => $paraclinic,
            'fathers' => $fathers,
            'childs' => $childs
        ]));
    }


}