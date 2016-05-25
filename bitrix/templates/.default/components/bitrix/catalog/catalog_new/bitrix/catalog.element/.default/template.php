<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arResult["DETAIL_PICTURE"]["ID"]):?>
	<?$file = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]["ID"], array('width'=>300, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
	<div class="post-image detail_img">
		<img src="<?=$file["src"]?>">
	</div>
<?elseif($arResult["PREVIEW_PICTURE"]["ID"]):?>
	<?$file = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"]["ID"], array('width'=>300, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
	<div class="post-image detail_img">
		<img src="<?=$file["src"]?>">
	</div>
<?endif;?>
<!--div class="post-meta">
<table cellpadding="0" cellspacing="0">
	<tr>
		<td>Производитель:</td>
		<td>ООО “Рога и копыта”</td>
	</tr>
	<tr>
		<td>Сайт производителя:</td>
		<td><a href="#">www.roga.ru</a></td>
	</tr>
</table>
like buttons
</div-->

<div class="post-content"><?=$arResult["DETAIL_TEXT"]?></div>