<?php

class ColorBoxExtension extends Extension{
	
	function extraStatics(){
		return array();
	}
	
	function contentcontrollerInit(){
		
		Requirements::Javascript(THIRDPARTY_DIR.'/jquery/jquery.js');
		Requirements::themedCSS("colorbox");

		Requirements::javascript(project()."/javascript/jquery.colorbox-min.js");
		$colorbox = <<<COLORBOX
		jQuery(document).ready(function($){
			$("a.photo").colorbox();
			$("a[rel="slide"]").colorbox({rel:'slide'});
			$("a.youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390,opacity:0.5,rel:'grp'});
		});
COLORBOX;
		
		Requirements::customScript($colorbox);
		
	}
	
}
