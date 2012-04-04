jQuery(document).ready(function($){
	//single photos
	$("a.photo").colorbox({opacity:0.4});
	//slideshow
	$("a[rel=\"slide\"]").colorbox({rel:'slide',opacity:0.2});
	//youtube links
	$("a.youtube").colorbox({
		iframe:true,
		innerWidth:640,
		innerHeight:390,
		rel:'grp',
		href: function(){
			var id = extractYoutubeId($(this).attr('href'));
			return "http://www.youtube.com/embed/"+id+"?rel=0&amp;wmode=transparent";
		}
	});
	function extractYoutubeId(url) {
	    return url.match(
        /(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=))([\w\-]{10,12})\b[?=&\w]*(?!['"][^<>]*>|<\/a>)/
        )[1];
	}
});