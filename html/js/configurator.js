// JavaScript Document
(function($){
	
	var highLightFadingTime = 100;
	var $building, $infoBlock, $infoBlockTitle, $infoBlockContent, $infoBlockBack, $infoBlockClose;
	var activeElement = null;
	
	var pieData = 
	{
		63 :
		{
			title: 'Скатная кровля',
			type: 'pie',
			node:
			[
				{
					//link: "/catalog/gidro-vetro-paro-izolyatsionnye-plenki/gidrovetrozashchitnye/",
					name: "Скатные кровли",
					type: 'pieInner',
					node:
					[
						{
							name: "Композитная черепица",
							link: "/catalog/skatnye-krovli/kompozitnaya-cherepitsa/"
						},
						{
							name: "Гибкая черепица",
							link: "/catalog/skatnye-krovli/gibkaya-cherepitsa/"
						},
						{
							name: "Профнастил",
							link: "/catalog/skatnye-krovli/profnastil/"
						},
						{
							name: "Ондулин",
							link: "/catalog/skatnye-krovli/ondulin/"
						}
					]
				},
				
				{
					name: "Гидроветрозащитные пленки",
					link: "/catalog/gidro-vetro-paro-izolyatsionnye-plenki/gidrovetrozashchitnye/"
				},
				
				{
					name: "Каменная вата для скатной кровли",
					link: "/catalog/teploizolyatsiya/tekhnonikol/dlya-skatnoy-krovli/"
				},
				
				{
					name: "Пароизоляционные пленки",
					link: "/catalog/gidro-vetro-paro-izolyatsionnye-plenki/paroizolyatsionnye/"
				},
				
				{
					name: "Огнебиозащитные материалы для стропильных систем чердачных помещений",
					link: "/catalog/ognebiozashchitnye-materialy/dlya-stropilnykh-sistem-cherdachnykh-pomeshcheniy/"
				}
			]
		},
		
		79 :
		{
			title: 'Фасад Стандарт',
			type: 'pie',
			node:
			[
				{
					name: "Гибкие связи",
					link: "/catalog/gibkie-svyazi/"
				},
				
				{
					name: "Каменная вата для слоистой(кирпичной) кладки",
					link: "/catalog/teploizolyatsiya/tekhnonikol/dlya-sloistoy-kirpichnoy-kladki/"
				},
				
				{
					name: "Звуко-гидроизоляционные материалы",
					link: "/catalog/gidroizolyatsiya/zvuko-gidroizolyatsionnye-materialy/"
				}
			]
		},
		
		78 :
		{
			title: 'Фасад Сайдинг',
			type: 'pie',
			node:
			[
				{
					name: "Отделочные материалы",
					//link: "/catalog/gibkie-svyazi/"
					type: 'pieInner',
					node:
					[
						{
							name: "Металлический сайдинг",
							link: "/catalog/materialy-dlya-ventiliruemogo-fasada/otdelochnye-materialy/metallicheskiy-sayding/"
						},
						{
							name: "Виниловый сайдинг",
							link: "/catalog/materialy-dlya-ventiliruemogo-fasada/otdelochnye-materialy/vinilovyy-sayding/"
						},
						{
							name: "Профнастил С-8",
							link: "/catalog/materialy-dlya-ventiliruemogo-fasada/otdelochnye-materialy/profnastil-s-8/"
						},
						{
							name: "Профнастил С-18",
							link: "/catalog/materialy-dlya-ventiliruemogo-fasada/otdelochnye-materialy/profnastil-s-18/"
						},
						{
							name: "Фасадные панели",
							link: "/catalog/materialy-dlya-ventiliruemogo-fasada/otdelochnye-materialy/fasadnye-paneli/"
						}
					]
				},
				
				{
					name: "Гидроветрозащитные пленки",
					link: "/catalog/gidro-vetro-paro-izolyatsionnye-plenki/gidrovetrozashchitnye/"
				},
				
				{
					name: "Пенопласт",
					link: "/catalog/teploizolyatsiya/penoplast/"
				}
			]
		},
		
		80 :
		{
			title: 'Фундамент Стандарт',
			type: 'pie',
			node:
			[
				{
					name: "Профилированные мембраны",
					link: "/catalog/gidroizolyatsiya/profilirovannye-membrany/"
				},
				{
					name: "Мастики и герметики",
					link: "/catalog/gidroizolyatsiya/mastiki-i-germetiki/"
				},
				{
					name: "Мастики и герметики",
					link: "/catalog/gidroizolyatsiya/mastiki-i-germetiki/"
				}
			]
		},
		
		77 :
		{
			title: '2 этаж',
			type: 'pie',
			node:
			[
				{
					name: "ОСП фанера",
					link: "/catalog/sukhie-smesi-otdelka/osp-fanera/"
				},
				{
					name: "Каменная вата для скатной кровли",
					link: "/catalog/teploizolyatsiya/tekhnonikol/dlya-skatnoy-krovli/"
				},
				{
					name: "Пароизоляционные пленки",
					link: "/catalog/gidro-vetro-paro-izolyatsionnye-plenki/paroizolyatsionnye/"
				},
				{
					name: "Гидроизоляция",
					link: "/catalog/gidroizolyatsiya/"
				}
			]
		},
		
		64 :
		{
			title: 'Пол Стандарт',
			type: 'pie',
			node:
			[
				{
					name: "ОСП фанера",
					link: "/catalog/sukhie-smesi-otdelka/osp-fanera/"
				},
				{
					name: "Пароизоляционные пленки",
					link: "/catalog/gidro-vetro-paro-izolyatsionnye-plenki/paroizolyatsionnye/"
				},
				{
					name: "Экструзионный пенополистирол для утепления полов",
					link: "/catalog/teploizolyatsiya/ekstruzionnyy-penopolistirol/dlya-utepleniya-polov_e/"
				}
			]
		},
		
		65 :
		{
			title: 'Стена перегородки',
			type: 'pie',
			node:
			[
				{
					name: "ГКЛ, ГВЛ",
					link: "/catalog/sukhie-smesi-otdelka/gkl-gvl/"
				},
				{
					name: "Каменная вата для слоистой(кирпичной) кладки",
					link: "/catalog/teploizolyatsiya/tekhnonikol/dlya-sloistoy-kirpichnoy-kladki/"
				},
				{
					name: "Профили для ГКЛ и ГВЛ",
					link: "/catalog/sukhie-smesi-otdelka/profilya-dlya-gkl-i-gvl/"
				},
				{
					name: "ГКЛ, ГВЛ",
					link: "/catalog/sukhie-smesi-otdelka/gkl-gvl/"
				},
				{
					name: "Штукатурки",
					link: "/catalog/sukhie-smesi-otdelka/shtukaturki/"
				}
			]
		}
	};

	$().ready(function(e) 
	{
		$building			= $('.building');
		$infoBlock 			= $('#info-block').hide();
		$infoBlockTitle 	= $infoBlock.find('.block-title');
		$infoBlockContent 	= $infoBlock.find('.block-content');
		$infoBlockBack 		= $infoBlock.find('#block-back').hide();
		$infoBlockClose 	= $infoBlock.find('#block-close');
		
			
		$building.find('.elemnt-highlight').hide();
		$building.hide();
		$('#configurator .pie').hide();
		
		
		
		$('#configurator').on('mouseenter', '.click-zone', function(){addElementHighlight($(this).data('element'));});
		$('#configurator').on('mouseleave', '.click-zone', function(){removeElementHighlight($(this).data('element'));});
		
		$('#configurator').on('click', '.click-zone',showInfoBlock);
		
		
		$(document).bind('click.infoBlock', function (event)
		{
			event.stopPropagation();
			if ($(event.target).closest($infoBlock).length) return;
			hideInfoBlock();
		});
		
		$infoBlockClose.bind('click.infoBlock', function (event)
		{
			event.stopPropagation();
			hideInfoBlock();
		});
		
		
		preLoad();
		
		
	});

	showInfoBlock = function(event)
	{
    	event.stopPropagation();
		var 
		element 	 = $(this).data('element'),
		infoPosition = $(this).data('info-position'),
		pie			 = $(this).data('pie'),
		pieid		 = $(this).data('pieid'),
		catid		 = $(this).data('catid');
		
		if(!catid) catid = null;
		if(!pieid) pieid = null;
				
		
		//infoPosition == 'left' ? $infoBlock.css({'left':'50px','right':'auto'}) : $infoBlock.css({'right':'50px','left':'auto'});
		
		if(catid) 
		{
			$infoBlock.fadeOut(400, function()
			{
				$infoBlockTitle.html('');
				$infoBlockContent.html('');
				
				parseInfoBlockData( getInfoBlockData({'sect':catid}), function()
				{
					$infoBlock.fadeIn(400);
				});
			});
			
			$('#configurator .pie').fadeOut(400);
			$building.stop().animate({'opacity':'1'},400);
		}
		
		
		
		if(pieid)
		{
			
			$('#configurator .pie').fadeOut(400);
			
			$infoBlock.fadeOut(400, function()
			{
				$infoBlockTitle.html('');
				$infoBlockContent.html('');
				
				parseInfoBlockData( getInfoBlockData({'pirog':pieid}), function()
				{
					$infoBlock.fadeIn(400);					
					$('#configurator .pie').attr('id','pie'+pie).fadeIn(400);
				});
			});
			
			if( $building.css('opacity')==1 ) 
				$building.stop().animate({'opacity':'.6'},800);
			else
				$building.stop().animate({'opacity':'1'},400, function()
				{
					$building.stop().animate({'opacity':'.6'},400);
				});
		}
		
		if(activeElement)
		{
			var oldElement = activeElement;
			activeElement = element;
			removeElementHighlight(oldElement);
		}
		else activeElement = element;
		
				
		/*hideInfoBlock(function()
		{
			infoPosition == 'left' ? $infoBlock.css({'left':'50px','right':'auto'}) : $infoBlock.css({'right':'50px','left':'auto'});
			if(catid) parseInfoBlockData( getInfoBlockData({'sect':catid}), function(){$infoBlock.fadeIn(400);} );
			if(pieid) parseInfoBlockData( getInfoBlockData({'pirog':pieid}), function()
			{
				$infoBlock.fadeIn(400);
				$('#configurator .pie').attr('id','pie'+pie).fadeIn(400);
				//$('#building1 .pie').fadeOut(400, function(){$('.pie'+pie).fadeIn(400);});
				$('.building').stop().animate({'opacity':'.6'},400);
			});
			
			if(activeElement)
			{
				var oldElement = activeElement;
				activeElement = element;
				removeElementHighlight(oldElement);
			}
			else activeElement = element;
		});*/
	}
	
	hideInfoBlock = function(callback)
	{
		$infoBlock.fadeOut(400, function()
		{
			$infoBlockTitle.html('');
			$infoBlockContent.html('');
			if(callback) callback();
		});
		$('#configurator .pie').fadeOut(400);
		$building.stop().animate({'opacity':'1'},400);
		
		var element = activeElement;
		activeElement = null;
		removeElementHighlight(element);
		$infoBlockBack.unbind('click.infoBlock');
		
	}
	
	getInfoBlockData = function(requestData)
	{
		/*var data = 
		{
			type: 'section',
			title: 'Теплоизоляция',
			nodes: 
			[
				{
					type: 'post',
					title: 'Теплоизоляция 1',
					description: 'это теплоизоляционный материал из каменной ваты на основе горных пород базальтовой группы',
					url: '#'
				},
				{
					type: 'post',
					title: 'Теплоизоляция 2',
					description: 'это теплоизоляционный материал из каменной ваты на основе горных пород базальтовой группы. ',
					url: '#'
				}
			]
		}*/
		var data = null;
		
		if(!requestData)  return data;
		
		if(requestData.pirog != undefined)
		{
			if(pieData[requestData.pirog] != undefined) data = pieData[requestData.pirog];
		}
		else
		{
			$.ajax({
				type: "GET",
				url: '/ajax/ajax_section.php', 
				cache: false,
				async: false,
				dataType : "json", 
				data: requestData, 
				success: function (response) 
				{
					if(response)
					{
						data = response;
						/*data.type = 'section';*/
					}
					else
					{
						console.log('some shit happends with response data in getInfoBlockData ajax request');
						console.log(response);
					}
					console.log('Load was performed.');
				},
				error: function () { console.log("error in getInfoBlockData ajax request"); },
				complete: function () { console.log("complete in getInfoBlockData ajax request"); }
			});
		}
		
		return data;
		
	}
	
	parseInfoBlockData = function(data, callback)
	{	
	
		if(!data)
		{
			console.log('invalid param data in parseInfoBlockData');
			return false;
		}
		
		/*nodesToLinks = function(data)
		{
			var $ol = $('<ol>'), $li;
			$.each(data, function(index, nod)
			{
				if(nod.title == 'undefined') nod.title == nod.name;
				$li = $('<li>').html('<span>'+nod.title+'</span>');
				$li.bind('click.infoBlock', function(event)
				{
    				event.stopPropagation();
					parseInfoBlockData(data.node[index]);
				});
				$infoBlockBack.unbind('click.infoBlock').bind('click.infoBlock', function(event)
				{
    				event.stopPropagation();
					parseInfoBlockData(data);
				});
				$ol.append($li);
			});
			return $ol;
		}*/
		
		/*nodesToLinks = function(data)
		{
			var $ol = $('<ol>'), $li;
			$.each(data.node, function(index, node)
			{
				$li = $('<li>').html('<span><a href="'+node.link+'">'+node.name+'</a></span>');
				$ol.append($li);
			});
			return $ol;
		}*/
		
		nodesToLinks = function(data)
		{
			var $ol = $('<ol>'), $li;
			$.each(data.node, function(index, nod)
			{
				if(nod.node == undefined )
				{
					$li = $('<li>').html('<span><a href="'+nod.link+'">'+nod.name+'</a></span>');
				}
				else
				{
					$li = $('<li>').html('<span>'+nod.name+'</span>');
					$li.bind('click.infoBlock', function(event)
					{
						event.stopPropagation();
						parseInfoBlockData(data.node[index]);
					});
					$infoBlockBack.unbind('click.infoBlock').bind('click.infoBlock', function(event)
					{
						event.stopPropagation();
						parseInfoBlockData(data);
					});
				}
				$ol.append($li);
			});
			return $ol;
		}
		
		if(data.title == undefined) data.title = data.name;
		if(data.node == false)
		{
			$infoBlockTitle.html(data.title);
			$infoBlockContent.html(data.description+'<div class="block-link"><a href="'+data.link+'">Подробнее...</a></div>');
		}
		else
		{
			$infoBlockTitle.html(data.title);
			$infoBlockContent.html(nodesToLinks(data));
			
			if(data.type == 'pieInner') $infoBlockBack.show();
			else $infoBlockBack.hide();
		}
		
		/*switch(data.type)
		{
			case "section": 
				$infoBlockTitle.html(data.title);
				$infoBlockContent.html(nodesToLinks(data));
				$infoBlockBack.hide();
			break;
			case "post": 
				$infoBlockTitle.html(data.title);
				$infoBlockContent.html(data.description+'<div class="block-link"><a href="'+data.url+'">Подробнее...</a></div>');
				$infoBlockBack.show();
			break;
		}*/
		
		if(callback) callback();
	}
		
		
	addElementHighlight = function(element)
	{
		$('.'+element+'-highlight')/*.stop()*/.fadeIn(highLightFadingTime);
		//console.log(11);
	}
	removeElementHighlight = function(element)
	{
		//console.log(element);
		if(activeElement) if(activeElement == element) return;
		$('.'+element+'-highlight')/*.stop()*/.fadeOut(highLightFadingTime);
		//console.log(22);
	}
	
	
	
	
	
	
})(jQuery);