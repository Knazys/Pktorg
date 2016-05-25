<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?//dump($arResult["ITEMS"]);?>

<?if(count($arResult["ITEMS"]) > 0):?>
<div class="partners">
	<h3>Партнеры</h3>
	
	<div class="slider jcarousel-wrapper">
		<div class="jcarousel">
			<ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if(!empty($arItem["PREVIEW_PICTURE"]["ID"])):?>
		<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>100, 'height'=>50), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
        <?if(!empty($arItem["PROPERTIES"]["LINK"]["VALUE"])):?>
			<li><a class="slide-link" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><img src="<?=$file["src"]?>"></a></li>
		<?else:?>
			<li><a class="slide-link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$file["src"]?>"></a></li>
		<?endif;?>
	<?endif;?>
<?endforeach;?>

<?endif;?>
			</ul>
		</div>
		<a href="#" class="jcarousel-control-prev"></a>
		<a href="#" class="jcarousel-control-next"></a>
	</div>

</div>