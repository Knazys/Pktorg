<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//dump($arResult);
?>

<?if(!empty($arResult['DESCRIPTION'])):?>
	<?if(!empty($arResult['PICTURE'])):?>
	<?$file = CFile::ResizeImageGet($arResult['PICTURE'], array('width'=>300, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
	<div class="post-image detail_img">
		<img src="<?=$file["src"]?>">
	</div>
	<?endif;?>
	<div class="post-content"><?=$arResult["DESCRIPTION"]?></div>
<?endif;?>

<table cellpadding="0" cellspacing="0">
    <tr>
<?if(count($arResult["ITEMS"]) > 0):?>
	<?
	$col = 0;
	foreach($arResult["ITEMS"] as $key => $item):?>
		<?$col++;?>
			<td>
				<article class="post">
					<div class="post-image">
						<?if(!empty($item["PREVIEW_PICTURE"]["ID"])):?>
							<?$file = CFile::ResizeImageGet($item["PREVIEW_PICTURE"]["ID"], array('width'=>170, 'height'=>96), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
							<a href="<?=$item["DETAIL_PAGE_URL"]?>"><img src="<?=$file["src"]?>"></a>
						<?elseif(!empty($item["DETAIL_PICTURE"]["ID"])):?>
							<?$file = CFile::ResizeImageGet($item["DETAIL_PICTURE"]["ID"], array('width'=>170, 'height'=>96), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
							<a href="<?=$item["DETAIL_PAGE_URL"]?>"><img src="<?=$file["src"]?>"></a>						
						<?else:?>
							<a href="<?=$item["DETAIL_PAGE_URL"]?>"><img src="/bitrix/templates/.default/components/bitrix/catalog/catalog_new/bitrix/catalog.section.list/.default/images/line-empty.png"></a>
						<?endif;?>
					</div>
					<h2><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a></h2>
					<!--<div class="post-description">
						Данная металлочерепица, технология производства которой придала ей отличительную особенность в виде широкого шага волны (400 мм.), обладает строгой, четкой геометрией и характерными декоративными канавками.
					</div>-->
				</article>
			</td>	
		<?if((($key + 1) % 4) == 0 && count($arResult["SECTIONS"]) != ($key + 1)):?>
			<?$col = 0;?>
				</tr>
			<tr>
		<?endif;?>
	<?endforeach;?>
	<?if($col >= 1 && $col < 4):?>
		<?for($i = 0; $i <= 4 - $col; $i++)
			echo "<td></td>";?>
	<?endif;?>
<?endif;?>
	</tr>
</table>

<?
if ($arParams["DISPLAY_BOTTOM_PAGER"])
{
	?><? echo $arResult["NAV_STRING"]; ?><?
}
?>