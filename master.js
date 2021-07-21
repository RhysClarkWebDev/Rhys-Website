const openMenu = document.getElementById("openmenu");
const closeMenu = document.getElementById("closemenu");
const mainMenu = document.getElementById("hamburger-fullscreen-container");
const menuContainer = document.getElementById("hamburger-menu-container");
const body = document.querySelector("body");

openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show(){
  mainMenu.style.transition = 'right ease-in-out 0.5s';
  mainMenu.style.display = 'flex';
  mainMenu.style.right = '0%';
  menuContainer.style.opacity = '0%';
  body.style.overflow = 'hidden';
  body.style.height = '100vh';
}
function close(){
  mainMenu.style.right = '-100%';
  menuContainer.style.opacity = '100%';
  body.style.overflow = "auto"
  body.style.height = 'auto';
}




const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Web Developer", "Web Designer", "Front-End Developer"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000;
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  }
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  }
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});
