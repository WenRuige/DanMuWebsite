<?php

class IndexController extends Base_Controller_Page {
    //封装了construct()方法
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }
    public function indexAction(){

// $data = APP_PATH.'/public/ocean.mp4';
//        $ffmeg = \FFMpeg\FFMpeg::create([
//            'ffmpeg.binaries'  => '/usr/local/bin/ffmpeg',
//            'ffprobe.binaries' => '/usr/local/bin/ffprobe'
//        ]);
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