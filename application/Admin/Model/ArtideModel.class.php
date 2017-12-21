<?php
namespace Admin\Model;
use Think\Model;
class ArtideModel extends Model {
    /**
     * 查询一条产品的数据
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function secpro($id){
        $con = M('Artide');
        $contectData = $con->where("Id=$id")->find();
        return $contectData;
    }
    /**
     * 添加文章
     * @return [type] [description]
     */
    public function addartidecon($title,$time, $zuozhe,$content,$img,$kind){
      $artide = M("Artide");
      $data['title'] = $title;
      $data['time'] = $time;
      $data['material'] = $material;
      $data['zuozhe'] = $zuozhe;
      $data['content'] = $content;
      $data['image'] = $img;
      $data['kind']=$kind;
      $s=$artide->add($data);
      return $s;
    }
    /**
     * 修改文章
     * @param  [type] $id      [description]
     * @param  [type] $title   [description]
     * @param  [type] $time    [description]
     * @param  [type] $zuozhe  [description]
     * @param  [type] $content [description]
     * @param  [type] $image   [description]
     * @param  [type] $kind    [description]
     * @return [type]          [description]
     */
    public function editArtide($id,$title,$time,$zuozhe,$content,$image,$kind){
      $product = M("Artide");
      $data['id'] = $id;
      $data['title'] = $title;
      $data['time'] = $time;
      $data['zuozhe'] = $zuozhe;
      $data['content'] = $content;
      $data['image'] = $image;
      $data['kind'] = $kind;
      $s=$product->where("Id=$id")->save($data);
      return $s;
}
/**
 * 删除文章
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
public function delArtide($id){
        $produ = M("Artide"); 
        $s=$produ->where("Id=$id")->delete();
        return $s;
    }
}
