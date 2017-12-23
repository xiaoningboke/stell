<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	/**
	 * 查询一个用户的数据
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
    public function secpwd($username)
    {
      $user = M('User');
      $data=$user->where("username=$username")->find();
      return $data;
    }
    /**
     * 更改密码
     * @param  [type] $name     [description]
     * @param  [type] $password [description]
     * @return [type]           [description]
     */
    public function exitpaw($name,$password){
    	$user = M('User');
    	$user->password="$password";
    	$s=$user->where("username=$name")->save(); 
    	return $s;
    }

}
