// Multi Step Verification
const prevBtns = document.querySelector(".btn-prev");
const nextBtns = document.querySelector(".btn-next");
const progress = document.getElementById("progress");
let formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

// Loading Area
const P_All_Loading = document.querySelectorAll(".P_All_Loading");
const P_BoxInfo = document.querySelector("#P_BoxInfo");
const P_ThreeBox = document.querySelector("#P_ThreeBox");

let formStepsNum = 0;

nextBtns.addEventListener("click", () => {
  formStepsNum++;
  Check();

  updateFormSteps();
  updateProgressbar();
});

prevBtns.addEventListener("click", () => {
  formStepsNum--;
  Check();

  updateFormSteps();
  updateProgressbar();
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");
  console.log("progressActive : " + progressActive.length);
  console.log("progressSteps : " + progressSteps.length);
  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

const P_PrevBtn = document.querySelector(".P_PrevBtn");
const P_NextStep = document.querySelector(".P_NextStep");

function Check() {
  if (formStepsNum <= 0) {
    formStepsNum = 0;
  } else if (formStepsNum >= 2) {
    formStepsNum = 2;
  }
  if (formStepsNum == 0) {
    P_PrevBtn.classList.add("DisNone");
  } else {
    P_PrevBtn.classList.remove("DisNone");
    document.getElementById("finish_btn").style.display = "none";
  }

  if (formStepsNum >= formSteps.length - 1) {
    P_NextStep.classList.add("DisNone");
    document.getElementById("finish_btn").style.display = "block";
  } else {
    P_NextStep.classList.remove("DisNone");
  }

  if (formStepsNum === 1) {
    setTimeout(() => {
      P_All_Loading[0].classList.add("DisNone");
      P_BoxInfo.classList.remove("DisNone");
    }, 4000);
  } else if (formStepsNum === 2) {
    setTimeout(() => {
      P_All_Loading[1].classList.add("DisNone");
      P_ThreeBox.classList.remove("DisNone");
    }, 4000);
  }
}

// Word Detecter
const TextAreaUser = document.querySelector("#TextAreaUser");
const WrapperCategories = document.querySelector("#WrapperCategories");

MyList = ["RSI", "MA", "Moving Average", "Cross Over", "Stochastic"];

NewList = [];

function DetectWords() {
  for (let i = 0; i < MyList.length; i++) {
    let position = TextAreaUser.value.search(MyList[i]);
    if (position >= 0 && !NewList.includes(MyList[i])) {
      NewList.push(MyList[i]);
      UpdateListCategory();
    }
  }
}
function UpdateListCategory() {
  let SaveCategory = "";
  for (let i = 0; i < NewList.length; i++) {
    SaveCategory += `<div class="CategoryName"> ${NewList[i]} <i class="fa-solid fa-xmark CloseIc"></i></div>`;
  }
  WrapperCategories.innerHTML = SaveCategory;
}


