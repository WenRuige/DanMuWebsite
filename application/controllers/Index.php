<?php

class IndexController extends Base_Controller_Page {
    //封装了construct()方法
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }
    public function indexAction(){

//
//        $file = array();
//        for($i = 0; $i<10;$i++){
//            $file[]=$i;
//
//
//
//        }


       // var_dump($file);die;

//        $ffmeg = \FFMpeg\FFMpeg::create([
//            'ffmpeg.binaries'  => '/usr/local/bin/ffmpeg',
//            'ffprobe.binaries' => '/usr/local/bin/ffprobe'
//        ]);

       // $list1 = APP_PATH.'/public/uploads/23/a9104ca7ffa47cfda13068a254792d1a_0.jpg';         // returns the duration property

//        $filelist = array(
//            $list1 = APP_PATH.'/public/uploads/23/a9104ca7ffa47cfda13068a254792d1a_0.jpg',
//            $list1 = APP_PATH.'/public/uploads/23/a9104ca7ffa47cfda13068a254792d1a_1.jpg',
//            $list1 = APP_PATH.'/public/uploads/23/a9104ca7ffa47cfda13068a254792d1a_2.jpg',
//             $list1 = APP_PATH.'/public/uploads/23/a9104ca7ffa47cfda13068a254792d1a_3.jpg',
//        );
//
//        $animation = new Imagick();
//        $animation->setFormat('gif');
//        foreach ( $filelist as $file ){
//            $image = new Imagick();
//            $image->readImage( $file );  //合并图片
//            $animation->addImage( $image ); //加入到对象
//            $animation->setImageDelay(10); //设定图片帧数
//            unset( $image );    //清除内存里的图像，释放内存
//        }
        //以下两行是调试时用的，测试是否生成了gif图片
        //header( "Content-Type: image/gif" );
        //echo( $animation->getImagesBlob() );
        //生成的GIF文件名组合
       // $images = '123.gif';
        //生成GIF图片
       // $animation->writeImages( $images,true );
       // var_dump($datas);
//        $data = $ffprobe
//            ->streams($data) // extracts streams informations
//            ->videos()                      // filters video streams
//            ->first()                       // returns the first video stream
//            ->get('codec_name');            // returns the codec_name property
//        echo $data;

//        $video = $ffmeg->open($data);
//        $video->filters()
//            ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
//            ->synchronize();
//        $video
//            ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
//            ->save('frame.jpg');


        //$iipp=$_SERVER["REMOTE_ADDR"];
       // echo $iipp;
     //  $a = new UserModel();
       //echo Base_Config::getConfig('web')->stroot;
        //echo "hello world";
//        $data = new Danmu_Cache_Cache();
//
//        $obj = $data->test();
//        var_dump($obj);
       $this->getView()->display('index/index.tpl');
    }
}