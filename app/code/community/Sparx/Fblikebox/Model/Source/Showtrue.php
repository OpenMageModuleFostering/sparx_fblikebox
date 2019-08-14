<?php
class Sparx_Fblikebox_Model_Source_Showtrue
{
	/**
     * Options getter
     *
     * @return array
     */
	public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('fblikebox')->__('True')),
            array('value' => 0, 'label'=>Mage::helper('fblikebox')->__('False'))
        );
    }
}
