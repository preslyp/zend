<?php

return array(
      
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Index' => 'Admin\Controller\IndexController',
            'category' => 'Admin\Controller\CategoryController',
        ),
    ),
    'router' => array(
        'routes' => array(
            
            'admin' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/admin/',
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Index',
                        'action' => 'index',
                    ),
                ),
                
                'may_terminate' => true,
            
                'child_routes' => array (
                    'category' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => 'category/[:action/][:id/]',
                            'defaults' => array(
                                'controller' => 'category',
                                'action' => 'index',
                            )
                        )
                    ),
                ),  //child_routes
                
                
            ), //admin                  
        ),//routes
    ),//router
    
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
