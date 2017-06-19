<?php

/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 19/06/2017
 * Time: 13:57
 */
use Doctrine\ORM\EntityManager;

class CursoService
{
    public static $entity = 'Cadastro\Entity\Curso';

    public function getRepository(){
        return $this->getEntityManager()->getRepository(self::$entity);
    }
}