<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model
{
  public function add_admin($data)
  {
    if (empty($data) || !is_array($data)) {
      return false;
    }else{
      if ($this -> save($data)) {
        return true;
      }else{
        return false;
      }
    }
  }

  public function paginater()
  {
    return  $this::paginate(3);
  }
}
