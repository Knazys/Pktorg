<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Конфигуратор");
$APPLICATION->AddChainItem("Конфигуратор", "");
$APPLICATION->SetPageProperty("body_class", "page-home");
$APPLICATION->SetPageProperty("section_class_html", "class=\"clearfix\"");
//$APPLICATION->SetPageProperty("h1_title_html", "<h1>Контакты</h1>");
?>
<a href="/config/building1/" class="building-1">
	<div></div>
	<h2>Для частного застройщика</h2>
</a>
	
<a href="/config/building2/" class="building-2">
	<div></div>
	<h2>Для строительных организаций</h2>
</a>
	
<a href="/config/config3/" class="config3">
	<div></div>
	<h2>Подбор цвета черепицы на модели дома</h2>
</a>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>