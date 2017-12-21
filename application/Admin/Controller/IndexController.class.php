<?php
namespace Admin\Controller;

use Think\Controller;
use  Admin\Model\GoodsModel;
use  Admin\Model\ProductModel;
use  Admin\Model\ArtideModel;
use  Admin\Model\ContactModel;
class IndexController extends Controller {
/**
 * 显示首页
 * @return [type] [description]
 */
    public function index(){

         $this->display();

    }
    ////////////////////////////////////////////////////////////////////////
    ///现货
    /**
     * 分页显示现货信息
     * @return [type] [description]
     */
    public function newproduct(){
       $User = M('Goods');
            if($_GET['p']==NULL){
                $p=1;
            }else{
                $p=$_GET['p'];
            }
                 $list = $User->order('id')->page($p.',10')->select();

            $this->assign('list',$list);
            $count = $User->count();
            $Page = new \Think\Page($count,10);
            $show = $Page->show();
            $this->assign('page',$show);
        $this->display();
    }
    /**
     * 显示修改页面
     * @return [type] [description]
     */
    public function exitproduct(){

        $product = new GoodsModel();
         $id=$_GET[id];
        $data=$product->resGoodsOne($id);
        $this->assign('data',$data);
        $this->display();

    }
  /**
   * 接受修改信息
   * @return [type] [description]
   */
    public function exitproducts(){

        $product = new GoodsModel();
         $id=$_GET[id];
         $varieties=$_POST[varieties];
         $material=$_POST[material];
         $specifications=$_POST[specifications];
         $field=$_POST[field];
         $weight=$_POST[weight];
         $price=$_POST[price];
         $contact=$_POST[contact];
        $warehouse=$_POST[warehouse];
        $supplier=$_POST[supplier];
        $time=$_POST[time];
        $s=$product->editGoods($id,$varieties,$material, $specifications,$field,$weight,$price,$contact, $warehouse,$supplier,$time);
        if($s>0){
          $this->success('更新成功',U('Admin/index/newproduct'));
        }
        else{
            $this->error('没有更新',U('Admin/index/newproduct'));
        }
        $this->assign('data',$data);
        //$this->display('exitproduct');
    }
    public function delproduct(){
      $id=$_GET[id];
      $product = new GoodsModel();
      $s= $product ->delproducts($id);
       if($s>0){
          $this->success('删除成功',U('Admin/index/newproduct'));
        }
        else{
            $this->error('没有删除',U('Admin/index/newproduct'));
        }

    }
    /**
     * 显示添加现货信息页面
     * @return [type] [description]
     */
    public function addnewproduct(){
      $this->display();
    }
    /**
     * 接收添加现货信息
     * @return [type] [description]
     */
    public function addnewproducts(){
        $varieties=$_POST[varieties];
         $material=$_POST[material];
         $specifications=$_POST[waijing].'*'.$_POST[bihou];
         $field=$_POST[field];
         $weight=$_POST[weight];
         $price=$_POST[price];
         $contact=$_POST[contact];
        $warehouse=$_POST[warehouse];
        $supplier=$_POST[supplier];
        $time=$_POST[time];
        $product = new GoodsModel();
        $s=$product->addnewproducts($varieties,$material, $specifications,$field,$weight,$price,$contact, $warehouse,$supplier,$time);
         if($s>0){
          $this->success('添加成功',U('Admin/index/newproduct'));
        }
        else{
            $this->error('添加失败',U('Admin/index/newproduct'));
        }
    }
    ////////////////////////////////////////////////////////////////
    /////产品展示
    /**
     * 分页展示产品展示
     * @return [type] [description]
     */
     public function product(){
       $User = M('Product');
            if($_GET['p']==NULL){
                $p=1;
            }else{
                $p=$_GET['p'];
            }
                 $list = $User->order('id')->page($p.',10')->select();

            $this->assign('list',$list);
            $count = $User->count();
            $Page = new \Think\Page($count,10);
            $show = $Page->show();
            $this->assign('page',$show);
        $this->display();
    }
    /**
     * 显示产品展示添加页面
     * @return [type] [description]
     */
    public function addproduct(){
        $this->display();
    }
    /**
     * 添加产品展示的内容
     * @return [type]
     */
    public function addproducts(){
        $path="./public/product/img/cpzh/";
        $img=$this->upload($path);
        $title=$_POST[title];
        $caizhi=$_POST[caizhi];
        $gangchang=$_POST[gangchang];
        $lianxiren=$_POST[lianxiren];
        $lianxifangshi=$_POST[lianxifangshi];
        $price=$_POST[price];
        $guige=$_POST[guige];
        $time=$_POST[time];
        $info=$_POST[info];
        $product = new ProductModel();
        $s=$product->addproduct($title,$caizhi, $gangchang,$lianxiren,$lianxifangshi,$price,$guige, $time,$img,$info);
        if($s>0){
          $this->success('添加成功',U('Admin/index/addproduct'));
        }
        else{
            $this->error('添加失败',U('Admin/index/addproduct'));
        }
    }
    
