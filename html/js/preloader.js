// JavaScript Document
(function($){


preLoad = function(options) 
{
	var
	totalLoads			= 0,
	currentLoaded		= 0,
	oldIE				= false,
	ieTimeout,
	items				= new Array
	(
		'../../html/images/building1/pie1.png',
		'../../html/images/building2/pie1.png'
	),
	
	$loader,
	$preloader,
	$progressBar,
	$completeBar,
	$percBlock;
	
	
	var defaults = 
	{
		container: 			'#configurator',
		ieLoadFixTime: 		2000,
		progressBarHeight: 	14,
		progressBarWidth: 	704,
		animationSpeed:		600,
		animationEasing:	'linear'
	}
	
	var settings = $.extend({}, defaults, options);
	//console.log(settings);
	
	
	function init()
	{ 
		
		if ($('html').is('.ie6, .ie7, .ie8')) oldIE = true;
		
		spawnLoader();
		getImagesList();
		createPreloading();
		
		//help IE drown if it is trying to die :)
		ieTimeout = setTimeout(ieLoadFix, settings.ieLoadFixTime);
	}
	
	function imgCallback()
	{
		currentLoaded ++;
		animateLoader();
	}
	
	getImagesList =	function()
	{		
		var everything = $(settings.container).find("*:not(script)").each(function()
		{
			var
			$image = $(this),
			url = "";
			
			if ($image.css("background-image") != "none")
			{
				var url = $image.css("background-image");
			}
			else if (typeof($image.attr("src")) != "undefined" && $image[0].tagName.toLowerCase() == "img")
			{
				var url = $image.attr("src");
			}
			
		
			url = url.replace("url(\"", "");
			url = url.replace("url(", "");
			url = url.replace("\")", "");
			url = url.replace(")", "");
			
			var urlPattern = /(\"|\'|\(|\))+/i;
			if( urlPattern.test( url ) ) url = '';
			
			if (url.length > 0) items.push(url);
		});
		
		//console.log(items);
		totalLoads = items.length;
	}
	
	spawnLoader = function()
	{		
		$loader 		= $('#preloader-wrapper');
		$progressBar 	= $loader.find('#progress-bar');
		$completeBar 	= $loader.find('#complete-bar');
		$percBlock 		= $loader.find('#perc');
	}
	
	createPreloading = function()
	{
		/*$preloader = $("<div>").appendTo($loader);
		$preloader.css({
			height: 	"0px",
			width:		"0px",
			overflow:	"hidden"
		});*/
		
		
		for (var i = 0; i < totalLoads; i++)
		{
			var $imgLoad = $("<img>").attr("src", items[i]).unbind("load").bind("load", function()
			{
				imgCallback();
			});
			//$imgLoad.appendTo($preloader);
		}
	}
	
	function animateLoader()
	{
		var	perc = (100 / totalLoads) * currentLoaded;
			
		if (perc > 99)
		{			
			$completeBar.stop().animate
			(
				{'width': perc + '%'},
				{
					duration :	settings.animationSpeed,
					easing:		settings.animationEasing,
					step:		function(now, obj){ $percBlock.html( parseInt(now) + '%'); },
					complete:	function(){ doneLoad(); }
				}
			);
		}
		else
		{
			$completeBar.stop().animate
			(
				{'width': perc + '%'},
				{
					duration :	settings.animationSpeed,
					easing:		settings.animationEasing,
					step:		function(now, obj){ $percBlock.html( parseInt(now) + '%'); }
				}
			);
		}
	}
	
	function doneLoad()
	{
		//return;
		//prevent IE from calling the fix
		clearTimeout(settings.ieTimeout);
		
		$progressBar.fadeOut(600,function()
		{
			$loader.remove();
		});
		$('.building').fadeIn(600);
	}
	
	
	function ieLoadFix()
	{
		if (oldIE)
		{
			while ((100 / totalLoads) * currentLoaded < 100) imgCallback();
		}
	}
		
	init();
}



})(jQuery);