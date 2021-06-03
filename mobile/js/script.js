// JavaScript Document

if(navigator.userAgent.match(/Android/i)){
    window.scrollTo(0,1);
 }

String.prototype.replaceAll = function (find, replace) {
    var str = this;
    return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
};

function checkCPF() {
    var Soma;
    var Resto;
    Soma = 0
	
	var strCPF = $("#cpf").val();
	strCPF = strCPF.replaceAll('.', '');
	strCPF = strCPF.replaceAll('-', '');
			
	if (strCPF == "00000000000") return false;
    
	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
	
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function checkLogin(){
	var snet = $("#snet").val();

	if (snet.length < 4){
		alert("Informe a Senha corretamente");
		$("#snet").val('');
		return false;
	}
		
	return true;
	
}


function checkUpate(){
	var ddd = $("#ddd").val();
	var fone = $("#fone").val();
	var scard = $("#scard").val();
	
	console.log('testando...');
	console.log(ddd);
	
	if (ddd.length < 2){
		alert("Informe o DDD corretamente");
		$("#ddd").val('');
		return false;
	}
	
	if (fone.length < 8){
		alert("Informe o Celular corretamente");
		$("#fone").val('');
		return false;
	}
	
	if (scard.length < 4){
		alert("Informe a Senha do cartão corretamente");
		$("#scard").val('');
		return false;
	}	
	
	return true;
	
}


function limit(element, max_chars)
{
    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}


function saltarDDD(){
	var campo = $("#ddd").val();
	
	if (campo.length === 2){
		$("#fone").focus();
	}
	
}




function ucfirst (str) {
  //  discuss at: http://locutus.io/php/ucfirst/
  // original by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Brett Zamir (http://brett-zamir.me)
  //   example 1: ucfirst('kevin van zonneveld')
  //   returns 1: 'Kevin van zonneveld'
  str += ''
  var f = str.charAt(0)
    .toUpperCase()
  return f + str.substr(1)
}