document.getElementById('collapse-button').addEventListener('click', function () {
	var t = this,
	target = t.getAttribute('target'),
	targetForm = document.getElementsByClassName(target)[0];

	if (t.getAttribute('class').indexOf('open') > -1) {
		t.classList.remove('open');
		t.classList.add('close');
		if (targetForm.getAttribute('class').indexOf('open') > -1) {
			targetForm.classList.remove('open');
			targetForm.classList.add('close');
		}
	}
	else {
		t.classList.remove('close');
		t.classList.add('open');
		if (targetForm.getAttribute('class').indexOf('close') > -1) {
			targetForm.classList.remove('close');
			targetForm.classList.add('open');
		}
	}
});