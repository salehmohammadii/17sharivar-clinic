<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class Rate extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select * from reating')->fetchAll();
        $this->showpage("rate/index.php", "view rates", $users);
    }
    public function delete($id)
    {
        $db = new database();
        $db->delete("reating", "id", $id);
        $this->redirect("admin/rate?action=true");
    }


}