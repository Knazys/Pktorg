
$().ready(function()
{
	//$('body').on('submit','#enter-code-form', validateEnterCodeForm);
	
	//$('body').on('click','.checkbox', checkboxTrigger);
	navigationTrack();
	catalogAccordion();
	
	
	var jcarousel = $('.jcarousel');

	jcarousel
		.on('jcarousel:reload jcarousel:create', function () {
			var width = jcarousel.innerWidth();

			if (width >= 600) {
				width = width / 3;
			} else if (width >= 350) {
				width = width / 2;
			}

			jcarousel.jcarousel('items').css('width', width + 'px');
		})
		.jcarousel({
			wrap: 'circular'
		});

	$('.jcarousel-control-prev')
		.jcarouselControl({
			target: '-=1'
		});

	$('.jcarousel-control-next')
		.jcarouselControl({
			target: '+=1'
		});

	jcarousel.jcarouselAutoscroll({
            interval: 3000,
            target: '+=1',
            autostart: true
        });
});


navigationTrack = function()
{
	var
	$nav = $('#nav'),
	$li = $nav.find('li'),
	$selected = $nav.find('.selected'),
	$track = $nav.find('#track'),
	trackWidth = 27/2,
	hoverPos,
	selectedPos = $selected.position().left + $selected.width()/2 - trackWidth,
	animationDuration = 200,
	easing = 'swing';
	
	$track.css({'left':selectedPos});
	
	$li.hover
	(
		function()
		{
			var $this = $(this);
			hoverPos = $this.position().left + $this.width()/2 - trackWidth;
			$track.stop().animate({'left':hoverPos}, animationDuration, easing);
			
		},
		function()
		{
			$track.stop().animate({'left':selectedPos}, animationDuration, easing);
		}
	);
}


validateEnterCodeForm = function(event)
{
	var
	$form = $(this),
	
	$code = $form.find('#input-code'),
	code = $code.val(),
	
	$name = $form.find('#input-name'),
	name = $name.val(),
	
	$mail = $form.find('#input-mail'),
	mail = $mail.val(),
	
	$phone = $form.find('#input-phone'),
	phone = $phone.val(),
	
	$cb = $form.find('.checkbox'),
	
	errors = 0;
	
	$(this).find('.error').remove();
	
	if(!code)
	{
		$code.after('<p class="error">*Необходимо ввести код</p>');
		errors++;
	}
	
	if(!name)
	{ 
		$name.after('<p class="error">*Необходимо ввести имя</p>');
		errors++;
	}
	
	if(!mail)
	{ 
		$mail.after('<p class="error">*Необходимо ввести e-mail</p>');
		errors++;
	}
	
	if(!phone)
	{ 
		$phone.after('<p class="error">*Необходимо ввести телефон</p>');
		errors++;
	}
	
	if(!$cb.hasClass('checked')) errors++;
	
	if(errors)event.preventDefault();
	
}

checkboxTrigger = function()
{
	var $cb = $(this);
	if( $cb.hasClass('checked') ) $cb.removeClass('checked');
	else $cb.addClass('checked');
}


catalogAccordion = function()
{
	var
	$accordion = $('.accordion'),
	$sectionTitles = $accordion.find('.section-title');
	
	$accordion.on('click', '.section-title', function(event)
	{
		console.log(1);
		event.preventDefault();
		var $parent = $(this).parent();
		if($parent.hasClass('expanded')) $parent.removeClass('expanded');
		else 							 $parent.addClass('expanded');
	});
}