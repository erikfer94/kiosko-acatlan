function verificar() {
	var x, text, y ;
		
	y = document.getElementById("numeroCuenta");
	x = document.getElementById("numeroCuenta").value;
		

	if (isNaN(x) || x < 200000000 || x > 500000000 ) {
        text = "Numero de cuenta incorrecto";
        y.style.color = "red";
        document.getElementById("erroracces").innerHTML = text;

        	//return false;
    } else {
       	text="";
        alert("Vientos tienes una cuenta solo falta la base :v");
       	y.style.color = "black"
        document.getElementById("erroracces").innerHTML = text;

	}

   	
}