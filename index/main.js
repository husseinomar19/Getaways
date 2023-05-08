let inlogptn = document.getElementById("inlog");
let inlogform = document.getElementById("admininlog");

inlogptn.addEventListener('click',function(){
   if(inlogform.style.visibility === "hidden"){
    inlogform.style.visibility = "visible";
   }else{
    inlogform.style.visibility = "hidden";
   }
});
