<?php
namespace Admin\Common;

use Think\Controller;
class Common extends Controller {
	public function _initialize()
	{
		if(!session('?name')){
             $this->error("对不起，您还没有登录!请先登录在进行操作",U('Admin/index/login'));
         }
	}
	 
}
