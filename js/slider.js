function initSlider (params) 
{
	var next = $(params.next);
	var prev = $(params.prev);

	var slider = $(params.slider);
	var container = $(params.container);

	var width = slider.width();
	var elems = container.children().length;

	function getCurrentPosition ()
	{
		return Math.abs(parseInt(container.css('margin-left'))) / width;
	}

	function moveTo (target) 
	{
		var current = getCurrentPosition();
		var simbol = current < target ? '-' : '+';
		var px = Math.abs(target - current) * width;

		container.animate( { marginLeft: simbol + '=' + px + 'px' }, 500 );
	}

	function moveToNext ()
	{
		moveTo( (getCurrentPosition() + 1) % elems );
	}

	function moveToPrev ()
	{
		var to = getCurrentPosition() -1;
		moveTo( to < 0 ? elems - 1 : to);
	}

	var intervalId = setInterval( function() { moveToNext();	}, 4000);

	next.click( function() {  moveToNext(); clearInterval(intervalId); } );

	prev.click( function() {  moveToPrev(); clearInterval(intervalId); } );		
}