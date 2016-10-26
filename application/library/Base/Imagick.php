<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/26
 * Time: 下午5:59
 */
//将多张图片生成为一张gif
class Base_Imagick{

    public  $imagick;
    public function __construct()
    {
        if(extension_loaded('imagick')){
            $this->imagick = new Imagick();
        }
    }
    //将图片转换为GIF
    public function pictureToGif($type){
        $animation = $this->imagick;
        $animation->setFormat($type);
        $animation->setFormat($type);
        foreach ( $filelist as $file ){
            $image = $this->imagick;
            $image->readImage( $file );  //合并图片
            $animation->addImage( $image ); //加入到对象
            $animation->setImageDelay($num); //设定图片帧数
            unset( $image );    //清除内存里的图像，释放内存
        }
        //以下两行是调试时用的，测试是否生成了gif图片
        //header( "Content-Type: image/gif" );
        //echo( $animation->getImagesBlob() );
        //生成的GIF文件名组合
        //生成GIF图片
        $images = time(). '.' . $type;
       $animation->writeImages( $images,true );
//        //保存GIF到指定文件夹
//        copy($images, $path . $images);
//        //是否预览
//        if($is)
//        {
//            echo '已生成gif图片: ' . $images . '<br />';
//            echo "<img src='" . $path . $images . "' />";
//        }
//        else
//        {
//            echo '已生成gif图片: ' . $images . '<br />';
//        }
//        //删除原来保存的图片
//        unlink($images);



    }


}