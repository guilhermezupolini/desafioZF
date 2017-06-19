<?php

/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 19/06/2017
 * Time: 12:06
 */

namespace Cadastro\Entity;

/**
 * Curso
 * @ORM\Entity
 * @ORM\Table(name="DESAFIO-ZF.TB_CURSO")
 * @ORM\Entity(repositoryClass="Cadastro\Entity\Repository\CadastroRepository")
*/
class Curso
{
    /**
     * @var Integer
     * @ORM\Id
     * @ORM\Column(name="id_curso" type="integer", nullable="false")
    */
    private $idCurso;

    /**
     * @var String
     *
     * @ORM\Column(name="nm_curso" type="string", nullable="false")
     */
    private $noCurso;

    /**
     * @var String
     *
     * @ORM\Column(name="sg_curso" type="string", nullable="false")
     */
    private $sgCurso;

    /**
     * @var Integer
     *
     * @ORM\Column(name="nu_carga_horario" type="integer", nullable="false")
     */
    private $chCurso;

    /**
     * @return mixed
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * @param mixed $idCurso
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }

    /**
     * @return mixed
     */
    public function getNoCurso()
    {
        return $this->noCurso;
    }

    /**
     * @param mixed $noCurso
     */
    public function setNoCurso($noCurso)
    {
        $this->noCurso = $noCurso;
    }

    /**
     * @return mixed
     */
    public function getSgCurso()
    {
        return $this->sgCurso;
    }

    /**
     * @param mixed $sgCurso
     */
    public function setSgCurso($sgCurso)
    {
        $this->sgCurso = $sgCurso;
    }

    /**
     * @return mixed
     */
    public function getChCurso()
    {
        return $this->chCurso;
    }

    /**
     * @param mixed $chCurso
     */
    public function setChCurso($chCurso)
    {
        $this->chCurso = $chCurso;
    }



}