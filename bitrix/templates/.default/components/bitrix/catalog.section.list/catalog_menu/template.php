<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(count($arResult["SECTIONS"]) > 0):?>
	<aside class="catalog-sections">
		<div class="title">Каталог</div>
		<ul class="accordion">
			<?foreach($arResult["SECTIONS"] as $key1 => $level1):?>
			<?/*dump($APPLICATION->GetCurPage());?>
			<?dump($level1["SECTION_PAGE_URL"]);*/?>
			<li class="level0 <?if(strpos($APPLICATION->GetCurPage(),$level1["SECTION_PAGE_URL"]) !== false):?>expanded<?endif;?>">
				<?if(count($level1["SUBSECTIONS"]) > 0):?>
					<div class="section-title <?if(($key1 + 1) == count($arResult["SECTIONS"]))echo "last";?>"><span></span><?=$level1["NAME"]?></div>
					<ul>
						<?foreach($level1["SUBSECTIONS"] as $key2 => $level2):?>
							<?if(count($level2["SUBSECTIONS"]) > 0):?>
								<li class="level1 <?if(strpos($APPLICATION->GetCurPage(),$level2["SECTION_PAGE_URL"]) !== false):?>expanded<?endif;?>">
									<div class="section-title <?if(($key2 + 1) == count($level1["SUBSECTIONS"]))echo "last";?>"><span></span><?=$level2["NAME"]?></div>
									<ul>
										<?foreach($level2["SUBSECTIONS"] as $key3 => $level3):?>
											<li class="level2 <?if(strpos($APPLICATION->GetCurPage(),$level3["SECTION_PAGE_URL"]) !== false):?>selected<?endif;?>">
												<a href="<?=$level3["SECTION_PAGE_URL"];?>">- <?=$level3["NAME"]?></a>
											</li>
										<?endforeach;?>
									</ul>
								</li>							
							<?else:?>									
								<li class="level1">
									<div class="section-title <?if(($key2 + 1) == count($level1["SUBSECTIONS"]))echo "last";?>"  onclick="window.location='<?=$level2["SECTION_PAGE_URL"];?>';">
										<?=$level2["NAME"]?>
									</div>
								</li>  
							<?endif;?>												  
						<?endforeach;?>
					</ul>
				<?else:?>
					<div class="section-title <?if(($key1 + 1) == count($arResult["SECTIONS"]))echo "last";?>" onclick="window.location='<?=$level1["SECTION_PAGE_URL"];?>';">
						<?=$level1["NAME"]?>
					</div>
				<?endif;?>
			</li>
			<?endforeach;?>
		</ul>
	</aside>	
<?endif;?>