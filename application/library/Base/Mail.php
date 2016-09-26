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
    public  $swift;
    public function __construct()
    {
        $mail = Base_Config::getConfig('mail');
       // var_dump($mail);
        $transport = Swift_SmtpTransport::newInstance($mail->host,$mail->port);
        $transport->setUsername($mail->username);
        $transport->setPassword($mail->password);
        $this->swift = Swift_Mailer::newInstance($transport);
    }


    public function sendRegisterEmail($email,$token){
        //获取当前网站的路径

        $webRoot = Base_Config::getConfig('web')->stroot;
        $subject = '感谢您注册ギリギリ弹幕网 Best Regards!';
        $from = array('gewenrui88@sina.com' =>'ギリギリ弹幕网');
        $to = array(
            "{$email}"  => "{$email}",
        );
        $html = '尊敬的'.$email.'用户:</br>'.
                 '感谢您在我站注册,请点击以下链接来激活您的账号'.
                 '<strong><a href="'.$webRoot.'/user/register/active?verify='.$token.'">链接地址</a></strong>'.
                 '如果以上链接没有效果请将地址复制到浏览器地址栏进行访问,该链接24小时有效</br>'.
                 '谢谢';
        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
        //var_dump($this->swift);
        // var_dump($message);
        if ($recipients = $this->swift->send($message, $failures))
        {
            $result = array(
                'CODE'      => Base_Error::MODEL_RETURN_SUCCESS,
                'MESSAGE'   => '注册邮件已经发送到您的邮箱,请登录邮箱并激活您的账号!'
            );
            return $result;
        } else {
            echo $failures;
            $log = new Base_Log();
            $log->ERROR("发送邮件失败!");
            $result = array(
                'CODE'      => Base_Error::MAIL_SEND_ERROR,
                'MESSAGE'   => '邮件发送失败!'
            );
            return $result;
        }
    }
    //发送修改密码的邮件
    public function sendChangePasswordMail($email){
        $webRoot = Base_Config::getConfig('web')->stroot;
        $token = base64_encode($email);
        $subject = 'ギリギリ弹幕网修改密码';
        $from = array('gewenrui88@sina.com' =>'ギリギリ弹幕网');
        $to = array(
            "{$email}"  => "{$email}",
        );
        $html = '尊敬的'.$email.'用户:</br>'.
            '您确认要修改密码吗'.
            '<strong><a href="'.$webRoot.'/user/forget/active?verify='.$token.'">链接地址</a></strong>'.
            '如果以上链接没有效果请将地址复制到浏览器地址栏进行访问,该链接24小时有效</br>'.
            '谢谢';

        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
        if ($recipients = $this->swift->send($message, $failures))
        {
            $result = array(
                'CODE'      => Base_Error::MODEL_RETURN_SUCCESS,
                'MESSAGE'   => '修改密码邮件已经发送到您的邮箱,请登录邮箱并修改您的账号!'
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


    public function testMailer(){

        $transport = Swift_SmtpTransport::newInstance('smtp.sina.com',25);
        $transport->setUsername('gewenrui88@sina.com');
        $transport->setPassword('sharkcphqw12345');
        $swift = Swift_Mailer::newInstance($transport);
        $subject = '感谢您注册ギリギリ弹幕网 Best Regards!';
        $from = array('gewenrui88@sina.com' =>'ギ答阿斯顿');
        $to = array(
            "941137860@qq.com"  => "59197832@qq.com",
        );
        $html = '早上好';
        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($html, 'text/html');
        $message->setTo($to);
      //  var_dump($swift);

        try{
            $flag = $swift->send($message);
            //var_dump($flag);
        }
        catch (Swift_ConnectionException $e){
            echo 'There was a problem communicating with SMTP: ' . $e->getMessage();
        }
    }




}