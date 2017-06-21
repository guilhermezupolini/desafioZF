<?php

/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 14/06/2017
 * Time: 16:48
 */

namespace Cadastro\Controller;

use Cadastro\Entity\Curso;
use Cadastro\Form\CursoForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;

class CadastroController extends AbstractActionController {

    public function indexAction()
    {
        $texto = "Eu fui definido no controller, mas vou aparecer na view";

        $form = new CursoForm('Curso');

//        $cursoService = $this->getServiceLocator()->get("CursoService");
//        $cursoService->teste();

        return new ViewModel(array('exemplo' => $texto, 'form' => $form));
    }

    public function salvarCursoAction(){
        $request = $this->getRequest();
        $post = $request->getPost()->toArray();

        if($post){
            try{
                $curso = new Curso();
                $curso->setNoCurso($post["noCurso"]);
                $curso->setSgCurso($post["sgCurso"]);
                $curso->setChCurso($post["chCurso"]);

                $cursoService = $this->getServiceLocator()->get("CursoService");
//                $cursoService->save($post);
                $cursoService->salvar($curso);
//                $cursoService->flush();


                $retorno = array('status' => 'sucesso', 'msg' => "Dados salvos com sucesso");
            }catch (Exception $e){
                $retorno = array('status' => 'erro', 'msg' => "Erro ao salvar as informações");
            }

        }else{
            $retorno = array('status' => 'erro', 'msg' => "Erro ao salvar as informações");
        }

        return $this->getResponse()->setContent(json_encode($retorno));
    }

    public function consultarAction(){

        $form = new CursoForm("ConsultaCurso");

        return new ViewModel(array('form' => $form));
    }

    public function consultarCursoAction(){
        $cursoService = $this->getServiceLocator()->get("CursoService");
        $dados =  $cursoService->findAll();

        foreach ($dados as $dado){
          $curso["idCurso"] = $dado->getIdCurso();
          $curso["noCurso"] = $dado->getNoCurso();
          $curso["sgCurso"] = $dado->getSgCurso();
          $curso["chCurso"] = $dado->getChCurso();

          $cursos[] = $curso;
        }

//        var_dump($cursos);
//
//        exit;

        $retorno = array("msg" => "cheguei", "dados" => $cursos);

        return $this->getResponse()->setContent(json_encode($retorno));
    }
}