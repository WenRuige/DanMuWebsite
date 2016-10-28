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
            //回传的为名称
            $res = $FFMpegObj->videoToPicture($videoPath,$savePath,$videoName);
            //如果回传的文件名称不为空的话
            if(!empty($res)){
              //循环将图片放入数组中
               $image = new Base_Imagick();
                //传递过去的参数分别为 1,保存路径2,图片名称3,生成图片类别
               $res = $image->pictureToGif($savePath,$res,'gif');
                if($res['CODE'] == Base_Error::SYSTEM_SUCCESS){
                    echo "缩略图生成成功!";
                }else{
                    echo "缩略图生成失败!";
                }
            }
            //如果成功的话,将图片处理为gif图片
        }else{
            echo '有些不太对';
        }
    }

}