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
  /**
   * 进行密码验证登录
   * @return [type] [description]
   */
  public function jump(){
  		$username = $_POST['username'];
        $password = md5($_POST['password']);
        $user = new UserModel();
        $userData=$user->secpwd($username);
        if($userData["password"]==$password){
        	session('name',$username);
        	$this->success("登录成功",U('Admin/main/index'));
        }else {
        	$this->error("登录失败",U('Admin/index/login'));
        }
  }
  public function exits(){
  	session('name',null);
  	$this->success("退出",U('Admin/index/login'));
  }
    
}

