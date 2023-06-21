<?php


namespace admin;


use auth\auth;

class admin
{

    public function __construct()
    {
        $auth=new auth();
        if( $auth->isAdmin()==false){
            $this->redirect("auth/login");
        }

    }

    protected function redirect($url){
        header('location: '.trim(current_domain,"/ ")."/".$url);
        exit();
    }
    protected function saveimage($image,$imagepath){
        $extention=explode("/",$image['type'])[1];
        $rand=random_int(0,99);
        $imagename=date("Y-m-d-H-i-s-u").$rand.".".$extention;
        $imagetemp=$image['tmp_name'];
        $imagepath="public/".$imagepath."/";
        if (is_uploaded_file($imagetemp)){
            if (move_uploaded_file($imagetemp,$imagepath.$imagename)){
                return $imagepath.$imagename;
            }
        }
return false;
    }
    protected function deleteimage($path){
        if (file_exists($path)) {
            $path = trim($path, "/");
            unlink($path);
        }
return true;
    }
    protected function showpage($src,$title,$parametrs=null){
        require_once base_path."/templates/admin/layouts/header.php";
        require_once base_path."/templates/admin/".$src;
        require_once base_path."/templates/admin/layouts/footer.php";

    }

    protected function  generate_dropdown_options($node,$selected=null, $dept=0) {
        $indent=str_repeat('-',$dept);
        if (!isset($node['children'])){
            $node['children']=[];
        }
        if (isset($node['id'])) {
            if (!is_null($selected) and $node['id']==$selected){
                $sel='selected';
            }else{
                $sel='';
            }

            $html = '<option '.$sel.'  value="' . $node['id'] . '">' . $indent . $node['title'] . '</option>';
        }else{
            $html='';
        }
            foreach ($node['children'] as $child) {
                $html .= $this->generate_dropdown_options($child,$selected, $dept + 1);
            }
return $html;
}
    function get_array_of_childs(array &$elements, $parentId = 0) {
        $branch = array();
        foreach ($elements as &$element) {
            if ($element['child_of'] == $parentId) {
                $children = $this->get_array_of_childs($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['id']] = $element;

                unset($element);
            }
        }
        return $branch;
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