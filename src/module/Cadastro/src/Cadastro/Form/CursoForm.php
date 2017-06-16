<?php
/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 16/06/2017
 * Time: 15:16
 */

namespace Cadastro\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

class CursoForm extends Form {
    public function __construct($name = null, array $options = array())
    {
        parent::__construct($name, $options);

        $nome = new Text("nome");
        $nome->setLabel("Nome: ")
        ->setAttributes(array(
            'required' => true,
            'maxlength' => '100',
            'id' => 'noCurso',
            'class' => 'form-control'
        ));
        $this->add($nome);

        $sigla = new Text("sigla");
        $sigla->setLabel("Sigla: ")
        ->setAttributes(array(
           'required' => true,
            'maxlength' => '10',
            'id' => 'sigla',
            'class' => 'form-control',
        ));
        $this->add($sigla);
    }
}