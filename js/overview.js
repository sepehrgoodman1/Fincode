var i = 0;
var txt = "I am Fincode AI, i work hard! as main core of this website, i can generate new logics based on many combinations of some popular trading methods right now i can build 12 program every day, and test them and optimize settings";
var speed = 50;
const TypingArea = document.getElementById("TypingArea");

function typeWriter() {
  if (i < txt.length) {
    TypingArea.innerHTML += txt.charAt(i);
    i++;

    setTimeout(typeWriter, speed);
  }
}


window.addEventListener("load", (event) => {
//   txt = TypingArea.innerText;
//   TypingArea.innerText = "";

  setTimeout(() => {
    typeWriter();
  }, 1000);
});
