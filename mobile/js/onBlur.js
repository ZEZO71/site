		if (navigator.appName == 'Netscape') {
			window.captureEvents(Event.KEYPRESS);
			window.onKeyPress = netscape.KeyPress;
		}
		function clean(a){
			a=document.getElementById(a)
			a.value=""		
		}
		function blurCPF(a){
			a=document.getElementById(a)
			if(a.value=="")a.value=""
		}
		function blurSenha(a){
			a=document.getElementById(a)
			if(a.value=="")a.value="Senha"
		}
		function oculto(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'block';
}