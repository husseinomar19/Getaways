document.addEventListener('DOMContentLoaded', function() {
    let inlogptn = document.getElementById("inlog");
    let inlogform = document.getElementById("admininlog");
  
    inlogptn.addEventListener('click', function(event) {
      event.stopPropagation();
      inlogform.classList.toggle("vis");
    });
  
    document.addEventListener('click', function(event) {
      if (!inlogform.contains(event.target)) {
        inlogform.classList.remove("vis");
      }
    });
  
  });
  
  let tit = document.querySelectorAll(".insp");
  let titi = document.querySelectorAll(".icon");
  let ontdek = document.querySelectorAll(".ontdek");
  let titboeken = document.getElementById("tit_top");
  let tit_vakantie = document.getElementById("tit-vakantie");
  let showboeken = document.querySelectorAll(".boeken-blok");
  let showboekenblok1 = document.querySelectorAll(".boeken-blok1");
  
  
  window.onload = function(){
    ontdek.forEach(function(element) {
      let position = element.getBoundingClientRect().top; 
      if (position <= 800) {
        element.classList.add("showontdek");
        tit_vakantie.classList.add("showtit-vakantie");
  
      }  
    });
    showboekenblok1.forEach(function(element){
      let position = element.getBoundingClientRect().top;
      if (position <= 1000) {
        element.classList.add("showboeken-blok1");
      }
    })
  }
  
  window.onscroll = function() {
  
    tit.forEach(function(element) {
      let position = element.getBoundingClientRect().top; 
      if (position <= 400) {
        element.classList.add("show");
        titboeken.classList.add("showtit");
      }  
    });
    titi.forEach(function(element) {
      let position = element.getBoundingClientRect().top; 
      if (position <= 500) {
        element.classList.add("showi");
      }  
    });
    showboeken.forEach(function(element) {
      let position = element.getBoundingClientRect().top; 
      if (position <= 450) {
        element.classList.add("show_boeken");
      }  
    });
  
  
  
  
  };
  
  