    /**
     * 显示产品展示修改的页面
     * @return [type]
     */
    public function exitsproduct(){

        $product = new ProductModel();
         $id=$_GET[id];
        $data=$product->secpro($id);
        $this->assign('data',$data);
        $this->display();

    }
  /**
   * 接受修改产品展示信息
   * @return [type] [description]
   */
    public function exitsproducts(){

        $product = new ProductModel();
        $path="./public/product/img/cpzh/";
        $img=$this->upload($path);
         if($img==null){
            $img=$_POST[image];
        }
        $id=$_POST[id];
        $title=$_POST[title];
        $caizhi=$_POST[caizhi];
        $gangchang=$_POST[gangchang];
        $lianxiren=$_POST[lianxiren];
        $lisnxifangshi=$_POST[lisnxifangshi];
        $price=$_POST[price];
        $time=$_POST[time];
        $info=$_POST[info];
    
        $s=$product->editProduct($id,$title,$caizhi, $gangchang,$lianxiren,$lianxifangshi,$price,$time,$img,$info);
        if($s>0){
          $this->success('更新成功',U('Admin/index/product'));
        }
        else{
            $this->error('没有更新',U('Admin/index/product'));
        }
        $this->assign('data',$data);
        //$this->display('exitproduct');
    }
    /**
     * 删除产品展示
     * @return [type] [description]
     */
    public function delsproducts(){
        $id=$_GET[id];
        $product = new ProductModel();
        $s= $product ->delproducts($id);
        if($s>0){
             $this->success('删除成功',U('Admin/index/product'));
        }
        else{
            $this->error('没有删除',U('Admin/index/product'));
        }
    }


/////////////////////////////////////////////////////////////////////////////
        //文章

     /**
     * 分页展示文章
     * @return [type] [description]
     */
     public function artide(){
       $User = M('Artide');
            if($_GET['p']==NULL){
                $p=1;
            }else{
                $p=$_GET['p'];
            }
                 $list = $User->order('id')->page($p.',10')->select();

            $this->assign('list',$list);
            $count = $User->count();
            $Page = new \Think\Page($count,10);
            $show = $Page->show();
            $this->assign('page',$show);
        $this->display();
    }
    /**
     * 显示文章添加页面
     * @return [type] [description]
     */
    public function addarticle(){
        $this->display();
    }
    /**
     * 添加文章的内容
     * @return [type]
     */
    public function addartidecon(){
        $path="./public/product/img/cpzh/";
        $img=$this->upload($path);
        $title=$_POST[title];
        $time=$_POST[time];
        $zuozhe=$_POST[zuozhe];
        $content=$_POST[info];
        $img=$_POST[img];
        $kind=$_POST[kind];
        $product = new ArtideModel();
        $s=$product->addartidecon($title,$time, $zuozhe,$content,$img,$kind);
        if($s>0){
          $this->success('添加成功',U('Admin/index/artide'));
        }
        else{
            $this->error('添加失败',U('Admin/index/artide'));
        }
    }
    
