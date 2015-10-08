function siteResize () {
	var wrapper = $('#wrapper');	
	wrapper.css("min-height", $(window).height() - parseInt(wrapper.css("padding-top")) - parseInt(wrapper.css("padding-bottom")));
};

$( window ).ready(function() {
	siteResize();
});

$( window ).resize(function() {
	siteResize();
});