<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?//dump($arResult["ITEMS"]);?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<article class="post clearfix">
		<?if(!empty($arItem["PREVIEW_PICTURE"]["ID"])):?>
			<div class="post-image">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>136, 'height'=>84), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
					<img src="<?=$file["src"]?>">
				</a>
			</div>
		<?endif;?>
		<h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h2>
		<div class="post-description">
			<?=$arItem["PREVIEW_TEXT"]?>
		</div>
	</article>				
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
