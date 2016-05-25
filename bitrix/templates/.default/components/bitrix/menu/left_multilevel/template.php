<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
<aside class="catalog-sections">
	<div class="title">Каталог</div>
	<ul class="accordion">
<?
$count_depth_1 = 0;
foreach($arResult as $arItem){
	if($arItem["DEPTH_LEVEL"] == 1){
		$count_depth_1++;
	}
}

$previousLevel = 0;
foreach($arResult as $key => $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?if($arItem["DEPTH_LEVEL"] == 1):?>
			</ul></li>
		<?else:?>
			</li>
		<?endif;?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li <?if($arItem["SELECTED"] && $count_depth_1 == ($key + 1)):?>
					class="expanded last"
				<?elseif($arItem["SELECTED"]):?>
					class="expanded"
				<?elseif($count_depth_1 == ($key + 1)):?>
					class="last"
				<?endif;?>>
				<div class="section-title">
					<span></span>
					<?=$arItem["TEXT"]?>
				</div>
				<ul>
		<?endif?>

	<?else:?>

	<?if ($arItem["DEPTH_LEVEL"] == 1):?>
		<li <?if($arItem["SELECTED"] && $count_depth_1 == ($key + 1)):?>
					class="expanded last"
				<?elseif($arItem["SELECTED"]):?>
					class="expanded"
				<?elseif($count_depth_1 == ($key + 1)):?>
					class="last"
				<?endif;?>>
			<div class="section-title">
				<span></span>
				<?=$arItem["TEXT"]?>
			</div>
		</li>
	<?else:?>
		<li <?if ($arItem["SELECTED"]):?>class="selected"<?endif?>>
			<a href="<?=$arItem["LINK"]?>">
				<?="- ".$arItem["TEXT"]?>
			</a>
		</li>
	<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel == 2)://close last item tags?>
	</ul></li>
<?endif?>

	</ul>
</aside>
<?endif?>
