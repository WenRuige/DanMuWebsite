<?php
/**
 * @name Bootstrap
 * @author root
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Ap调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends  Yaf_Bootstrap_Abstract{

    public function _initNamespace(Yaf_Dispatcher $dispatcher) {
    }

    public function _initConfig(Yaf_Dispatcher $dispatcher) {
        Base_Config::setOption(array('section' => ini_get('yaf.environ')));
    }
    //加载控制器
    public function _initView(Yaf_Dispatcher $dispatcher) {
        // 在这里注册自己的view控制器，例如smarty,firekylin
        $smarty = new Smarty_Adapter(null, Base_Config::getConfig("smarty"));
        Yaf_Dispatcher::getInstance()->setView($smarty);
        Yaf_Dispatcher::getInstance()->autoRender(FALSE);  // 关闭自动加载模板
    }
    public function _initLog(Yaf_Dispatcher $dispatcher) {
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        //注册一个插件
    }
    public function _initRoute(Yaf_Dispatcher $dispatcher) {
    }
    //加载依赖库
    public function _initAutoload(Yaf_Dispatcher $dispatcher){
        Yaf_Loader::import(APP_PATH.'/vendor/autoload.php');
    }
}
