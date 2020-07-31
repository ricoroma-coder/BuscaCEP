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
			document.getElementById('error-message').innerHTML = '';
			if (post.readyState == 4 && post.status == 200) {
				var error = JSON.parse(post.responseText).erro;
				if (typeof error !== 'undefined') {
					document.getElementById('error-message').innerHTML = error;
				}
				else {
					fillInputs(JSON.parse(post.responseText));
					var collapse = document.getElementById('collapse-button');
					if (collapse.getAttribute('class').indexOf('close') > -1)
						collapse.click();
				}
				document.getElementById('cep-input').value = "";
				var s = document.querySelectorAll('.search-item');
				s.forEach(function (k) {
					document.getElementById('searchContent').removeChild(k); 
				});
			}
		}

	}

});

document.getElementById('cep-input').addEventListener('keyup', function () {
	var t = this;

	if (t.value.length > 0) {
		var ajax = new XMLHttpRequest(),
		prepare = prepareCep(t.value, false);

		ajax.open("GET", "/buscacep/ajax/"+prepare, true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax.send();

		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4 && ajax.status == 200) {
				var data = JSON.parse(ajax.responseText);
				searchContent.innerHTML = "";
				data.forEach(function (k) {
					var searchContent = document.getElementById('searchContent');
					searchContent.innerHTML+='<div class="search-item text-center" onclick="redirect('+k.id+')">'+
						'<p class="font3 font-abeezee">'+
						k.logradouro+
						'</p>'+
						'</div>';
				});
			}
		}
	}
});

function redirect(id) {
	var ajax = new XMLHttpRequest();

	ajax.open("GET", "/buscacep/obj/"+id, true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax.send();

		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4 && ajax.status == 200) {
				fillInputs(JSON.parse(ajax.responseText));
				var collapse = document.getElementById('collapse-button');
				if (collapse.getAttribute('class').indexOf('close') > -1)
					collapse.click();
				document.getElementById('cep-input').value = "";
				var s = document.querySelectorAll('.search-item');
				s.forEach(function (k) {
					document.getElementById('searchContent').removeChild(k); 
				});
			}
		}
}

function sumPixels(val1, val2) {
	val1 = val1.split('p')[0];
	val2 = val2.split('p')[0];

	val1 += val2;

	return val1+"px";
}

function subPixels(val1, val2) {
	val1 = val1.split('p')[0];
	val2 = val2.split('p')[0];

	val1 -= val2;

	return val1+"px";
}

function prepareCep(cep, raw = true) {
	cep = cep.replace(/[^\d]+/g,'') ;
	if (!raw)
		return cep;
	else if (cep.length == 8)
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