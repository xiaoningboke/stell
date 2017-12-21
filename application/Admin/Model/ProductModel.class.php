<?php
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model {
    /**
     * 查询一条产品的数据
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function secpro($id){
        $con = M('Product');
        $contectData = $con->where("Id=$id")->find();
        return $contectData;
    }
    /**
     * 添加产品展示
     * @return [type] [description]
     */
    public function addproduct($title,$caizhi, $gangchang,$lianxiren,$lianxifangshi,$price,$guige, $time,$img,$info){
      $goods = M("Product");
      $data['title'] = $title;
      $data['caizhi'] = $caizhi;
      $data['material'] = $material;
      $data['gangchang'] = $gangchang;
      $data['lianxiren'] = $lianxiren;
      $data['lianxifangshi'] = $lianxifangshi;
      $data['price']=$price;
      $data['guige'] = $guige;
      $data['time'] = $time;
      $data['img'] = $img;
      $data['content']=$info;
      $s=$goods->add($data);
      return $s;
    }
    /**
     * 修改产品展示的信息
     * @param  [type] $id            [description]
     * @param  [type] $title         [description]
     * @param  [type] $caizhi        [description]
     * @param  [type] $gangchang     [description]
     * @param  [type] $lianxiren     [description]
     * @param  [type] $lianxifangshi [description]
     * @param  [type] $price         [description]
     * @param  [type] $time          [description]
     * @param  [type] $img           [description]
     * @param  [type] $info          [description]
     * @return [type]                [description]
     */
    public function editProduct($id,$title,$caizhi, $gangchang,$lianxiren,$lianxifangshi,$price,$time,$img,$info){
      $product = M("Product");
      $data['id'] = $id;
      $data['title'] = $title;
      $data['caizhi'] = $caizhi;
      $data['gangchang'] = $gangchang;
      $data['lianxiren'] = $lianxiren;
      $data['lianxifangshi'] = $lianxifangshi;
      $data['time']=$time;
      $data['price'] = $price;
      $data['img'] = $img;
      $data['info']=$info;
      $s=$product->where("Id=$id")->save($data);
      return $s;
}
/**
 * 删除产品信息
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
public function delproducts($id){
        $produ = M("Product"); 
        $s=$produ->where("Id=$id")->delete();
        return $s;
    }
}
