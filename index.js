
function validate(){
  var mail = document.getElementById("text").value;
  var regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
  if(regx.text(mail)){
    alert("Successfully Submit")
    return true
  }
  else{
    alert("Sorry! Incorrect Email ID")
    return false;
  }
}
const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".price__card", {
  ...scrollRevealOption,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
});