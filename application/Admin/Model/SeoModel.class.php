<?php
namespace Admin\Model;
use Think\Model;
class SeoModel extends Model {
  
   
    
    public function findSeo(){
      $con = M('Seo');
      $seoDate = $con->where("Id=1")->find();
      return $seoDate;
    }
    
    public function exitSeo($gsname,$keywords,$description){
      $connect = M("Seo");
      $data['gsname'] = $gsname;
      $data['keywords'] = $keywords;
      $data['description'] = $description;
      $s=$connect->where("Id=1")->save($data);
      return $s;
    }
    
}
