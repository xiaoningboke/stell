<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function secpwd($username)
    {
      $user = M('User');
      $data=$user->where("username=$username")->find();
      var_dump( $data);
      return $data;
    }

}
