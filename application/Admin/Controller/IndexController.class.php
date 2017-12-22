<?php
namespace Admin\Controller;

use Think\Controller;
use  Admin\Model\UserModel;
class IndexController extends Controller {

	/**
	 * 判断是否已经登录
	 * @return [type] [description]
	 */
    public function index()
   {
        if (!session('?name')) {
            $this->display('login');
            exit();
        }else{
            $this->success('您已登录', U('Admin/main/index'));
        }
  }
  public function jump(){
  		$username = $_POST['username'];
        $password = md5($_POST['password']);
        $user = new UserModel();
        $userData=$user->secpwd($username);
        var_dump($userData);
        var_dump(md5(123));
  }

    
}

