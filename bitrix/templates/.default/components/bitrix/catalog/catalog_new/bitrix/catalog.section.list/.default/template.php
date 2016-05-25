<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

//dump($arResult);
?>
<table cellpadding="0" cellspacing="0">
    <tr>
<?if(count($arResult["SECTIONS"]) > 0):?>
	<?$col = 0;
	foreach($arResult["SECTIONS"] as $key => $item):?>
		<?$col++;?>
			<td>
				<article class="post">
					<div class="post-image">
						<?if(!empty($item["PICTURE"]["ID"])):?>
							<?$file = CFile::ResizeImageGet($item["PICTURE"]["ID"], array('width'=>135, 'height'=>135), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true);?>
							<a href="<?=$item["SECTION_PAGE_URL"]?>"><img src="<?=$file["src"]?>"></a>
						<?else:?>
							<a href="<?=$item["SECTION_PAGE_URL"]?>"><img src="<?=$arCurView['EMPTY_IMG']?>"></a>
						<?endif;?>
					</div>
					<h2><a href="<?=$item["SECTION_PAGE_URL"]?>"><?=$item["NAME"]?></a></h2>
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
		<?for($i = 0; $i < 4 - $col; $i++)
			echo "<td></td>";?>
	<?endif;?>
<?endif;?>
	</tr>
</table>