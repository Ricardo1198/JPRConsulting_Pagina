window.addEventListener("scroll",function(){
var header = this.document.querySelector(".navegacionbar");
header.classList.toggle("sticky",window.scrollY> 0);
})



function Comprobar(obj){
  if ( !obj.acuerdo[0].checked )
  {
       alert("Debes estar de acuerdo")
        return false;
  }
  return true 
}


var name= document.getElementById('name');
var email= document.getElementById('email');
var phone = document.getElementById('phone');
var message=document.getElementById('message');


var btnEnviar=document.getElementById('submitButton');

btnEnviar.onclick = presionaEnviar;


