<?php
namespace app\index\controller;

use app\common\Common;
use think\View;
/**
 * 首页的控制器
 */
class Index
{
    public function index()
    {
            $view = new View();
            return $view->fetch();
    }
}
