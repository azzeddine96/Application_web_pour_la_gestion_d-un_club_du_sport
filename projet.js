let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");


menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-sliden", {
    spaceBetween: 30,
    effect: "fade",
    grabCursor: true,
    loop:true,
    centredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        clickable: true,
      },
});




document.querySelector('.small').forEach(images => {
  images.onclick = () =>{
    document.querySelector('.big').src = images.getAttribute('src');
  }
  
});



let countDate = new Date('Tuesday,May 30,2022').getTime();
function countDown(){
  let now = new Date.getTime();
  gap = now - countDate ;
  let seconds = 1000 ;
  let minutes = seconds * 60 ;
  let hours = minutes * 60 ;
  let days = hours * 24 ;
  let d = Math.floor(gap / (days));
  let h = Math.floor((gap % (days)) / (hours));
  let m = Math.floor((gap % (hours)) / (minutes));
  let s = Math.floor((gap % (minutes)) / (seconds));

  document.getElementById('days').innerText = d ;
  document.getElementById('hours').innerText = h ;
  document.getElementById('minutes').innerText = m ;
  document.getElementById('seconds').innerText = s ;

}
setInterval(function(){
  countDown()
},1000);