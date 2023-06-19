<?php

namespace app;

use auth\auth;
use database\database;
use Parsidev\Jalali\jDate;

class Calender extends home
{
    
    public function index()
    {
       $doctors= $this->db->select('select p.*,u.*,s.title as sk_title from presentday as p 
left join users u on p.user_id = u.id left join skills s on u.skill = s.id ')->fetchAll();
       $skills=$this->get_skills(2);
        $parametrs=array_merge( $this->get_general_info(),['doctors'=>$doctors,'days'=>$this->get_this_weeks_date(),'skills'=>$skills]);
        $this->showpage("calender.php", "تقویم پزشکان", $parametrs);
    }

    public function all()
    {
        $doctors= $this->db->select('select p.*,u.*,s.title as sk_title from presentday as p 
left join users u on p.user_id = u.id left join skills s on u.skill = s.id ')->fetchAll();
        $skills=$this->get_skills();
        $parametrs=array_merge( $this->get_general_info(),['doctors'=>$doctors,'days'=>$this->get_this_weeks_date(),'skills'=>$skills]);
        $this->showpage("calender.php", "تقویم پزشکان", $parametrs);
    }

    public function doctor_search($search){
        $search=$search['search'];
        $search_val="%$search%";
        $general_settings=$this->get_general_info();
        $doctors=$this->db->select("SELECT presentday.*,users.* FROM presentday right join users on presentday.user_id = users.id  WHERE users.full_name  LIKE ? ||users.skill LIKE ?",[$search_val,$search_val])->fetchAll();
        $parametrs=array_merge($general_settings,['doctors'=>$doctors]);
        $this->showpage("search.php",$search,$parametrs);
    }

    public function get_this_weeks_date()
    {
        date_default_timezone_set("Asia/Tehran");
        $MyDay = date("N", time());
        $sat = 0;
        $sun = 0;
        $mon = 0;
        $tue = 0;
        $wen = 0;
        $th = 0;
        $fri = 0;
        switch ($MyDay) {
            case 1: {
                $sat = time() - 172800;
                $sun = time() - 86400;
                $mon = time();
                $tue = time() + 86400;
                $wen = time() + 172800;
                $th = time() + 259200;
                $fri = time() + 345600;
                break;
            }
            case 2: {
                $sat = time() - 259200;
                $sun = time() - 172800;
                $mon = time() - 86400;
                $tue = time();
                $wen = time() + 86400;
                $th = time() + 172800;
                $fri = time() + 259200;
                break;
            }
            case 3: {
                $sat = time() - 345600;
                $sun = time() - 259200;
                $mon = time() - 172800;
                $tue = time() - 86400;
                $wen = time();
                $th = time() + 86400;
                $fri = time() + 172800;
                break;
            }
            case 4: {
                $sat = time() - 432000;
                $sun = time() - 345600;
                $mon = time() - 259200;
                $tue = time() - 172800;
                $wen = time() - 86400;
                $th = time();
                $fri = time() + 86400;
                break;
            }
            case 5: {
                $sat = time() - 518400;
                $sun = time() - 432000;
                $mon = time() - 345600;
                $tue = time() - 259200;
                $wen = time() - 172800;
                $th = time() - 86400;
                $fri = time();
                break;
            }
            case 6: {
                $sat = time();
                $sun = time() + 86400;
                $mon = time() + 172800;
                $tue = time() + 259200;
                $wen = time() + 345600;
                $th = time() + 432000;
                $fri = time() + 518400;
                break;
            }
            default:
                $sat = time() - 86400;
                $sun = time();
                $mon = time() + 86400;
                $tue = time() - 172800;
                $wen = time() + 259200;
                $th = time() + 345600;
                $fri = time() + 432000;
                break;
        }
        return ['sat'=>$sat,'sun'=>$sun,'mon'=>$mon,'tue'=>$tue,'wen'=>$wen,'th'=>$th,'fri'=>$fri];
    }
}