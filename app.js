function pruebaemail (valor){
  	re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
 	if(!re.exec(valor)){
 		alert('email no valido');
  	}
  }

  function activarTemplate(){
    document.querySelector("form").style.display="block";
}

function cerrar(){
    document.querySelector("form").style.display="none";

}