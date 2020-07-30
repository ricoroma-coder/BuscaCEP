$('.collapse-button').click(function () {
	var t = $(this),
	target = t.attr('target'),
	targetForm = t.siblings('[collapse="'+target+'"]');

	if (t.hasClass('open')) {
		t.removeClass('open');
		t.addClass('close');
		if (targetForm.hasClass('open')) {
			targetForm.removeClass('open');
			targetForm.addClass('close');
		}
	}
	else {
		t.removeClass('close');
		t.addClass('open');
		if (targetForm.hasClass('close')) {
			targetForm.removeClass('close');
			targetForm.addClass('open');
		}
	}
});

$('.selector, .selector *, .selector > *').click(function () {
	var t = $(this);
	if (!t.hasClass('selector'))
		t = t.parents('.selector');
	var target = t.attr('target'),
	elementTarget = $(target);

	if (!t.hasClass('active')) {
		t.siblings('.selector').removeClass('active');
		t.addClass('active');
		if (elementTarget.hasClass('out-data')) {
			elementTarget.removeClass('out-data');
			elementTarget.siblings('.in-data').addClass('out-data');
			elementTarget.siblings('.in-data').removeClass('in-data');
			elementTarget.addClass('in-data');
		}
	}
});