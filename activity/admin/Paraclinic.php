<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class Paraclinic extends admin
{
    public function index()
    {
        $db = new database();
        $paraclinics = $db->select('select * from paraclinic order by child_of')->fetchAll();
        $paraclinics=$this->get_array_of_childs($paraclinics);
        $html='';
        foreach ($paraclinics as $paraclinic){
            $html.=$this->generate_table_of_childs($paraclinic);
        }
        $this->showpage("paraclinic/index.php", "مدیریت پاراکلینیک", $html);
    }

    public function create()
    {
        $db = new database();
        $all_paraclinics = $db->select('select * from paraclinic order by child_of ')->fetchAll();
        $paraclinics=$this->get_array_of_childs($all_paraclinics);
        $html='';
        foreach ($paraclinics as $paraclinic){
            $html.=$this->generate_dropdown_options($paraclinic);
        }
        $this->showpage("paraclinic/create.php", "افزودن پاراکلینیک",$html);
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
        $db=new database();
        $para=$db->select('select * from paraclinic where url=?',[$request['url']])->fetch();
        if ($para!=false){
            $i=1;
            while ($para!=false){
                $request['url']=$request['url'].' '.$i;
                $para=$db->select('select * from paraclinic where url=?',[$request['url']])->fetch();
            }
        }
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
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
        $all_paraclinics = $db->select('select * from paraclinic order by child_of ')->fetchAll();
        $paraclinics=$this->get_array_of_childs($all_paraclinics);
        $html='';
        foreach ($paraclinics as $para){
            $html.=$this->generate_dropdown_options($para,$paraclinic['child_of']);
        }
        $this->showpage("paraclinic/edit.php", "ویرایش پاراکلینیک",['all'=>$html,'para'=> $paraclinic] );
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
        $db=new database();
        $para=$db->select('select * from paraclinic where url=?',[$request['url']])->fetch();
        if ($para!=false){
            $i=1;
            while ($para!=false){
                $request['url']=$request['url'].' '.$i;
                $para=$db->select('select * from paraclinic where url=?',[$request['url']])->fetch();
            }
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

    protected function  generate_table_of_childs($node, $dept=0) {
        $indent=str_repeat('-',$dept);
        if (!isset($node['children'])){
            $node['children']=[];
        }
        if (isset($node['id'])) {
            $html = '<tr class=" text-center">
                            <td class=" text-info">
                                '.$node['id'].'
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary fs-6">'.$indent.$node['title'].'</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder text-hover-primary d-block fs-6">'.toShamsi( $node['created_at']).'</span>
                            </td>
                            <td>
                                <textarea class=" mw-300px w-300px"> '.$node['content'].'</textarea>
                            </td>
                            <td>
                                <a class="btn-danger py-1 px-4 text-white" href="'.url("admin/paraclinic/delete/".$node['id'])  .'">حذف</a>
                                <a class="btn-primary py-1 px-4 text-white" href="'. url('admin/paraclinic/edit/'.$node['id']) .'">ویرایش</a>
                            </td>
                        </tr>';
        }else{
            $html='';
        }
        foreach ($node['children'] as $child) {
            $html .= $this->generate_table_of_childs($child, $dept + 1);
        }
        return $html;
    }


}