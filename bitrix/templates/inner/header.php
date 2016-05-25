<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>

<link href="/html/css/jresp.css" rel="stylesheet" type="text/css">
<link href="/html/css/style.css" rel="stylesheet" type="text/css">
<link href="/html/css/posts.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/html/js/html5.js"></script>
<script type="text/javascript" src="/html/js/jquery.js"></script>
<script type="text/javascript" src="/html/js/jcarousel.js"></script>
<script type="text/javascript" src="/html/js/scripts.js"></script>

<script src="/html/lightbox/js/lightbox.min.js"></script>
<link href="/html/lightbox/css/lightbox.css" rel="stylesheet" />

<?if(stripos($APPLICATION->GetCurPage(true), "/config/building1/") !== false):?>
	<link href="/html/css/configurator.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/html/js/building1.js"></script>
	<script type="text/javascript" src="/html/js/preloader.js"></script>
	<script type="text/javascript" src="/html/js/raphael-min.js"></script>
	<script type="text/javascript" src="/html/js/configurator.js"></script>
<?endif;?>

<?if(stripos($APPLICATION->GetCurPage(true), "/config/building2/") !== false):?>
	<link href="/html/css/configurator.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/html/js/preloader.js"></script>
	<script type="text/javascript" src="/html/js/configurator.js"></script>
<?endif;?>

