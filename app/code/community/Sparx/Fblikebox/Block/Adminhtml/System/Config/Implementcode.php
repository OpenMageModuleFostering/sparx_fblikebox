<?php
class Sparx_Fblikebox_Block_Adminhtml_System_Config_Implementcode extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){
       
        return '
<div class="entry-edit-head collapseable"><a onclick="Fieldset.toggleCollapse(\'fblikebox_template\'); return false;" href="#" id="fblikebox_template-head" class="open">Implement Code</a></div>
<input id="fblikebox_template-state" type="hidden" value="1" name="config_state[fblikebox_template]">
<fieldset id="fblikebox_template" class="config collapseable" style="">
<h4 class="icon-head head-edit-form fieldset-legend">Code for Fb Like Box (FanBox)</h4>

<div id="messages">
    <ul class="messages">
        <li class="notice-msg">
            <ul>
                <li>'.Mage::helper('fblikebox')->__('Add code below to a template file').'</li>				
            </ul>
        </li>
    </ul>
</div>
<br>
<ul>
	<li>
		<code>
			$this->getLayout()->createBlock('.'"fblikebox/fblikebox"'.')->setTemplate('.'"fblikebox/fblikebox.phtml"'.')->toHtml();
		</code>
	</li>
</ul>
<br>
<div id="messages">
    <ul class="messages">
        <li class="notice-msg">
            <ul>
                <li>'.Mage::helper('fblikebox')->__('Put codeon a CMS page').'</li>				
            </ul>
        </li>
    </ul>
</div>
<br>
<ul>
	<li>
		<code>
			{{block type="fblikebox/fblikebox" name="fblikebox.cms" template="fblikebox/fblikebox.phtml"}}
		</code>
	</li>
</ul>
<br>
<div id="messages">
    <ul class="messages">
        <li class="notice-msg">
            <ul>
                <li>'.Mage::helper('fblikebox')->__('Please copy and paste the code below on one of xml layout files where you want to show the FB Like Box.').'</li>				
            </ul>
        </li>
    </ul>
</div>

<ul>
	<li>
		<code>
		 &lt;block type="fblikebox/fblikebox" name="fblikebox.fblikebox" template="fblikebox/fblikebox.phtml"&gt;<br>
		
		&lt;/block&gt;
		</code>	
	</li>
</ul>

<br>

</fieldset>';
    }
}
