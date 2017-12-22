<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    /**
     * 查询一条产品的数据
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function secContact(){
        $con = M('Contact');
        $contectData = $con->where("Id=1")->find();
        return $contectData;
    }
    
    /**
     * 修改联系我们
     * @param  [type] $title   [description]
     * @param  [type] $name    [description]
     * @param  [type] $phone   [description]
     * @param  [type] $qq      [description]
     * @param  [type] $wetch   [description]
     * @param  [type] $address [description]
     * @param  [type] $content [description]
     * @return [type]          [description]
     */
    public function editContact($title,$name,$phone,$qq,$wetch,$address,$content)
    {
      $product = M("Contact");
      $data['title'] = $title;
      $data['name'] = $name;
      $data['time'] = $time;
      $data['phone'] = $phone;
      $data['qq'] = $qq;
      $data['wetch'] = $wetch;
      $data['address'] = $address;
      $data['introduction'] = $content;
      $s=$product->where("Id=1")->save($data);
      return $s;
}

}
