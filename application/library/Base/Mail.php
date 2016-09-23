<?php
/**
 * Created by PhpStorm.
 * User: gewenrui
 * Date: 2016/9/23
 * Time: 8:12
 */
//email 基类
class Base_Mail{
    //初始化邮件方法
    protected  $swift;
    public function __construct()
    {
        $transport = Swift_SmtpTransport::newInstance('smtp.163.com', 25);
        $transport->setUsername('13641277502@163.com');
        $transport->setPassword('sharkcphqw12345');
        $this->swift = Swift_Mailer::newInstance($transport);
    }


    public function sendRegisterEmail($email,$token){
        //获取当前网站的路径
        $webRoot = Base_Config::getConfig('web')->stroot;
        $subject = '感谢您注册ギリギリ弹幕网 Best Regards!';
        $from = array('13641277502@163.com' =>'ギリギリ弹幕网');
        $to = array(
            "{$email}"  => "{$email}",
        );
        $html = "<em>{$email}用户,感谢您在我站注册,请点击以下链接来激活您的账号<strong><a href='s'.$webRoot>链接地址</a></strong>如果以上链接没有效果
                    请将地址复制到浏览器地址栏进行访问,该链接24小时有效,谢谢</em>";

        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
        if ($recipients = $this->swift->send($message, $failures))
        {
            $result = array(
                'CODE'      => Base_Error::MODEL_RETURN_SUCCESS,
                'MESSAGE'   => '发送成功!'
            );
            return $result;
        } else {
            $log = new Base_Log();
            $log->ERROR("发送邮件失败!");
            $result = array(
                'CODE'      => Base_Error::MAIL_SEND_ERROR,
                'MESSAGE'   => '邮件发送失败!'
            );
            return $result;
        }
    }






}