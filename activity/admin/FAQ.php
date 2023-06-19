<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class FAQ extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select faq.* from faq left join faq_types ft on faq.types = ft.id')->fetchAll();
        $this->showpage("faq/index.php", "manage FAQs", $users);
    }

    public function create()
    {
        $db = new database();
        $types = $db->select('select * from faq_types')->fetchAll();
        $this->showpage("faq/create.php", "add faq", $types);

    }

    public function store($request)
    {
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db = new database();
        $db->create('faq', $fields, $values);
        $this->redirect('admin/faq?action=true');
    }

    public function delete($id)
    {
        $db = new database();
        $db->delete("faq", "id", $id);
        $this->redirect("admin/faq?action=true");
    }

    public function edit($id)
    {
        $db = new database();
        $faq = $db->select('select faq.*,ft.title as ft_title from faq  left join faq_types ft on faq.types = ft.id', [$id])->fetch();
        $faq_types = $db->select('select * from faq_types')->fetchAll();

        $this->showpage("faq/edit.php", "Edit faq", ['faq' => $faq, 'faq_type' => $faq_types]);
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