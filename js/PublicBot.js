const CloseWhiteTable = document.querySelector("#CloseWhiteTable");
const WhiteAreaTable = document.querySelector("#WhiteAreaTable");
const InfoIcon = document.querySelector("#InfoIcon");
const TextInfoTable = document.querySelector("#TextInfoTable");
const MoreBtn = document.querySelectorAll(".MoreBtn");

CloseWhiteTable.addEventListener("click", () => {
  WhiteAreaTable.classList.add("CloseWhiteArea");
  InfoIcon.classList.remove("DisNone");
});

InfoIcon.addEventListener("click", () => {
  WhiteAreaTable.classList.remove("CloseWhiteArea");
  InfoIcon.classList.add("DisNone");

  TextInfoTable.innerText = "Hello this Is test ...";
});

function OpenWhiteArea(index) {
  if (WhiteAreaTable.classList.contains("CloseWhiteArea")) {
    WhiteAreaTable.classList.remove("CloseWhiteArea");
    InfoIcon.classList.remove("DisNone");
  } else {
    WhiteAreaTable.classList.add("CloseWhiteArea");
    setTimeout(() => {
      WhiteAreaTable.classList.remove("CloseWhiteArea");
    }, 800);
    InfoIcon.classList.add("DisNone");
  }
}
