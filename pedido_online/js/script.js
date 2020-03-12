function removerForm() {
	window.location.href = "index.html";
	alert("Formulário resetado!");
	return true;
}

function enviarDados() {
	var nome = document.getElementById("fullname").value;
	if (nome == "" || nome.length < 8) {
		alert("Por favor, preencha o campo nome corretamente.");
		return false;
	}
	
	var endereco = document.getElementById("endereco").value;
	if (endereco == "" || endereco.length < 20) {
		alert("Por favor, informe corretamente seu endereço.");
		return;
	}
	
	var email = document.getElementById("email").value;
	if (email == "" || email.indexOf('@') == -1 || email.indexOf('.') == -1) {
		alert("Por favor, preencha o campo email corretamente.");
		return false;
	}
	
	var cidade = document.getElementById("uf").value;
	if (cidade == "") {
		alert("Por favor, informe a cidade.");
		return false;
	}
	
	var dia = document.getElementById("dia").value;
	if (dia == "") {
		alert("Por favor, informe o dia de seu nascimento.");
		return false;
	}
	
	var mes = document.getElementById("mes").value;
	if (mes == "") {
		alert("Por favor, informe o mês de seu nascimento.");
		return false;
	}
	
	var ano = document.getElementById("ano").value;
	if (ano == "") {
		alert("Por favor, informe o ano de seu nascimento");
		return false;
	}
	
	var produto = document.getElementById("product").value;
	if (produto == "") {
		alert("Por favor, informe o produto.");
		return false;
	}
	
	return true;
}
