<?php
namespace Home\Common;

use Think\Controller;
use  Home\Model\ConnectModel;
use  Home\Model\ProductModel;

class Common extends Controller {
	public function Connect()
	{
		$connect = new ConnectModel();
		$connectData = $connect->seleConnect();
		return $connectData;
	}
	public function secphone()
	{
		$connect = new ProductModel();
		$secphone = $connect->content();
		return $secphone;
	}
	
}
