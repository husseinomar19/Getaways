let inlogptn = document.getElementById("inlog");
let inlogform = document.getElementById("admininlog");

inlogptn.addEventListener('click',function(event){
        event.stopPropagation();
      inlogform.classList.toggle("vis");
});

document.addEventListener('click', function(event){
   if(!inlogform.contains(event.target)){
       inlogform.classList.remove("vis");
   }
});
