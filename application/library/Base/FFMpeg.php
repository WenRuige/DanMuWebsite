<?php

/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/10/26
 * Time: 下午5:24
 */
//图像处理基类
class Base_FFMpeg
{
    public  $FFmpeg;
    public  $FFProbe;
    //将一个视频通过传递帧数的不同生成不同的图片
    public function __construct()
    {
        $ffmeg = \FFMpeg\FFMpeg::create([
            'ffmpeg.binaries'  => '/usr/local/bin/ffmpeg',
            'ffprobe.binaries' => '/usr/local/bin/ffprobe'
        ]);
        $this->FFmpeg = $ffmeg;
        $ffprobe = FFMpeg\FFProbe::create([
                'ffmpeg.binaries'  => '/usr/local/bin/ffmpeg',
                'ffprobe.binaries' => '/usr/local/bin/ffprobe'
        ]);
        $this->FFProbe = $ffprobe;

    }
    //将视频转化为图片 参数:
    //(1)视频路径(名称)
    //(2)要把图片保存的路径
    public function videoToPicture($file,$path,$videoName){
        //去除videoName的结尾
        $temp = explode('.',$videoName);
        $videoName = $temp[0];
        //获取到视频的长度
        $videoTimeLength =  $this->FFProbe->format($file)->get('duration');
        $video = $this->FFmpeg->open($file);
        $video->filters()
              ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
              ->synchronize();
        //初始化
        //策略:从视频的一半开始每一秒生成一张图片
        //最大生成5张照片,如果视频时长不到50
        for($i = 0,$start =($videoTimeLength/2); $i < 5 ;$i++,$start++){
            $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($start))->save($path.'/'.$videoName.'_'.$i.'.jpg');
        }
        return $videoName;
    }
}