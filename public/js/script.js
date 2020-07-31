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
	ajax = new XMLHttpRequest(),
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

		console.log(cep2coo(val));
		ajax.open("GET", "https://viacep.com.br/ws/"+val+"/xml/", true);
		ajax.send();
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4 && ajax.status == 200) {
				var response = ajax.responseXML.getElementsByTagName("xmlcep")[0];
				// getLatLong(response.getElementsByTagName("logradouro")[0].textContent, response.getElementsByTagName("localidade")[0].textContent)
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

function getLatLong(address, uf) {
	var ajax = new XMLHttpRequest();
	address = address.replace(' ', '+');

	// ajax.open("GET", "https://www.openstreetmap.org/search?query="+address, true);
	// ajax.send();
	// ajax.onreadystatechange = function() {
	// 	if (ajax.readyState == 4 && ajax.status == 200) {
	// 		// var response = ajax.responseXML.getElementsByTagName("xmlcep")[0];
	// 		console.log(ajax.responseXML);
	// 	}
	// }
	 
// 	$lat = $xml->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
// 	$long = $xml->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
	 
// 	return array('latitude'=>$lat,'longitude'=>$long);
}