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

document.getElementById('ajax-form').addEventListener('submit', function (e) {
	e.preventDefault();
	var t = this,
	val, prepare;

	if (document.getElementById('cep-input')) {
		val = document.getElementById('cep-input').value;
		prepare = prepareCep(val);
	}

	if (prepare == false) {
		if (document.getElementById('cep-input'))
			alert('Digite um CEP válido');
		else 
			alert('Digite um endereço válido');
	}
	else {
		var post = new XMLHttpRequest();

		post.open("GET", "/buscacep/"+prepare, true);
		post.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		post.send();
		post.onreadystatechange = function() {
			if (post.readyState == 4 && post.status == 200) {
				fillInputs(JSON.parse(post.responseText));
				var collapse = document.getElementById('collapse-button');
				if (collapse.getAttribute('class').indexOf('close') > -1)
					collapse.click();
			}
		}

	}

});

function prepareCep(cep) {
	cep = cep.replace(/[^\d]+/g,'') ;
	if (cep.length == 8)
		return cep;
	else
		return false;
}

function fillInputs(data) {
	var inputs = document.getElementsByClassName('result');
	for(var k in inputs) {
		if (inputs[k] instanceof HTMLElement){
			var name = inputs[k].getAttribute('name');
			inputs[k].value = data[name];
		}
	}
}