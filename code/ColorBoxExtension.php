<?php

class ColorBoxExtension extends Extension{
	
	function extraStatics(){
		return array();
	}
	
	function contentcontrollerInit(){
		
		Requirements::Javascript(THIRDPARTY_DIR.'/jquery/jquery.js');
		Requirements::themedCSS("colorbox");

		Requirements::javascript("colorbox/javascript/jquery.colorbox-min.js");
		Requirements::javascript("colorbox/javascript/colorbox.js");
		
	}
	
}
