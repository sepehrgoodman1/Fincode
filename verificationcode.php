<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verification Code</title>

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
            <i class="fa-solid fa-user me-1 OChart"></i> Verify its you!
          </h1>
          <p class="OvDeskText">
            We Sent a security number to your email account.
          </p>
        </div>
        <div class="Center mt-3">
          <div class="ContainerRegister AreaReg">
            <div class="Center">
              <h2 class="h4 mx-3 TabReg ItemTab" onclick="ActiveTab(0)">
                Enter Security Code
              </h2>
            </div>
            <form class="MyTab mt-4">
              <form onsubmit="onSubmit(event)" class="content-area">
                <fieldset class="number-code">
                  <div class="P_InputVer">
                    <input name="code" class="code-input InputVer" type="number" required />
                    <input name="code" class="code-input InputVer" type="number" required />
                    <input name="code" class="code-input InputVer" type="number" required />
                    <input name="code" class="code-input InputVer" type="number" required />
                    <input name="code" class="code-input InputVer" type="number" required />
                  </div>
                </fieldset>
                <p class="mt-3 ms-4"><a href="#" class="NormalLink ">Resend Code</a></p>
                <div class="Center">
                    <input type="submit" value="Confirm" class="RegisterBtn ms-4 " />
                </div>
              </form>

            
            </form>
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
    <script src="./js/verification.js"></script>
  </body>
</html>
