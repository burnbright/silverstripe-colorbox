# ColorBox

Colorbox is a lightweight customizable lightbox plugin for jQuery.
See http://www.jacklmoore.com/colorbox for more information about colorbox

This module povides colorbox features for silverstripe pages, including:

 * Photo Gallery
 * Youtube videos

## Maintainer Contact

 * Jeremy Shipman (Jedateach jeremy@burnbright.net)

## Installation

Put colorbox directory into your SilverStripe root directory.

## Documentation

Colorbox is triggered by adding the appropriate 'class' or 'rel' attribute to your links
If you define classes in your editor.css file, they should show up in the TinyMCE style dropdown.

Giving the link a title/description will show up as a caption on the box.

Photos:
	
	<a class="photo" href="myphoto.jpg" title="My photo"><img src="myphoto_thumb.jpg"></a>
	
	<a href="myphoto1.jpg" rel="slide"><img src="myphoto1_thumb.jpg"></a>
	<a href="myphoto2.jpg" rel="slide"><img src="myphoto2_thumb.jpg"></a>


Youtube:

	<a class="youtube" href="http://www.youtube.com/watch?v=hMDhyDFqtz8">Watch video</a>

Any type of youtube link should work.

### Customising Styling

It is possible to customise the look of the colorbox. You will need to create your own theme files.

* themes
	
	* currenttheme_colorbox
		
		* css
			
			* colorbox.css
		* images
		
			* ...appropriate images...
			
Some example themes can be obtained from the colorbox original dowload at http://www.jacklmoore.com/colorbox.

## Troubleshooting

#### Link goes to image/video, rather than showing in box

This probably means the javascript isn't working for some reason.
Check that the script is even included on your page.

#### The box shrinks down to a small shape.

You may have assigned the wrong class to the link. 