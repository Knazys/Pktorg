<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->AddChainItem("Контакты", "");
$APPLICATION->SetPageProperty("body_class", "page-contacts");
$APPLICATION->SetPageProperty("section_class_html", "");
//$APPLICATION->SetPageProperty("h1_title_html", "<h1>Контакты</h1>");
?>

<div class="post-content">
<h1>ООО "Пром-Комплект"</h1>

<a href="#" id="map-marker-ul"><h2>г. Ульяновск</h2></a>
Телефон/факс: <strong>79-05-75</strong><br>
Телефон: <strong>79-05-70</strong><br>
Адрес: <strong>г. Ульяновск, Московское шоссе, 17</strong><br>
Почтовый индекс: <strong>432045</strong><br>

<a href="#" id="map-marker-dim"> <h2>г. Димитровград</h2></a>
Телефон/факс: 
Телефон: (<strong>8842)354-58-30</strong><br>
Адрес: <strong>г. Димитровград, ЮНГ Северного Флота, д. 2/23</strong><br>
Почтовый индекс:<strong> 433510</strong><br>

<a href="#" id="map-marker-sam"><h2>г. Самара</h2></a>
Телефон/факс: <strong>(8846)207-14-70</strong><br>
Телефон: <strong>(8846)207-14-68</strong><br>
Адрес: <strong>г. Самара, Зубчаниновское шоссе, д. 126</strong><br>
Почтовый индекс: <strong>443109</strong>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>