<?php

class UserController extends Zend_Controller_Action
{	
    public function init()
    {
		$this->_helper->layout->setLayout('user');
		$this->_authService = new Application_Service_Auth();
    }

    public function indexAction()
    {}  

    public function logoutAction()
	{
		
		return $this->_helper->redirector('index','public');	
	}
    public function eectAction()
    {
        
    }
    public function searchmapAction()
    {
        
    }
    public function accsettingsAction()
    {
        
    }
    public function orderhistoryAction()
    {
        
    }
    public function pannellicatAction()
    {
        
    }
    public function lowcostAction()
    {
        
    }
    public function paleAction()
    {
        
    }
    public function carrelloAction()
    {
        
    }
    public function accountsettingsAction()
    {
        
    }  
    public function resultAction()
    {
        
    }
    
}

