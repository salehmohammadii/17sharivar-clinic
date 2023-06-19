<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class FAQTypes extends admin
{
    public function index()
    {
        $db = new database();
        $types = $db->select('select * from faq_types')->fetchAll();
        $this->showpage("faq-types/index.php", "manage FAQ types", $types);
    }

    public function create()
    {
        $this->showpage("faq-types/create.php", "add faq type");

    }

    public function store($request)
    {
        $db = new database();
        $db->create('faq_types',['title'] ,[$request['title']]);
        $this->redirect('admin/faq-type?action=true');
    }

    public function delete($id)
    {
        $db = new database();
        $db->delete("faq_types", "id", $id);
        $this->redirect("admin/faq-type?action=true");
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