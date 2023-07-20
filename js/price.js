const FreePlan = document.getElementById("Free");
const StandardPlan = document.getElementById("Standard");
const PremiumPlan = document.getElementById("Premium");


function ChangePlan(PlaneName = "Free") {
   if (PlaneName === "Standard") {
    FreePlan.classList.remove("SelectedPlanFree");
    PremiumPlan.classList.remove("SelectedPlanPremium");
    StandardPlan.classList.add("SelectedPlanStandard");


  } else if (PlaneName === "Premium") {
    FreePlan.classList.remove("SelectedPlanFree");
    StandardPlan.classList.remove("SelectedPlanStandard");
    PremiumPlan.classList.add("SelectedPlanPremium");

  }
  else {
    PremiumPlan.classList.remove("SelectedPlanPremium");
    StandardPlan.classList.remove("SelectedPlanStandard");
    FreePlan.classList.add("SelectedPlanFree");

  }
}
