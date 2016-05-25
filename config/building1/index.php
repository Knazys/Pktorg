<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Конфигуратор");
$APPLICATION->AddChainItem("Конфигуратор", "/config/");
$APPLICATION->AddChainItem("Для частного застройщика", "");
$APPLICATION->SetPageProperty("body_class", "page-configurator");
$APPLICATION->SetPageProperty("section_class_html", "");
//$APPLICATION->SetPageProperty("h1_title_html", "<h1>Контакты</h1>");
?>
<div id="configurator">
	<div id="building1" class="building">
		<div class="info-description">
			Нажмите на любой элемент, чтобы получить <br>развернутую информацию о нем.
		</div>
	
		<div class="zabor-highlight elemnt-highlight"></div>

		<div class="decorkamen-highlight elemnt-highlight"></div>
		<div class="fluger-highlight elemnt-highlight"></div>
		<div class="lesnica_cherdak-highlight elemnt-highlight"></div>
		<div class="lesnica_krovla-highlight elemnt-highlight"></div>
		<div class="okno-highlight elemnt-highlight"></div>
		<div class="okno_balkon-highlight elemnt-highlight"></div>
		<div class="planki_karniznie-highlight elemnt-highlight"></div>
		<div class="planki_konka-highlight elemnt-highlight"></div>
		<div class="plitka-highlight elemnt-highlight"></div>
		<div class="podshivka_svesa_krovli-highlight elemnt-highlight"></div>
		<div class="snegozaderjatel-highlight elemnt-highlight"></div>
		<div class="svet-highlight elemnt-highlight"></div>
		<div class="truba_fundament-highlight elemnt-highlight"></div>
		<div class="ventil-ktv-highlight elemnt-highlight"></div>
		<div class="vihod_vitjagki_s_prohodnim_elementom-highlight elemnt-highlight"></div>
		<div class="vihod_kanalizacii_metal_profil-highlight elemnt-highlight"></div>
		<div class="vihod_kanalizacii_s_prohodnim_elementom-highlight elemnt-highlight"></div>
		<div class="vihod_universal-highlight elemnt-highlight"></div>
		<div class="vodootvod-highlight elemnt-highlight"></div>
		<div class="vodostochsys-highlight elemnt-highlight"></div>
		<div class="vorotagaraj-highlight elemnt-highlight"></div>

		<div class="lesnica_stena-highlight elemnt-highlight"></div>
		
		<div class="i_krovla-highlight elemnt-highlight"></div>
		<div class="i_vnutr_stena-highlight elemnt-highlight"></div>
		<div class="i_pol-highlight elemnt-highlight"></div>
		<div class="i_potolok-highlight elemnt-highlight"></div>
		<div class="i_fundament-highlight elemnt-highlight"></div>
		<div class="i_stena_right-highlight elemnt-highlight"></div>
		<div class="i_stena_left-highlight elemnt-highlight"></div>
		
		
		<!--  click-zone  -->
		<div class="eye i_krovla" data-element="i_krovla" data-info-position="right"></div>
		<div class="eye i_vnutr_stena" data-element="i_vnutr_stena" data-info-position="right"></div>
		<div class="eye i_pol" data-element="i_pol" data-info-position="right"></div>
		<div class="eye i_potolok" data-element="i_potolok" data-info-position="right"></div>
		<div class="eye i_fundament" data-element="i_potolok" data-info-position="right"></div>
		<div class="eye i_stena_right" data-element="i_potolok" data-info-position="right"></div>
		<div class="eye i_stena_left" data-element="i_stena_left" data-info-position="right"></div>
	</div>
		
		
	<div id="svg"></div>
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