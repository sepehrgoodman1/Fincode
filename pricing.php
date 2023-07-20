<?php
require("required_page.php");
  $page = "pricing";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foriegn</title>

    <!-- my css  -->
    <link rel="stylesheet" href="./css/main.css" />

    <!-- font awesome  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
      <!-- Bootstrap 5 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </head>
  <body>
   <!-- navbar  -->
   <?php require_once('components/Navbar.php') ?>

    <div class="Wrapper">
      <!-- Side Menu  -->
      <?php require_once("components/SideMenu.php"); ?>

      <div class="RightSide">
        <div class="WrapperOverview">
          <div class="BgBlueOv">
            <h1 class="OVText">
              <i class="fa-solid fa-chart-line OChart"></i> Pricing
            </h1>
            <p class="OvDeskText">Choose Your Plan</p>
          </div>
          <div class="P_Pricing">


            <!-- item  -->
            <div class="ItemPrice SelectedPlan<?php if ($role == "user"){echo "Free";} ?>" id="Free">
              <h3 class="text-center">Free</h3>
              <p class="mt-3">Use FinCode AI for free</p>

              <div class="AmountOfPrice BGFree">
                <h4 class="h1">$0<span class="Mo">/mo</span></h4>
              </div>
              <div class="mt-4 px-4">
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorFree"></i> 10 Public Bot / Month <span class="BadgeBot FreeColor">2 bot used</span></div>
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorFree"></i> Place Order In Queue </div>
              </div>
              <div class="Center mt-4">
                <button class="SelectPlan BGFree" onclick="ChangePlan('Free')">Select This Plan</button>
              </div>
            </div>

             <!-- item  -->
             <div class="ItemPrice SelectedPlan<?php if ($role == "standard"){echo "Standard";} ?>" id="Standard">
              <h3 class="text-center">Standard</h3>
              <p class="mt-3">Use FinCode AI in higher level</p>

              <div class="AmountOfPrice BGStanard">
                <h4 class="h1">$59<span class="Mo">/mo</span></h4>
              </div>
              <div class="mt-4 px-4">
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorStanard"></i> 30 Public Bot / Month <span class="BadgeBot StandardColor">11 bot used</span></div>
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorStanard"></i> 3 Order Out Of Queue</div>
              </div>
              <div class="Center mt-4">
                <button class="SelectPlan BGStanard" onclick="ChangePlan('Standard')">Select This Plan</button>
              </div>
            </div>
             <!-- item  -->
             <div class="ItemPrice SelectedPlan<?php if ($role == "premium"){echo "Premium";} ?>" id="Premium">
              <h3 class="text-center">Premium</h3>
              <p class="mt-3">Use FinCode In Best Level</p>

              <div class="AmountOfPrice BGPremium">
                <h4 class="h1">$99<span class="Mo">/mo</span></h4>
              </div>
              <div class="mt-4 px-4">
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorPremium"></i> Unlimited Bot / Month</div>
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorPremium"></i> 10 Order Out Of Queue <span class="BadgeBot PremiumColor">4 Order</span></div>
                <div class="AbilityPrice mt-2"><i class="fa-solid fa-check ColorPremium"></i> 2 Order By Developer <span class="BadgeBot PremiumColor">1 Order</span></div>
              </div>
              <div class="Center mt-4">
                <button class="SelectPlan BGPremium" onclick="ChangePlan('Premium')">Select This Plan</button>
              </div>
            </div>
        
          </div>
          
         
        </div>
      </div>
    </div>

    <!-- js  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="./js/side.js"></script>
    <script src="./js/price.js"></script>
  </body>
</html>
