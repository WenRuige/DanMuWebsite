<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/26
 * Time: 下午2:03
 */

class ToolController extends Base_Controller_Page{
    public function init() {
        $this->setNeedLogin(false);
        parent::init();
    }
    //处理图片数据
//    public function handlePictureAction($file){
//        $ffmeg = \FFMpeg\FFMpeg::create([
//            'ffmpeg.binaries'  => '/usr/local/bin/ffmpeg',
//            'ffprobe.binaries' => '/usr/local/bin/ffprobe'
//        ]);
//        $video = $ffmeg->open($file);
//        $video->filters()
//            ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
//            ->synchronize();
//        $video
//            ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
//            ->save('frame.jpg');
//    }
    //将视频转化为图片
    public function convertPictureAction(){
        //视频名称
         $videoName    =   filter_input(INPUT_POST, 'videoName', FILTER_DEFAULT);
         //用户id
         $user_id = Yaf_Session::getInstance()->get(User_Keys::getLoginUserKey());
         $videoPath = APP_UPLOADS.'/'.$user_id.'/'.$videoName;
         //保存路径
         $savePath  = APP_UPLOADS.'/'.$user_id;
         //如果传递过来的视频名称和用户id都不为空的话
        if(!empty($videoName) && !empty($user_id)){
            //实例化视频处理插件,将视频处理成图片
            $FFMpegObj = new Base_FFMpeg();
            $FFMpegObj->videoToPicture($videoPath,$savePath,$videoName);
            //如果成功的话,将图片处理为gif图片


        }
    }

}