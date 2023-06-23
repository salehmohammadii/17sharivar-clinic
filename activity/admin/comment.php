<?php


namespace admin;


use database\database;

class comment extends admin
{

    public function index(){
        $db=new database();
        $parametrs=$db->select("select comments.*,a.title as a_title from comments left join articles a on comments.for_Article = a.id order by comments.created_at desc ")->fetchAll();
        $this->showpage("comments/index.php","Comments",$parametrs,);
    }

    public function delete($id){
        $db=new database();
        $db->delete('comments','id',$id);
        $this->redirect("admin/comments?action=true");

    }

    public function reply($id){
        $db=new database();
        $comment=$db->select('select c.*,d.content as d_content  from comments as c left join comments as d on c.replay_to=d.id  where c.id=? ',[$id])->fetch();
        $this->showpage('comments/reply.php','reply',$comment);
    }
    public function store($request,$id){
        $db=new database();
        $request['name']=$request['name']!=''?$request['name']:'ادمین';
        $comment=$db->select('select * from comments where id=?',[$id])->fetch();
        $db->create('comments',
            ['content','name','for_Article','replay_to'],
            [$request['content'],$request['name'],$comment['for_Article'],$comment['id']]);
        $this->redirect("admin/comments?action=true");
    }
}