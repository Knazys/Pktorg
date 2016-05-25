<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</div>
    <div class="push"></div>

</div>

<footer id="footer">
	<div class="footer-cap"></div>
        
    <div class="footer-inner1">
        <div class="container">
            
            <nav id="footernav" class="clearfix">
               	<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
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
            </nav>
            
        </div>
    </div>
        
    <div class="footer-inner2">
		<div class="container">
			<?
			$APPLICATION->IncludeFile(
				SITE_DIR."include/copyright.php",
				Array(),
				Array("MODE"=>"html")
			);
			?>
            <div class="footer-house"></div>
        </div>
    
    </div>
        
</footer>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'QPSYdumUIJ';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>