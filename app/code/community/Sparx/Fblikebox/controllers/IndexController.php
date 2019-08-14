<?php
class Sparx_Fblikebox_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Fb Like Box"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("fblikebox", array(
                "label" => $this->__("Fb Like Box"),
                "title" => $this->__("Fb Like Box")
		   ));

      $this->renderLayout(); 
	  
    }
}
