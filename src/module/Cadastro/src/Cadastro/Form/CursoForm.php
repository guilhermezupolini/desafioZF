<?php
/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 16/06/2017
 * Time: 15:16
 */

namespace Cadastro\Form;

use Zend\Form\Element\Hidden;
use Zend\Form\Element\Text;
use Zend\Form\Form;

class CursoForm extends Form {
    public function __construct($name = null, array $options = array())
    {
        parent::__construct($name, $options);

        $idCurso = new Hidden('idCurso');
        $idCurso->setAttributes(array(
            'id' => 'idCurso'
        ));
        $this->add($idCurso);

        $noCurso = new Text("noCurso");
        $noCurso->setLabel("Nome: ")
        ->setAttributes(array(
            'required' => true,
            'maxlength' => '100',
            'id' => 'noCurso',
            'class' => 'form-control'
        ))->setLabelAttributes(array('class' => 'control-label'));
        $this->add($noCurso);

        $sgCurso = new Text("sgCurso");
        $sgCurso->setLabel("Sigla: ")
        ->setAttributes(array(
           'required' => true,
            'maxlength' => '10',
            'id' => 'sgCurso',
            'class' => 'form-control',
        ))->setLabelAttributes(array('class' => 'control-label'));
        $this->add($sgCurso);

        $chCurso = new Text('chCurso');
        $chCurso->setLabel("Carga Horária: ")
        ->setAttributes(array(
            'required' => true,
            'id' => 'chCurso',
            'maxlength' => '5',
            'class' => 'form-control',
        ))->setLabelAttributes(array('class' => 'control-label'));
        $this->add($chCurso);
    }
}