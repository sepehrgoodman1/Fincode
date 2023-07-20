const EyeIcon = document.querySelectorAll(".EyeIcon");
const PassInput = document.querySelectorAll(".Pass");
for (let i = 0; i < EyeIcon.length; i++) {
  EyeIcon[i].addEventListener("click", () => {
    if (PassInput[i].getAttribute("type") === "password") {
      PassInput[i].setAttribute("type", "text");
      EyeIcon[i].classList.replace("fa-eye", "fa-eye-slash")
    } else {
      PassInput[i].setAttribute("type", "password");
      EyeIcon[i].classList.replace("fa-eye-slash", "fa-eye")
    }
  });
}
