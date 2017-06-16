<?php

/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 14/06/2017
 * Time: 16:48
 */

namespace Cadastro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CadastroController extends AbstractActionController {

    public function indexAction()
    {
        $texto = "Eu fui definido no controller, mas vou aparecer na view";

        return new ViewModel(array(
            'exemplo' => $texto,
        ));
    }
}