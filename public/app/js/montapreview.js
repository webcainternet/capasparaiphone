function MontaPreview(idcsession, modelo, layout, filtro) {
	escondemascarasup();
	document.getElementById("previewframe").src = "/app/product/?idcsession="+idcsession+"&m="+modelo+"&l="+layout+"&f="+filtro; 
}

function selecionarfiltro(filtro) {
	document.getElementById("divcapinha").style.display='none';
	document.getElementById("divcapinhapreview").style.display='block';
	MontaPreview(document.getElementById("idsession").value,document.getElementById("modelodocelular").value,document.getElementById("layoutdacapinha").value,filtro);
	document.getElementById("filtrocapinha").value = filtro;
	document.getElementById("ircheckout2").style.display = "none";
    document.getElementById("ircheckout1").style.display = "block";
}

function VoltarEdicao() {
	document.getElementById("divcapinha").style.display='block';
	document.getElementById("divcapinhapreview").style.display='none';
	mostramascarasup();
	goto3();
	document.getElementById("ircheckout2").style.display = "block";
    document.getElementById("ircheckout1").style.display = "none";
}
