<?php
namespace Home\Model;
use Think\Model;
class SeoModel extends Model {
    
public function secpro(){
        $con = M('Seo');
        $seoData = $con->where("Id=1")->find();
        return $seoData;
    }
  
}
