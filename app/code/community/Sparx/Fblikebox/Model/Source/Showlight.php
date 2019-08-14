<?php
class Sparx_Fblikebox_Model_Source_Showlight
{
	/**
     * Options getter
     *
     * @return array
     */
	public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('fblikebox')->__('Light')),
            array('value' => 0, 'label'=>Mage::helper('fblikebox')->__('Dark'))
        );
    }
}
