<?php
/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 14/06/2017
 * Time: 16:18
 */

namespace Cadastro;

use Cadastro\Service\CursoService;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\ServiceManager\ServiceManager;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\I18n\Translator\Translator;
use Zend\Validator\AbstractValidator;

class Module implements ServiceProviderInterface {

    const DOCTRINE_BASE_PATH = '/../../vendor/doctrine/orm/lib/Doctrine';

    public function onBootstrap(MvcEvent $e){
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $this->initializeDoctrine2($e);
    }

    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ .  '/src/' . __NAMESPACE__,
                    'Doctrine\Common' => realpath(__DIR__ . self::DOCTRINE_BASE_PATH . '/Common'),
                    'Doctrine\DBAL' => realpath(__DIR__ . self::DOCTRINE_BASE_PATH . '/DBAL'),
                    'Doctrine\ORM' => realpath(__DIR__ . self::DOCTRINE_BASE_PATH . '/ORM')
                ),
            ),
        );
    }

    public function initializeDoctrine2($e) {
        $conn = $this->getDoctrine2Config($e);
        $config = new Configuration();
        $cache = new ArrayCache();
        $config->setMetadataCacheImpl($cache);
        $annotationPath = realpath(__DIR__ . self::DOCTRINE_BASE_PATH . '/ORM/Mapping/Driver/DoctrineAnnotations.php');
        AnnotationRegistry::registerFile($annotationPath);
        $driver = new AnnotationDriver(
            new AnnotationReader(),
            array(__DIR__ . '/src/Cadastro/Entity')
        );
        $config->setMetadataDriverImpl($driver);
        $config->setProxyDir(__DIR__ . '/src/Cadastro/Proxy');
        $config->setProxyNamespace('Cadastro\Proxy');
        $entityManager = EntityManager::create($conn, $config);
        $GLOBALS['entityManager'] = $entityManager;
    }

    private function getDoctrine2Config($e) {
        $config = $e->getApplication()->getConfig();
        return $config['doctrine_config'];
    }

//    public function getServiceConfig()
//    {
//        return array(
//            'factories' => array(
//                'Cadastro\Service\CursoService' => function ($sm) {
//                    $em  = $sm->get('Doctrine\ORM\Entitymanager');
//                    $log = null;
//                    return new Service\ConviteService($sm, $em, $log);
//                }
//            )
//        );
//    }

    public function getServiceConfig()
    {
        return array(
            'factories' => ["CursoService" => function(ServiceManager $serviceManager){
                return new CursoService($serviceManager, $GLOBALS['entityManager']);
            }]
        );
    }
}