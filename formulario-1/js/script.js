function enviarDados() {
	var nome = document.getElementById("fullname").value;
	if (nome == "" || nome.length < 8) {
		alert("Por favor, preencha o campo nome corretamente.");
		return false;
	}
	
	var email = document.getElementById("email").value;
	if (email == "" || email.indexOf('@') == -1 || email.indexOf('.') == -1) {
		alert("Por favor, preencha o campo email corretamente.");
		return false;
	}
	
	var celular = document.getElementById("celular").value;
	if (celular == "" || celular.length < 11) {
		alert("Por favor, preencha o campo celular corretamente.");
		return false;
	}
	
	if (celular.length > 11) {
		alert("O número máximo de caracteres para o campo celular é de 11!");
		return false;
	}
	
	var mensagem = document.getElementById("message").value;
	if (mensagem == "") {
		alert("Por favor, preencha o campo mensagem corretamente.");
		return false;
	}
	
	if (mensagem.length < 50) {
		alert("O campo da mensagem tem de ter no mínimo 50 caracteres.");
		return false;
	}
	
	return true;
}
