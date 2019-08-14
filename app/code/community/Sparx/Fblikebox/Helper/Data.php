<?php
class Sparx_Fblikebox_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function isEnabled(){
		return Mage::getStoreConfig('fblikebox/general/enable');
	}
	public function isShowInRight(){
		return Mage::getStoreConfig('fblikebox/general/right');
	}
	public function isShowInLeft(){
		return Mage::getStoreConfig('fblikebox/general/left');
	}
	public function getHref(){
		return Mage::getStoreConfig('fblikebox/general/href');
	}
	public function getForceWall(){
		return Mage::getStoreConfig('fblikebox/general/force_wall');
	}
	public function getColorscheme(){
		if(Mage::getStoreConfig('fblikebox/general/colorscheme'))
		return 'light';
		else return 'dark';
	}
	public function isShowHeader(){
		return Mage::getStoreConfig('fblikebox/general/header');
	}
	public function isShowBorder(){
		return Mage::getStoreConfig('fblikebox/general/show_border');
	}
	public function isShowFaces(){
		return Mage::getStoreConfig('fblikebox/general/show_faces');
	}
	public function isShowStream(){
		return Mage::getStoreConfig('fblikebox/general/stream');
	}
	public function getHeight(){
		return Mage::getStoreConfig('fblikebox/general/height');
	}
	public function getWidth(){
		return Mage::getStoreConfig('fblikebox/general/width');
	}
	public function getConnection(){
		return Mage::getStoreConfig('fblikebox/general/connection');
	}	
}
	 
