let inlogptn = document.getElementById("inlog");
let inlogform = document.getElementById("admininlog");

inlogptn.addEventListener('click',function(event){
        event.stopPropagation();
    if(inlogform.style.visibility === "hidden"){
        inlogform.style.visibility = "visible";
    }else{
        inlogform.style.visibility = "hidden";
    }
});

document.addEventListener('click', function(){
    inlogform.style.visibility = "hidden";
});
