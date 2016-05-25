<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(count($arResult["ITEMS"]) > 0):?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<?if(!empty($arItem["PREVIEW_PICTURE"]["ID"])):?>
			<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_EXACT, true);?>
			<a  data-lightbox="roadtrip" class="slide-image-link" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
				<img src="<?=$file["src"]?>">
			</a>
		<?endif;?>
<?endforeach;?>

<script type="text/javascript">


</script>

<style>
a.slide-image-link{
    float: left;
    font-size: 0;
    height: 150px;
    line-height: 0;
    margin: 0 10px 10px 0;
    overflow: hidden;
    vertical-align: middle;
    width: 150px;
	display: block;
}

a.slide-image-link img{
	border: 0 none;
}
</style>
<div style="clear: both;"></div>
<?endif;?>