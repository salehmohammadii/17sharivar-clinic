<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class Paraclinic extends admin
{
    public function index()
    {
        $db = new database();
        $paraclinics = $db->select('select  p.*,a.title as father_name,a.id as father_id from paraclinic as p left join paraclinic as a on 
    p.child_of=a.id')->fetchAll();
        $this->showpage("paraclinic/index.php", "مدیریت پاراکلینیک", $paraclinics);
    }

    public function create()
    {
        $db = new database();
        $all_paraclinics = $db->select('select * from paraclinic')->fetchAll();
        $this->showpage("paraclinic/create.php", "افزودن پاراکلینیک",$all_paraclinics);

    }

    public function store($request)
    {
        if (empty($request['poster']['name'])) {
            $this->redirect("admin/paraclinic?action=0");
        } else {
            $request['poster'] = $this->saveimage($request['poster'], 'setting');
        }
        if (empty($request['page_poster']['name'])) {
            $this->redirect("admin/paraclinic?action=0");
        } else {
            $request['page_poster'] = $this->saveimage($request['page_poster'], 'setting');
        }
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
        $db->create('paraclinic',$fields,$values);
        $this->redirect("admin/paraclinic?action=true");
    }

    public function delete($id)
    {
        $db = new database();
        $db->delete("paraclinic", "id", $id);
        $db->delete("paraclinic", "child_of", $id);
        $this->redirect("admin/paraclinic?action=true");
    }

    public function edit($id)
    {
        $db = new database();
        $paraclinic = $db->select('select p.*,a.title as father_name,a.id as father_id from paraclinic as p left join paraclinic as a on 
    p.child_of=a.id  where  p.id=?', [$id])->fetch();
        $all_paraclinics = $db->select('select * from paraclinic where id!=?',[$paraclinic['id']])->fetchAll();

        $this->showpage("paraclinic/edit.php", "ویرایش پاراکلینیک",['all'=>$all_paraclinics,'para'=> $paraclinic] );
    }

    public function update($request, $id)
    {
        if (empty($request['poster']['name'])) {
            unset(  $request['poster']);
        } else {
            $request['poster'] = $this->saveimage($request['poster'], 'setting');
        }
        if (empty($request['page_poster']['name'])) {
            unset(  $request['page_poster']);
        } else {
            $request['page_poster'] = $this->saveimage($request['page_poster'], 'setting');
        }
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
        $db->update('paraclinic',$fields,$values,'id',$id);
        $this->redirect("admin/paraclinic?action=true");

    }
}