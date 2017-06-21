<?php

namespace Cadastro\Service;

/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 19/06/2017
 * Time: 13:57
 */
use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\ServiceManager;

class CursoService
{
    public static $entity = 'Cadastro\Entity\Curso';

    protected $entityManager;

    protected $sm;
    protected $em;

    public function __construct(ServiceManager $sm, EntityManager $em)
    {
        $this->sm  = $sm;
        $this->em  = $em;
    }

    public function getServiceManager()
    {
        return $this->sm;
    }

    public function getEntityManager()
    {
        return $this->em;
    }

    public function getRepository(){
//        var_dump("janaiza");exit;
        return $this->getEntityManager()->getRepository(self::$entity);
    }

    public function teste(){
        return $this->getRepository()->findAll();
    }

    public function salvar($entity){
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }
}