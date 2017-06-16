<?php
/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 14/06/2017
 * Time: 16:18
 */

namespace Cadastro;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module{
    public function onBootstrap(MvcEvent $e){
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
          'Zend\Loader\StandardAutoloader' => array(
              'namespace' => array(
                  __NAMESPACE__ => __DIR__ .  '/src/' . __NAMESPACE__,
              ),
          ),
        );
    }
}