<?php


namespace admin;


use database\database;

class comment extends admin
{
    public function index(){
        $db=new database();
        $parametrs=$db->select("select * from comments where replay_to IS NULL")->fetchAll();
        $this->showpage("comments/index.php","Comments",$parametrs,);
    }
    public function delete($id){
        $db=new database();
        $db->delete('comments','id',$id);
        $this->redirect("admin/comments?action=true");

    }
    public function reply($id){
        $db=new database();
        $comment=$db->select('select * from comments where id=?',[$id])->fetch();
        $this->showpage('comments/reply.php','reply',$comment);

//        $db->update("comment",['status'],['seen'],'id',$id);
//        $this->redirect("admin/comment");
    }
    public function store($request,$id){
        $db=new database();
        $request['name']=$request['name']!=''?$request['name']:'ادمین';
        $comment=$db->select('select * from comments where id=?',[$id])->fetch();
        $comment=$db->update('comments',['reply_count'],[$comment['reply_count']+1],'id',$comment['id'],'n');
        $db->create('comments',
            ['content','name','for_Article','replay_to'],
            [$request['content'],$request['name'],$comment['for_Article'],$comment['id']]);
        $this->redirect("admin/comments?action=true");
    }
}