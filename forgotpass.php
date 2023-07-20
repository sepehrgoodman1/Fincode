<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>

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
    <!-- bootstrap  -->
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- navbar  -->
    <?php require_once('components/Navbar.php') ?>


    <div class="Wrapper">
      <!-- Side Menu  -->
      <?php require_once("components/SideMenu.php"); ?>

      <div class="RightSide">
        <div class="BgBlueOv">
            <h1 class="OVText">
              <i class="fa-solid fa-user me-1 OChart"></i> Reset Password
            </h1>
            <p class="OvDeskText">
              Reset Your Password.
            </p>
          </div>
        <div class="Center mt-3">
          <div class="ContainerRegister AreaReg">
            <div class="Center">
              <h2 class="h4 mx-3 TabReg ItemTab" onclick="ActiveTab(0)">
                Forgot Password 
              </h2>
              
            </div>
            <div class="MyTab">
              
              <div class="P_MyInput mt-3">
                <label for="">Email</label>
                <input type="email" class="MyInput" placeholder="Email..." />
              </div>
              
              <div class="mt-4">
                <a href="verificationcode.php" class="NormalLink">
                    <button class="RegisterBtn">Send Code</button>
                </a>
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
  
  </body>
</html>
