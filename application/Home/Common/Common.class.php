<?php
namespace Home\Common;

use Think\Controller;
use  Home\Model\ConnectModel;
use  Home\Model\ProductModel;
use  Home\Model\SeoModel;

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
	public function findSeo(){
		$seo = new SeoModel();
		$seoData = $seo->secpro();
		return $seoData;
	}
	
}
