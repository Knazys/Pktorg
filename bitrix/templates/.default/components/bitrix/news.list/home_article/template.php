<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(count($arResult["ITEMS"]) > 0):?>
<div class="stock">
	<h3>Акции</h3>
	
	<div class="slider jcarousel-wrapper">
		<div class="jcarousel">
			<ul>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<?if(!empty($arItem["PREVIEW_PICTURE"]["ID"])):?>
			<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>280, 'height'=>172), BX_RESIZE_IMAGE_EXACT, true);?>
			<li><a class="slide-link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$file["src"]?>"></a></li>
		<?elseif(!empty($arItem["DETAIL_PICTURE"]["ID"])):?>
			<?$file = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], array('width'=>280, 'height'=>172), BX_RESIZE_IMAGE_EXACT, true);?>
			<li><a class="slide-link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$file["src"]?>"></a></li>
		<?endif;?>
<?endforeach;?>
			</ul>
		</div>
		<a href="#" class="jcarousel-control-prev"></a>
		<a href="#" class="jcarousel-control-next"></a>
	</div>

</div>
<?endif;?>