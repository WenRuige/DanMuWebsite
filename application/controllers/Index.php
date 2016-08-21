<?php

class IndexController extends Yaf_Controller_Abstract{
    public function indexAction(){
        echo "this is fucking yaf";
        $this->getView()->assign("content","Helloworld");
    }
}