    /**
     * 显示文章修改的页面
     * @return [type]
     */
    public function exitartidecon(){

        $product = new ArtideModel();
         $id=$_GET[id];
        $data=$product->secpro($id);
        $this->assign('data',$data);
        $this->display();

    }
  /**
   * 接受修改文章信息
   * @return [type] [description]
   */
    public function exitartidecons(){

        $product = new ArtideModel();
        $path="./public/information/img/tp/";
        $image=$this->upload($path);
        if($image==null){
            $image=$_POST[image];
        }
        $id=$_POST[id];
        $title=$_POST[title];
        $time=$_POST[time];
        $caizhi=$_POST[caizhi];
        $zuozhe=$_POST[zuozhe];
        $content=$_POST[info];
        $kind=$_POST[kind];
    
        $s=$product->editArtide($id,$title,$time,$zuozhe,$content,$image,$kind);
        if($s>0){
          $this->success('更新成功',U('Admin/index/artide'));
        }
        else{
            $this->error('没有更新',U('Admin/index/artide'));
        }
        $this->assign('data',$data);
        //$this->display('exitproduct');
    }
    /**
     * 删除文章
     * @return [type] [description]
     */
    public function delArtide(){
        $id=$_GET[id];
        $product = new ArtideModel();
        $s= $product ->delArtide($id);
        if($s>0){
             $this->success('删除成功',U('Admin/index/artide'));
        }
        else{
            $this->error('没有删除',U('Admin/index/artide'));
        }
    }
    ////////////////////////////////////////////////////////////////////////
    ///关于我们
    /**
     * 展示关于我们的页面
     * @return [type] [description]
     */
    public function content(){
        $product = new ContactModel();
        $data=$product->secContact();
        $this->assign('data',$data);
        $this->display();
    }
    public function exitContact(){
        $contact = new ContactModel();
        $title=$_POST[title];
        $name=$_POST[name];
        $phone=$_POST[phone];
        $qq=$_POST[qq];
        $wetch=$_POST[wetch];
        $address=$_POST[address];
        $content=$_POST[info];
        $s=$contact->editContact($title,$name,$phone,$qq,$wetch,$address,$content);
        if($s>0){
          $this->success('更新成功',U('Admin/index/content'));
        }
        else{
            $this->error('没有更新',U('Admin/index/content'));
        }
        $this->assign('data',$data);
        //$this->display('exitproduct');
    }
/////////////////////////////////////////////////////////////////////////////
///图片
    public function exitimage(){
        $this->display();
    }
    public function exitimages(){
         $upload = new \Think\Upload();// 实例化上传类
         $oldFN = $_FILES;//获取图片的信息，在后面传给重命名函数
         $upload->maxSize = 3145728 ;// 设置附件上传大小
         $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                    // 设置附件上传类型
         $upload->rootPath = './public/image/'; // 设置附件上传根目录
         $upload->savePath = ''; // 设置附件上传（子）目录
         $upload->saveName = '';
         $upload->replace = true;//如果存在同名文件就覆盖
         $upload->autoSub = false;
                    //不使用子目录保存上传文件，即上传到指定的文件夹
         $info = $upload->upload();
        $this->renameFile($oldFN['photo']['name'], './public/image/');//调用重命名函数
         if(!$info) {// 上传错误提示错误信息
             $this->error($upload->getError());
         }else{// 上传成功
             $this->error('上传成功！');
         }
    }
    public function renameFile($oldFN,$path){
        for($i=0;$i<count($oldFN);$i++){
             
             $newName = "qwdfbnmjytr".($i+1).".jpg";//新的名字
             rename($path.$oldFN[$i],$path.$newName);//重命名
             
         }
     }
/////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    /**
     * 图片上传
     * @param  [type] $path [description]
     * @return [type]       [description]
     */
    public function upload($path){
     $upload = new \Think\Upload();// 实例化上传类
     //$oldFN = $_FILES;//获取图片的信息，在后面传给重命名函数
     $upload->maxSize = 3145728 ;// 设置附件上传大小
     $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                // 设置附件上传类型
     $upload->rootPath = $path; // 设置附件上传根目录
     $upload->savePath = ''; // 设置附件上传（子）目录
     $upload->replace = true;//如果存在同名文件就覆盖
     $upload->autoSub = false;
                //不使用子目录保存上传文件，即上传到指定的文件夹
     $info = $upload->upload();
     return $info[photo][savename];
 }
    /**
     * 富文本编辑器插件
     * @return [type]
     */
    public function save_info(){  
            $ueditor_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("./Public/Ueditor/php/config.json")), true);  
            $action = $_GET['action'];  
            switch ($action) {  
                case 'config':  
                    $result = json_encode($ueditor_config);  
                    break;  
                    /* 上传图片 */  
                case 'uploadimage':  
                    /* 上传涂鸦 */  
                case 'uploadscrawl':  
                    /* 上传视频 */  
                case 'uploadvideo':  
                    /* 上传文件 */  
                case 'uploadfile':  
                    $upload = new \Think\Upload();  
                    $upload->maxSize = 3145728;  
                    $upload->rootPath = './Public/Uploads/';  
                    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');  
                    $info = $upload->upload();  
                    if (!$info) {  
                        $result = json_encode(array(  
                                'state' => $upload->getError(),  
                        ));  
                    } else {  
                        $url = __ROOT__ . "/Public/Uploads/" . $info["upfile"]["savepath"] . $info["upfile"]['savename'];  
                        $result = json_encode(array(  
                                'url' => $url,  
                                'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),  
                                'original' => $info["upfile"]['name'],  
                                'state' => 'SUCCESS'  
                        ));  
                    }  
                    break;  
                default:  
                    $result = json_encode(array(  
                    'state' => '请求地址出错'  
                            ));  
                            break;  
            }  
            /* 输出结果 */  
            if (isset($_GET["callback"])) {  
                if (preg_match("/^[\w_]+$/", $_GET["callback"])) {  
                    echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';  
                } else {  
                    echo json_encode(array(  
                            'state' => 'callback参数不合法'  
                    ));  
                }  
            } else {  
                echo $result;  
            }  
        }  
}

