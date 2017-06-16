<?php
/**
 * Created by PhpStorm.
 * User: guilherme.zupolini
 * Date: 14/06/2017
 * Time: 16:18
 */

/*return array(
    'router' => array(
        'routes' => array(
            'cadastro' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/cadastro',
                    'defaults' => array(
                        'controller' => 'Cadastro\Controller\Cadastro',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:action]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Cadastro\Controller\Cadastro' => 'Cadastro\Controller\CadastroController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);*/

return array(
  'router' => array(
      'routes' => array(
          'cadastro' => array(
              'type' => 'Literal',
              'options' => array(
                  'route' => '/cadastro',
                  'defaults' => array(
                      'controller' => 'Cadastro\Controller\Cadastro',
                      'action' => 'index',
                  ),
              ),
              'may_terminate' => true,
              'child_routes' => array(
                  'default' => array(
                      'type' => 'Segment',
                      'options' => array(
                          'route' => '/[:action]',
                          'constraints' => array(
                              'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                          ),
                      ),
                  ),
              ),
          ),
      ),
  ),
    'controllers' => array(
        'invokables' => array(
            'Cadastro\Controller\Cadastro' => 'Cadastro\Controller\CadastroController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);