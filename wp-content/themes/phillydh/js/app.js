$(function() {
	var circle = $('.title-circle'),
		profText = $('.profession'),
		timerDelay = 5000,
		currentPos = 0,
		professions = [
			'developers',
			'designers',
			'scholars',
			'educators',
			'curators'
		],
		colors = [
			'4b3778',
			'c65f45',
			'81c593',
			'324a74',
			'793a25'
		];
	
	function circleAnimator(){		
		if (currentPos >= professions.length - 1){
			currentPos = -1;
			circleAnimator();
		} else {
			currentPos++;
			circle.delay(timerDelay).animate({
				backgroundColor: '#' + colors[currentPos]
			}, 600, function(){
				profText.fadeOut(function(){
					$(this).text(professions[currentPos]).fadeIn(600, function(){
						circleAnimator();
					});
				});
			});
		}
	}
	circleAnimator();
});