<?php


namespace admin;


use database\database;

class Skills extends admin
{
    public function index()
    {
        $db = new database();
        $skills = $db->select('select * from skills order by id desc ')->fetchAll();
        $this->showpage("skills/index.php", "skills", $skills);
    }

    public function create()
    {

        $this->showpage("skills/create.php", "add skill");

    }

    public function store($request)
    {
        $db=new database();
        $db->create('skills',['title'],[$request['title']]);
        $this->redirect('admin/skills?action=true');
    }

    public function delete($id){
        $db=new database();
        $db->delete("skills","id",$id);
        $this->redirect("admin/skills?action=true");
    }
    public function edit($id){
        $db=new database();
        $skill=$db->select('select * from skills where id=?',[$id])->fetch();
        $this->showpage("skills/edit.php","Edit skill",$skill);
    }
    public function update($request,$id){
        $db=new database();
        $db->update('skills',['title'],[$request['title']],'id',$id);
        $this->redirect("admin/skills?action=true");
    }
}