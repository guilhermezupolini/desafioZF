<?php

/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 14/06/2017
 * Time: 16:48
 */

namespace Cadastro\Controller;

use Cadastro\Form\CursoForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CadastroController extends AbstractActionController {

    public function indexAction()
    {
        $texto = "Eu fui definido no controller, mas vou aparecer na view";

        $form = new CursoForm('Curso');

        return new ViewModel(array('exemplo' => $texto, 'form' => $form));
    }

    public function salvarCursoAction(){
        $request = $this->getRequest();
        $post = $request->getPost()->toArray();

        if($post){
            $retorno = array('status' => 'sucesso', 'msg' => "Dados salvos com sucesso");
        }else{
            $retorno = array('status' => 'erro', 'msg' => "Erro ao salvar as informações");
        }

        return $this->getResponse()->setContent(json_encode($retorno));
    }
}