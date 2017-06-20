<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
//    'db' => array(
//        'driver'         => 'mysql',
//        'dsn'            => 'mysql:dbname=desafio-zf;host=localhost:3306',
//        'driver_options' => array(
//            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
//        ),
//    ),
//    'service_manager' => array(
//        'factories' => array(
//            'Zend\Db\Adapter\Adapter'
//            => 'Zend\Db\Adapter\AdapterServiceFactory',
//        ),
//    ),
//    'doctrine_config' => array(
//        'driver' => 'pdo_mysql',
//        'host'     => 'localhost',
//        'port'     => '3306',
//        'user' => 'root',
//        'password' => 'root',
//        'dbname' => 'desafio-zf'
//    ),
//
    'doctrine_config' => array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => 'root',
        'host'     => '127.0.0.1',
        'port'     => '3306',
//        'user' => 'root',
//        'password' => 'root',
        'dbname'   => 'desafio-zf'
    ),
);


//return array(
//    'doctrine' => array(
//        'connection' => array(
//            'orm_default' => array(
//                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
//                'params' => array(
//                    'host'     => 'localhost',
//                    'port'     => '3306',
//                    'user'     => 'root',
//                    'password' => 'root',
//                    'dbname'   => 'desafio-zf'
//                )
//            )
//        )
//    ),
//);