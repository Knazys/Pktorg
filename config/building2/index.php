<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Конфигуратор");
$APPLICATION->AddChainItem("Конфигуратор", "/config/");
$APPLICATION->AddChainItem("Для строительных организаций", "");
$APPLICATION->SetPageProperty("body_class", "page-configurator");
$APPLICATION->SetPageProperty("section_class_html", "");
//$APPLICATION->SetPageProperty("h1_title_html", "<h1>Контакты</h1>");
?>
 <div id="configurator">
	<div id="building2" class="building">
		<div class="info-description">
			Нажмите на любой элемент, чтобы получить <br>развернутую информацию о нем.
		</div>
        
        <div class="eye click-zone i_krovla1" data-element="i_krovla" data-info-position="right" data-pie="10" data-pieid="81"></div>
        <div class="eye click-zone i_krovla2" data-element="i_vnutr_stena" data-info-position="right" data-pie="11" data-pieid="82"></div>
        <div class="eye click-zone i_stena1" data-element="i_pol" data-info-position="right" data-pie="12" data-pieid="83"></div>
        <div class="eye click-zone i_stena2" data-element="i_potolok" data-info-position="right" data-pie="13" data-pieid="84"></div>
        <div class="eye click-zone i_fundament1" data-element="i_potolok" data-info-position="right" data-pie="14" data-pieid="85"></div>
        <div class="eye click-zone i_fundament2" data-element="i_potolok" data-info-position="right" data-pie="15" data-pieid="86"></div>
		
	</div>
		
	<div class="pie"></div>
	
	<div id="info-block">
		<div id="block-back" class="block-button"></div>
		<div id="block-close" class="block-button"></div>
		
		<div class="block-title">Baswool Baswool Baswool</div>
		<div class="block-content">
			Обычно в частных домах потери тепла через крышу могут доходить до 35% от всех потерь тепла в здании, поэтому качественная теплоизоляция крыши позволит существенно сэкономить на отоплении здания.
		</div>
	</div>
	
	<div id="preloader-wrapper">
		<div id="progress-bar">
			<div id="complete-bar"></div>
			<div id="perc"></div>
		</div>
	</div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>