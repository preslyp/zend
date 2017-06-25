<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Description of CategoryController
 *
 * @author Pancho
 */
class CategoryController extends AbstractActionController
{
    
    public function indexAction()
    {
        $entityManager = $this->getServiceLocator()->get(\Doctrine\ORM\EntityManager::class);
        
        $query = $entityManager->createQuery('SELECT u FROM Blog\Entity\Category u ORDER BY u.id DESC');
  
        $rows = $query->getResult();
           
        return array('category' => $rows);
        
        
    }
    
}
