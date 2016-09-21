<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016/9/21
 * Time: 10:42
 */
use  Psr\Log\LoggerInterface;
class Base_Log{

    private $logger;

    public  function __construct(LoggerInterface $logger = null)
    {
         $this->logger = $logger;
    }
    //错误记录
    public function ERROR($errorLog){
        if($this->logger){
            $this->logger->ERROR($errorLog);
        }

    }



}