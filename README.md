# ColorBox

Colorbox is a lightweight customizable lightbox plugin for jQuery

This module povides colorbox features for silverstripe pages, such as:

 * Photo Gallery
 * Youtube videos

## Maintainer Contact

 * Jeremy Shipman (Jedateach jeremy@burnbright.net)

## Installation

Put colorbox directory into your SilverStripe root directory.

## Documentation

Colorbox is triggered by adding the appropriate 'class' or 'rel' attribute to your links

Photos:
	
	<a class="photo" href="myphoto.jpg"><img src="myphoto_thumb.jpg"></a>
	
	<a href="myphoto1.jpg" rel="slide"><img src="myphoto1_thumb.jpg"></a>
	<a href="myphoto2.jpg" rel="slide"><img src="myphoto2_thumb.jpg"></a>


Youtube:

	<a class="youtube" href="http://www.youtube.com/embed/617ANIA5Rqs?rel=0&amp;wmode=transparent">Watch video</a>

Note that youtube videos need to use the embed URL, as the video will play inside an iframe.

See http://www.jacklmoore.com/colorbox for more information about colorbox


### Customising Styling

It is possible to customise the look of the colorbox. You will need to create your own theme files.

themes
	currenttheme_colorbox
		css
			colorbox.css
		images
			...appropriate images...
			
Some example themes can be obtained from the colorbox original dowload at http://www.jacklmoore.com/colorbox.