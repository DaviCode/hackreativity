<?php

class VendorController extends Zend_Controller_Action
{
	protected $_adminModel;
	protected $_authService;
	protected $_form;
	
	
    public function init()
    {
    	$this->_helper->layout->setLayout('vendor');   	      
    }

    public function indexAction()
    {
        
    }
    
	public function logoutAction()
	{
		return $this->_helper->redirector('index','public');	
	}

    public function newproductAction() 
    {
        
    }

	public function addproductAction() 
    {
      
    }
    public function accountsettingsAction()
    {
        
    }  

	

}
