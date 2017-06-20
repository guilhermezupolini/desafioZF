<?php
/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 19/06/2017
 * Time: 15:58
 */
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'root',
                    'dbname'   => 'desafio-zf'
                )
            )
        )
    ),
);