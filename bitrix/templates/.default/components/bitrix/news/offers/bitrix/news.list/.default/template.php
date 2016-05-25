<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<table cellpadding="0" cellspacing="0">
	<tr>

	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<td>
			<article class="post clearfix">
				<?if(!empty($arItem["PREVIEW_PICTURE"]["ID"])):?>
					<div class="post-image">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>200, 'height'=>125), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
							<img src="<?=$file["src"]?>">
						</a>
					</div>
				<?endif;?>
				<h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h2>
				<div class="post-description">
					<?=$arItem["PREVIEW_TEXT"]?>
				</div>
			</article>
		</td>
		
		<?if(($key + 1) % 2 == 0 && count($arResult["ITEMS"]) != ($key + 1)):?>
			</tr>
			<tr>
		<?endif;?>
		
	<?endforeach;?>
	</tr>
</table>
                    	
	
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