<?if(stripos($APPLICATION->GetCurPage(true), "/contacts/") !== false):?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=ru"></script>
	<script type="text/javascript">
	var map;
	function initialize() {
	  var mapOptions = {
	    zoom: 8, //13
		disableDefaultUI: true,
	    center: new google.maps.LatLng(53.978817, 48.974051), // 54.302861, 48.305132
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  map = new google.maps.Map(document.getElementById('contacts-map'),
	 // map = new google.maps.Map(document.getElementById('main-wrapper'),
	      mapOptions);
		
		/* ÓËÜßÍÎÂÑÊ */
		var promkomUl_Position = new google.maps.LatLng(54.303113, 48.305164);
		var promkomUl_MarkerImage1 = new google.maps.MarkerImage(
			'../html/images/marker_ul.png',
			new google.maps.Size(162,216),
			new google.maps.Point(0,0),
			new google.maps.Point(81,200)
		);
		var promkomUl_1 = new google.maps.Marker({
			icon: promkomUl_MarkerImage1,
			position: promkomUl_Position, 
			map: map
		});
		var promkomUl_2 = new google.maps.Marker({
			position: promkomUl_Position
		});
		var promkomUl_MarkerImage2 = new google.maps.MarkerImage(
			'../html/images/name_map_main.png',
			new google.maps.Size(130,30),
			new google.maps.Point(0,0),
			new google.maps.Point(0,0)
		);
		var promkomUl_3 = new google.maps.Marker({
			icon: promkomUl_MarkerImage2,
			position: promkomUl_Position
		});
		
		google.maps.event.addListener(promkomUl_1, 'click', function() {
			map.setZoom(16);
			map.setCenter(promkomUl_1.getPosition());
		});
		document.getElementById("map-marker-ul").onclick = function(){
			map.setZoom(16);
			map.setCenter(promkomUl_1.getPosition());
			return false;
		};
		
		
		/* ÄÈÌÈÒÐÎÂÃÐÀÄ */
		var promkomDim_Position = new google.maps.LatLng(54.222352, 49.564623);
		var promkomDim_MarkerImage1 = new google.maps.MarkerImage(
			'../html/images/marker_dim.png',
			new google.maps.Size(162,216),
			new google.maps.Point(0,0),
			new google.maps.Point(81,200)
		);
		var promkomDim_1 = new google.maps.Marker({
			icon: promkomDim_MarkerImage1,
			position: promkomDim_Position, 
			map: map
		});
		var promkomDim_2 = new google.maps.Marker({
			position: promkomDim_Position
		});
		var promkomDim_MarkerImage2 = new google.maps.MarkerImage(
			'../html/images/name_map_main.png',
			new google.maps.Size(130,30),
			new google.maps.Point(0,0),
			new google.maps.Point(0,0)
		);
		var promkomDim_3 = new google.maps.Marker({
			icon: promkomDim_MarkerImage2,
			position: promkomDim_Position
		});
		
		google.maps.event.addListener(promkomDim_1, 'click', function() {
			map.setZoom(16);
			map.setCenter(promkomDim_1.getPosition());
		});
		document.getElementById("map-marker-dim").onclick = function(){
			map.setZoom(16);
			map.setCenter(promkomDim_1.getPosition());
			return false;
		};
		
		
		/* ÒÎËÜßÒÒÈ */
		var promkomTol_Position = new google.maps.LatLng(53.559149, 49.306050);
		var promkomTol_MarkerImage1 = new google.maps.MarkerImage(
			'../html/images/marker_tol.png',
			new google.maps.Size(162,216),
			new google.maps.Point(0,0),
			new google.maps.Point(81,200)
		);
		var promkomTol_1 = new google.maps.Marker({
			icon: promkomTol_MarkerImage1,
			position: promkomTol_Position, 
			map: map
		});
		var promkomTol_2 = new google.maps.Marker({
			position: promkomTol_Position
		});
		var promkomTol_MarkerImage2 = new google.maps.MarkerImage(
			'../html/images/name_map_main.png',
			new google.maps.Size(130,30),
			new google.maps.Point(0,0),
			new google.maps.Point(0,0)
		);
		var promkomTol_3 = new google.maps.Marker({
			icon: promkomTol_MarkerImage2,
			position: promkomTol_Position
		});
		
		google.maps.event.addListener(promkomTol_1, 'click', function() {
			map.setZoom(16);
			map.setCenter(promkomTol_1.getPosition());
		});
		document.getElementById("map-marker-tol").onclick = function(){
			map.setZoom(16);
			map.setCenter(promkomTol_1.getPosition());
			return false;
		};
		
		/* ÑÀÌÀÐÀ */
		var promkomSam_Position = new google.maps.LatLng(53.228063, 50.290715);
		var promkomSam_MarkerImage1 = new google.maps.MarkerImage(
			'../html/images/marker_sam.png',
			new google.maps.Size(162,216),
			new google.maps.Point(0,0),
			new google.maps.Point(81,200)
		);
		var promkomSam_1 = new google.maps.Marker({
			icon: promkomSam_MarkerImage1,
			position: promkomSam_Position, 
			map: map
		});
		var promkomSam_2 = new google.maps.Marker({
			position: promkomSam_Position
		});
		var promkomSam_MarkerImage2 = new google.maps.MarkerImage(
			'../html/images/name_map_main.png',
			new google.maps.Size(130,30),
			new google.maps.Point(0,0),
			new google.maps.Point(0,0)
		);
		var promkomSam_3 = new google.maps.Marker({
			icon: promkomSam_MarkerImage2,
			position: promkomSam_Position
		});
		
		google.maps.event.addListener(promkomSam_1, 'click', function() {
			map.setZoom(16);
			map.setCenter(promkomSam_1.getPosition());
		});
		document.getElementById("map-marker-sam").onclick = function(){
			map.setZoom(16);
			map.setCenter(promkomSam_1.getPosition());
			return false;
		};
		

		
	  	google.maps.event.addListener(map, 'zoom_changed', function() {
	    	var zoomLevel = map.getZoom();
		console.log(zoomLevel);
		if(zoomLevel > 15)
		{
			//ul
			promkomUl_1.setMap(null);
			promkomUl_2.setMap(map);
			promkomUl_3.setMap(map);
			//dim
			promkomDim_1.setMap(null);
			promkomDim_2.setMap(map);
			promkomDim_3.setMap(map);
			//tol
			promkomTol_1.setMap(null);
			promkomTol_2.setMap(map);
			promkomTol_3.setMap(map);
			//sam
			promkomSam_1.setMap(null);
			promkomSam_2.setMap(map);
			promkomSam_3.setMap(map);
		}
		else if(zoomLevel < 8)
		{
			//ul
			promkomUl_1.setMap(null);
			promkomUl_2.setMap(map);
			promkomUl_3.setMap(null);
			//dim
			promkomDim_1.setMap(null);
			promkomDim_2.setMap(map);
			promkomDim_3.setMap(null);
			//tol
			promkomTol_1.setMap(null);
			promkomTol_2.setMap(map);
			promkomTol_3.setMap(null);
			//sam
			promkomSam_1.setMap(null);
			promkomSam_2.setMap(map);
			promkomSam_3.setMap(null);
		}
		else
		{
			//ul
			promkomUl_2.setMap(null);
			promkomUl_3.setMap(null);
			promkomUl_1.setMap(map);
			//dim
			promkomDim_2.setMap(null);
			promkomDim_3.setMap(null);
			promkomDim_1.setMap(map);
			//tol
			promkomTol_2.setMap(null);
			promkomTol_3.setMap(null);
			promkomTol_1.setMap(map);
			//sam
			promkomSam_2.setMap(null);
			promkomSam_3.setMap(null);
			promkomSam_1.setMap(map);
		}
	  });
		
		
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
<?endif;?>
</head>

<body id="<?$APPLICATION->ShowProperty("body_class")?>">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63450812-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="main-wrapper">
        <div class="container">
            <header id="header">
				<?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/company_name.php",
					Array(),
					Array("MODE"=>"html")
				);
				?>
                
				<?$APPLICATION->IncludeComponent("bitrix:menu", "head", array(
					"ROOT_MENU_TYPE" => "top",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "",
					"USE_EXT" => "Y",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => ""
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "Y"
					)
				);?>
            </header>
            
            
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","head_hc",Array(
					"START_FROM" => "0",
					"PATH" => "",
					"SITE_ID" => "-"
				),
				false
			);?>
			
			<?if(stripos($APPLICATION->GetCurPage(true), "/catalog/") !== false):?>
				<div class="clearfix">
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"catalog_menu",
					Array(
						"VIEW_MODE" => "LIST",
						"SHOW_PARENT_NAME" => "Y",
						"IBLOCK_TYPE" => "catalog",
						"IBLOCK_ID" => "7",
						"SECTION_ID" => "",
						"SECTION_CODE" => "",
						"SECTION_URL" => "",
						"COUNT_ELEMENTS" => "Y",
						"TOP_DEPTH" => "3",
						"SECTION_FIELDS" => array("ID", "CODE", "NAME"),
						"SECTION_USER_FIELDS" => array(),
						"ADD_SECTIONS_CHAIN" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_GROUPS" => "Y"
					),
				false
				);?>
            <?endif;?>
			
            <section <?$APPLICATION->ShowProperty("section_class_html")?>>
				<?$APPLICATION->ShowProperty("h1_title_html")?>