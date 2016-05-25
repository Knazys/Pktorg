// JavaScript Document


(function($){
	
	$().ready(function()
	{
		initRaphael();
	});
	
	
	initRaphael = function()
	{
		var paper = Raphael('svg', '1200', '600');
		
		var attributes = {'stroke-opacity': '0','fill': '#000','fill-opacity': '0'};
		var attributestest = {'stroke-opacity': '1','fill': '#000','fill-opacity': '0'};
		
		
		/*	ZABOR */
		paper.setStart();
		var zabor1 = paper.path("M 72 471, 72 303, 65 303, 91 284, 115 303, 109 303, 109 323, 183 323, 186 354, 168 433 z");
		$(zabor1[0]).attr('class','click-zone').data('element','zabor').data('info-position','right').data('catid',15);
		
		var zabor2 = paper.path("M 219 438, 219 347, 268 348, 248 438 z");
		$(zabor2[0]).attr('class','click-zone').data('element','zabor').data('info-position','right').data('catid',15);
		
		var zabor3 = paper.path("M 1016 456, 1015 362, 1035 362, 1035 348, 985 323, 1102 323, 1102 303, 1098 303, 1121 284, 1146 303, 1140 303, 1140 475 z");
		$(zabor3[0]).attr('class','click-zone').data('element','zabor').data('info-position','right').data('catid',15);
		
		var zaborSet = paper.setFinish();
		zaborSet.attr(attributes);
		
		
		
		/*	SVET */
		var svet = paper.path("M 133 441, 133 295, 115 295, 103 264, 117 245, 139 248, 160 246, 172 264, 160 295, 142 295, 141 438 z").attr(attributes);
		$(svet[0]).attr('class','click-zone').data('element','svet').data('info-position','right').data('catid',176);
		
		
		
		/*	planki_konka */
		paper.setStart();
		var planki_konka1 = paper.path("M 184.778,327.993 369.468,170.863 588.407,95.5984 638.466,118.574 623.185,123.592 624.239,128.081 775.995,77.6409 774.415,72.0945 645.58,116.197 590.516,88.4681 367.623,166.374 181.439,325.292 z");
		$(planki_konka1[0]).attr('class','click-zone').data('element','planki_konka').data('info-position','right').data('catid',146);
		
		var planki_konka2 = paper.path("M 866.363,229.489 993.618,291.814 996.253,287.324 871.37,226.585 z");
		$(planki_konka2[0]).attr('class','click-zone').data('element','planki_konka').data('info-position','right').data('catid',146);
		
		var planki_konka3 = paper.path("M 956.337,312.015 1033.4,350.507 1036.43,348.195 961.87,309.904 z");
		$(planki_konka3[0]).attr('class','click-zone').data('element','planki_konka').data('info-position','right').data('catid',146);
		
		var planki_konkaSet = paper.setFinish();
		planki_konkaSet.attr(attributes);
		
		
		
		/*	VENTIL KTV */
		var ventil_ktv = paper.path("M 635 139, 639 125, 658 117, 658 131 z").attr(attributes);
		$(ventil_ktv[0]).attr('class','click-zone').data('element','ventil-ktv').data('info-position','left').data('catid',149);
		
		
		
		/*	vihod_kanalizacii_metal_profil */
		var vihod_kanalizacii_metal_profil = paper.path("M 674.297,124.648 690.105,116.989 688.788,109.331 677.196,112.235 672.454,120.158 z").attr(attributes);
		$(vihod_kanalizacii_metal_profil[0]).attr('class','click-zone').data('element','vihod_kanalizacii_metal_profil').data('info-position','left').data('catid',149);
		
		
		
		/*	vihod_vitjagki_s_prohodnim_elementom */
		var vihod_vitjagki_s_prohodnim_elementom = paper.path("M 536.373,116.989 536.373,105.765 534.002,103.917 534.66,99.0319 536.769,96.6555 542.564,95.863 544.277,98.1071 544.277,104.577 543.091,105.502 542.433,117.122 z").attr(attributes);
		$(vihod_vitjagki_s_prohodnim_elementom[0]).attr('class','click-zone').data('element','vihod_vitjagki_s_prohodnim_elementom').data('info-position','left').data('catid',149);
		
		
		
		/*	vihod_kanalizacii_s_prohodnim_elementom */
		var vihod_kanalizacii_s_prohodnim_elementom = paper.path("M 557.714,111.312 559.095,90.6142 566.013,90.3165 566.607,111.37 z").attr(attributes);
		$(vihod_kanalizacii_s_prohodnim_elementom[0]).attr('class','click-zone').data('element','vihod_kanalizacii_s_prohodnim_elementom').data('info-position','left').data('catid',149);
		
		
		
		/*	vihod_universal */
		var vihod_universal = paper.path("M 520.038,124.515 527.02,116.329 521.751,109.463 514.506,113.028 515.954,123.592 z").attr(attributes);
		$(vihod_universal[0]).attr('class','click-zone').data('element','vihod_universal').data('info-position','left').data('catid',149);
		
		
		
		/*	fluger */
		var fluger = paper.path("M 588.671,89.7886 588.671,85.8272 568.911,80.8098 568.911,72.6236 564.959,34.3311 573.917,29.0492 593.15,36.4441 597.102,51.4961 623.975,54.137 613.701,83.9787 594.731,86.0917 593.94,90.3165 z").attr(attributes);
		$(fluger[0]).attr('class','click-zone').data('element','fluger').data('info-position','left').data('catid',171);
		
		
		
		/*	plitka */
		var plitka = paper.path("M 193.736,521.567 390.544,531.866 390.544,503.081 414.52,490.669 415.311,479.577 360.509,476.145 244.848,484.331 190.048,510.211 z").attr(attributes);
		$(plitka[0]).attr('class','click-zone').data('element','plitka').data('info-position','right').data('catid',152);
		
		
		
		/*	vodootvod */
		var vodootvod = paper.path("M 168 528, 168 515, 415 481, 415 490, 194 522, 194 531 z").attr(attributes);
		$(vodootvod[0]).attr('class','click-zone').data('element','vodootvod').data('info-position','right').data('catid',13);
		
		
		
		/*	decorkamen */
		paper.setStart();
		var decorkamen1 = paper.path("M 647.16,413.293 647.687,475.088 667.974,473.239 699.327,446.567 698.799,412.765 z");
		$(decorkamen1[0]).attr('class','click-zone').data('element','decorkamen').data('info-position','left').data('catid',152);
		
		var decorkamen2 = paper.path("M 791.803,413.556 792.066,445.246 821.048,445.246 884.806,447.359 897.98,451.056 947.774,441.814 947.907,307.658 938.817,307.658 938.817,414.613 z");
		$(decorkamen2[0]).attr('class','click-zone').data('element','decorkamen').data('info-position','left').data('catid',152);
		
		var decorkamen3 = paper.path("M 1005.74,363.38 1006,448.944 1015.35,448.547 1014.96,362.852 z");
		$(decorkamen3[0]).attr('class','click-zone').data('element','decorkamen').data('info-position','left').data('catid',152);
		
		var decorkamenSet = paper.setFinish();
		decorkamenSet.attr(attributes);
		
		
		
		/*	vodostochsys */
		paper.setStart();
		var vodostochsys1 = paper.path("M 197 440, 198 360, 182 352, 182 333, 272 315, 272 319, 187 337, 187 348, 203 355, 203 440 z");
		$(vodostochsys1[0]).attr('class','click-zone').data('element','vodostochsys').data('info-position','right').data('catid',137);
		
		var vodostochsys2 = paper.path("M 308 293, 433 264, 433 278, 439 278, 439 262, 461 256, 461 252, 308 288 z");
		$(vodostochsys2[0]).attr('class','click-zone').data('element','vodostochsys').data('info-position','right').data('catid',137);
		
		var vodostochsys3 = paper.path("M 653 268, 711 274, 713 269, 653 264 z");
		$(vodostochsys3[0]).attr('class','click-zone').data('element','vodostochsys').data('info-position','right').data('catid',137);
		
		var vodostochsys4 = paper.path("M 868 289, 957 296, 957 305, 930 324, 931 438, 937 438, 937 326, 964 308, 964 296, 1005 301, 1005 296, 868 283 z");
		$(vodostochsys4[0]).attr('class','click-zone').data('element','vodostochsys').data('info-position','right').data('catid',137);
		
		var vodostochsysSet = paper.setFinish();
		vodostochsysSet.attr(attributes);
		
		
		
		/*	planki_karniznie */
		paper.setStart();
		var planki_karniznie1 = paper.path("M 276.728,316.109 285.422,315.581 306.236,295.246 304.128,286.267 298.859,287.324 278.308,309.507 z");
		$(planki_karniznie1[0]).attr('class','click-zone').data('element','planki_karniznie').data('info-position','right').data('catid',146);
		
		var planki_karniznie2 = paper.path("M 526.23,193.31 594.204,96.6555 589.461,91.1091 584.982,92.9575 512.53,191.725 518.852,194.102 z");
		$(planki_karniznie2[0]).attr('class','click-zone').data('element','planki_karniznie').data('info-position','right').data('catid',146);
		
		var planki_karniznieSet = paper.setFinish();
		planki_karniznieSet.attr(attributes);
		
		
		
		/*	snegozaderjatel */
		paper.setStart();
		var snegozaderjatel1 = paper.path("M 296.487,276.761 360.509,263.82 360.774,251.673 299.386,263.556 294.907,271.479 z");
		$(snegozaderjatel1[0]).attr('class','click-zone').data('element','snegozaderjatel').data('info-position','right').data('catid',146);
		
		var snegozaderjatel2 = paper.path("M 411.886,249.032 421.897,249.032 467.74,239.261 475.644,226.056 466.423,224.735 422.687,235.035 413.993,242.43 z");
		$(snegozaderjatel2[0]).attr('class','click-zone').data('element','snegozaderjatel').data('info-position','right').data('catid',146);
		
		var snegozaderjatel3 = paper.path("M 642.418,249.824 664.022,254.842 681.148,253.257 681.938,246.919 661.915,240.317 636.621,241.374 z");
		$(snegozaderjatel3[0]).attr('class','click-zone').data('element','snegozaderjatel').data('info-position','right').data('catid',146);
		
		var snegozaderjatel4 = paper.path("M 861.621,270.951 876.112,275.176 939.08,280.457 952.518,278.874 952.781,274.12 933.285,267.517 874.004,261.18 857.603,264.811 z");
		$(snegozaderjatel4[0]).attr('class','click-zone').data('element','snegozaderjatel').data('info-position','right').data('catid',146);
		
		var snegozaderjatelSet = paper.setFinish();
		snegozaderjatelSet.attr(attributes);
		
		
		
		/*	podshivka_svesa_krovli */
		paper.setStart();
		var podshivka_svesa_krovli1 = paper.path("M 180.826,345.951 274.356,329.049 358.402,331.162 269.087,345.951 z");
		$(podshivka_svesa_krovli1[0]).attr('class','click-zone').data('element','podshivka_svesa_krovli').data('info-position','right').data('catid',146);
		
		var podshivka_svesa_krovli2 = paper.path("M 316.247,300.528 461.417,268.31 470.375,274.648 361.564,301.585 z");
		$(podshivka_svesa_krovli2[0]).attr('class','click-zone').data('element','podshivka_svesa_krovli').data('info-position','right').data('catid',146);
		
		var podshivka_svesa_krovli3 = paper.path("M 641.627,283.494 652.694,278.344 706.967,283.098 682.07,286.663 z");
		$(podshivka_svesa_krovli3[0]).attr('class','click-zone').data('element','podshivka_svesa_krovli').data('info-position','right').data('catid',146);
		
		var podshivka_svesa_krovli4 = paper.path("M 761.241,108.803 793.643,150.654 800.757,151.375 809.511,163.887 803.334,163.942 853.981,230.282 870.052,227.376 772.306,97.1835 z");
		$(podshivka_svesa_krovli4[0]).attr('class','click-zone').data('element','podshivka_svesa_krovli').data('info-position','right').data('catid',146);
		
		var podshivka_svesa_krovliSet = paper.setFinish();
		podshivka_svesa_krovliSet.attr(attributes);
		
		
		
		/*	vorotagaraj */
		var vorotagaraj = paper.path("M 948 369, 948 443, 990 456, 990 369 z").attr(attributes);
		$(vorotagaraj[0]).attr('class','click-zone').data('element','vorotagaraj').data('info-position','left').data('catid',15);
		
		
		
		/*	truba_fundament */
		var truba_fundament = paper.path("M 603.425,495.423 614.228,498.592 624.502,497.535 625.029,474.824 608.694,474.56 601.317,480.898 599.473,488.556 z").attr(attributes);
		$(truba_fundament[0]).attr('class','click-zone').data('element','truba_fundament').data('info-position','left').data('catid',13);
		
		
		
		/*	okno_balkon */
		var okno_balkon = paper.path("M 363.407,246.391 400.557,190.669 398.712,185.652 339.959,179.842 310.781,189.216 319.146,195.158 357.875,198.855 341.013,218.662 321.774,225.177 321.713,253.654 z").attr(attributes);
		$(okno_balkon[0]).attr('class','click-zone').data('element','okno_balkon').data('info-position','right').data('catid',142);
		
		
		
		/*	okno */
		var okno = paper.path("M 431.909,229.489 477.489,219.455 518.852,152.906 516.745,146.567 471.165,162.676 430.064,221.567 z").attr(attributes);
		$(okno[0]).attr('class','click-zone').data('element','okno').data('info-position','right').data('catid',142);
		
		
		
		/*	lesnica_krovla */
		var lesnica_krovla = paper.path("M 400.468,261.807 487.632,128.212 462.208,137.588 378.425,265.933 z").attr(attributes);
		$(lesnica_krovla[0]).attr('class','click-zone').data('element','lesnica_krovla').data('info-position','right').data('catid',143);
		
		
		
		/*	lesnica_stena */
		var lesnica_stena = paper.path("M 393.97,258.406 394.629,293.265 405.299,292.737 405.299,298.152 394.032,300.527 395.086,419.05 404.568,419.577 404.041,425.372 393.506,426.952 393.573,454.403 368.78,454.08 368.545,249.56 376.713,225.265 381.324,221.039 414.915,210.475 421.502,213.248 421.107,231.338 402.4,231.47 399.634,226.32 394.629,253.654 400.557,257.35 393.97,258.406 z").attr(attributes);
		$(lesnica_stena[0]).attr('class','click-zone').data('element','lesnica_stena').data('info-position','right').data('catid',143);
		
		
		
		/*	lesnica_cherdak */
		var lesnica_cherdak = paper.path("M 466.687,445.511 481.441,342.254 488.027,342.254 494.613,287.456 498.17,287.456 498.17,284.947 481.704,276.365 468.663,275.968 446.663,284.023 454.304,287.852 454.435,340.009 456.28,342.782 440.472,444.058 z").attr(attributes);
		$(lesnica_cherdak[0]).attr('class','click-zone').data('element','lesnica_cherdak').data('info-position','right').data('catid',143);
		
		
		
		
		
		
		/*	i_krovla */
		var i_krovla = paper.path("M 645.974,272.139 646.897,253.785 598.946,200.705 515.164,192.517 489.345,204.137 467.356,237.133 468.102,257.779 497.776,211.795 514.374,204.269 591.964,212.588 z").attr(attributes);
		$(i_krovla[0]).attr('class','click-zone').data('element','i_krovla').data('info-position','right').data('pie',1).data('pieid',63);
		
		
		
		/*	i_vnutr_stena */
		var i_vnutr_stena = paper.path("M 597.102,289.173 495.141,291.814 495.272,434.287 596.575,438.908 z").attr(attributes);
		$(i_vnutr_stena[0]).attr('class','click-zone').data('element','i_vnutr_stena').data('info-position','right').data('pie',4).data('pieid',65);
		
		
		
		/*	i_pol */
		var i_pol = paper.path("M 424.136,467.562 494.614,478.257 640.709,468.021 641.101,464.261 632.433,464.281 632.406,440.757 495.018,434.733 430.591,437.324 430.528,463.73 424.005,463.468 z").attr(attributes);
		$(i_pol[0]).attr('class','click-zone').data('element','i_pol').data('info-position','right').data('pie',6).data('pieid',64);
		
		
		
		/*	i_potolok */
		var i_potolok = paper.path("M 430.657,287.919 494.811,291.814 632.406,288.645 632.669,284.683 646.247,281.088 646.436,271.479 638.466,262.765 493.824,250.616 468.267,255.898 468.202,270.159 473.536,278.313 z").attr(attributes);
		$(i_potolok[0]).attr('class','click-zone').data('element','i_potolok').data('info-position','right').data('pie',2).data('pieid',77);
		
		
		
		/*	i_stena_right */
		var i_stena_right = paper.path("M 632.933,463.468 646.897,464.789 647.127,412.467 698.536,413.028 698.009,318.485 685.626,316.902 678.776,287.192 647.16,283.363 632.669,285.475 z").attr(attributes);
		$(i_stena_right[0]).attr('class','click-zone').data('element','i_stena_right').data('info-position','right').data('pie',5).data('pieid',79);
		
		
		
		/*	i_stena_left */
		var i_stena_left = paper.path("M 430.064,462.412 431.382,459.904 431.119,288.248 416.232,287.192 405.167,290.229 405.299,300.131 397.526,300.991 399.633,419.301 404.428,419.349 404.574,426.43 399.768,426.761 400.227,460.959 z").attr(attributes);
		$(i_stena_left[0]).attr('class','click-zone').data('element','i_stena_left').data('info-position','right').data('pie',3).data('pieid',78);
		
		
		
		/*	i_fundament */
		paper.setStart();
		var i_fundament1 = paper.path("M 439.286,470.598 439.813,535.431 415.577,535.299 415.838,465.581 z").attr(attributes);
		$(i_fundament1[0]).attr('class','click-zone').data('element','i_fundament').data('info-position','right').data('pie',7).data('pieid',80);
		
		var i_fundament2 = paper.path("M 624.502,469.278 624.534,536.454 647.289,536.454 647.029,466.637 z").attr(attributes);
		$(i_fundament2[0]).attr('class','click-zone').data('element','i_fundament').data('info-position','right').data('pie',7).data('pieid',80);
		
		var i_fundamentSet = paper.setFinish();
		i_fundamentSet.attr(attributes);
		
		
		
	}
	
	
})(jQuery);