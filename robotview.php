<?php
  require("required_page.php");
  require("content.php");
  $page = "robotview";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Robot View</title>
    <!-- my css  -->
    <link rel="stylesheet" href="./css/main.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />

     <!-- Font Awesome Icon-->
     <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
     integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"
/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  </head>
  <body>
       <!-- navbar  -->
   <?php require_once('components/Navbar.php') ?>

<div class="Wrapper">
  <!-- Side Menu  -->
  <?php require_once("components/SideMenu.php"); ?>
    <div class="p-3 ColorGray RightSide">
      <h1 class="h3">Robot Overview</h1>
      <div class="Card mt-4">
        <div class="P_TwArea">
          <div class="LeftChart Flex1">
            <h2 class="h5">Sales Summary</h2>
            <p class="Op5">Overview of Latest Month</p>
            <h3 class="h2 mt-5">$6,890.68</h3>
            <p class="Op5">Current Month Earnings</p>
            <h4 class="mt-4">1,540</h4>
            <p class="Op5">Current Month Sales</p>
            <button class="mt-1 DownloadBtn">Download</button>
          </div>
          <div class="P_Chartjs">
            <div class="C_Chartjs">
              <canvas id="myChart" style="width: 100%; max-width: 600px, min-width:400px"></canvas>
            </div>
          </div>
        </div>
        <div class="FourArea">
          <div>
            <i class="fa-solid fa-hand-holding-dollar IconChart"></i>
            <div class="Area">Earning : $99</div>
          </div>
          <div>
            <i class="fa-solid fa-hand-holding-dollar IconChart"></i>
            <div class="Area">Earning : $99</div>
          </div>
          <div>
            <i class="fa-solid fa-hand-holding-dollar IconChart"></i>
            <div class="Area">Earning : $99</div>
          </div>
          <div>
            <i class="fa-solid fa-hand-holding-dollar IconChart"></i>
            <div class="Area">Earning : $99</div>
          </div>
      
        </div>
      </div>
    </div>
    </div>



    
    <!-- js  -->
    <script>
      var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

      new Chart("myChart", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [
            {
              data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
              borderColor: "red",
              fill: false,
            },
            {
              data: [
                1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000,
              ],
              borderColor: "green",
              fill: false,
            },
            {
              data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
              borderColor: "blue",
              fill: false,
            },
          ],
        },
        options: {
          legend: { display: false },
        },
      });
    </script>
     <!-- js  -->
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="./js/side.js"></script>
  </body>
</html>
