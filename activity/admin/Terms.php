<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class Terms extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select * from trems')->fetchAll();
        $this->showpage("terms/index.php", "manage terms", $users);
    }

    public function create()
    {
        $this->showpage("terms/create.php", "add terms");

    }

    public function store($request)
    {
        $db = new database();
        $db->create('trems', ['content','type'], [$request['content'],$request['type']]);
        $this->redirect('admin/terms?action=true');
    }

    public function delete($id)
    {
        $db = new database();
        $db->delete("trems", "id", $id);
        $this->redirect("admin/terms?action=true");
    }

    public function edit($id)
    {
        $db = new database();
        $term = $db->select('select * from trems where id=?', [$id])->fetch();
        $this->showpage("terms/edit.php", "Edit terms", $term );
    }

    public function update($request, $id)
    {
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
        $db->update('faq',$fields,$values,'id',$id);
        $this->redirect("admin/faq?action=true");

    }
}