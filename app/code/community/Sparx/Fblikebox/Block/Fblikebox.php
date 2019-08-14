<?php   
class Sparx_Fblikebox_Block_Fblikebox extends Mage_Core_Block_Template{	 
	 
	 /**
     * Create Ifrom for Facebook Fan Page
     *
     * @return HTMl
     */
	public function getFbContent(){
		$_helper = Mage::helper('fblikebox');
		$box_href=$_helper->getHref();
		$box_width=$_helper->getWidth();
		$box_height=$_helper->getHeight();	
		$box_colorscheme=$_helper->getColorscheme();	
		$box_header=$_helper->isShowHeader();
		$box_force_wall=$_helper->getForceWall();	
		$box_show_border=$_helper->isShowBorder();
		$box_show_faces=$_helper->isShowFaces();
		$box_stream=$_helper->isShowStream();
		$box_connection=$_helper->getConnection();
		$box_content="";
		 $box_content .='<iframe src="http://www.facebook.com/plugins/likebox.php?href='. urlencode($box_href);
		 if($box_width)
		 {
		  $box_content .= '&amp;width='. $box_width;
		 }
		 if($box_height)
		 {
		  $box_content .= '&amp;height='. $box_height;
		 }
		 
		 $box_content .= '&amp;connections='. $box_connection;
		 
		 if($box_header)
		 {
		  $box_content .= '&amp;header=true';
		 }else{
			 $box_content .= '&amp;header=false';
		 }
		 if($box_show_border)
		 {
		  $box_content .= '&amp;show_border=true';
		 }else{
			 $box_content .= '&amp;show_border=false';
		 }
		 if($box_show_faces)
		 { 
		  $box_content .= '&amp;show_faces=true';
		 }else{
			 $box_content .= '&amp;show_faces=false';
		 }
		 if($box_colorscheme)
		 {
		  $box_content .= '&amp;colorscheme='.$box_colorscheme;
		 }
		 if($box_stream)
		 {
		  $box_content .= '&amp;stream=true';
		 }
		 $box_content .= '" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; ';
		 
		 if($box_width)
		 {
		  $box_content .= ' width:'. $box_width . 'px; ';
		 }
		 if($box_height)
		 {
		  $box_content .= ' height:'. $box_height. 'px; ';
		 }
		 $box_content .= '"></iframe>';
			return $box_content;
		}

}
