

document.addEventListener('input', function (event) {

	if (event.target.id !== 'meses') return;

	if (event.target.value == 'janeiro') {

	}

	if (event.target.value == 'fevereiro') {
		alert('fevereiro');
	}

	if (event.target.value == 'marco') {
		alert('março');
	}

}, false);