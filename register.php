<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Account</title>

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
        <div class="WrapperOverview">
          <div class="BgBlueOv">
            <h1 class="OVText">
              <i class="fa-solid fa-user me-1 OChart"></i> Register Account
            </h1>
            <p class="OvDeskText">
              Join to one of the most successful trading companies!
            </p>
          </div>
          <div class="Center mt-3">
            <div
              class="ContainerRegister AreaReg"
              style="background-color: #fcfcfcf5"
            >
              <div class="Center">
                <h2 class="h4 mx-3 TabReg ItemTab" onclick="ActiveTab(0)">
                  SIGN UP
                </h2>
                <h2
                  class="h4 mx-3 TabReg TabReg_Active ItemTab"
                  onclick="ActiveTab(1)"
                >
                  SIGN IN
                </h2>
              </div>
              <form class="MyTab">
                <div class="P_MyInput mt-3">
                  <label for="">Email</label>
                  <input type="email" class="MyInput" placeholder="Email..." />
                </div>
                <div class="P_TwoInput">
                  <div class="P_MyInput mt-3">
                    <label for="">Password</label>
                    <div class="PosRel">
                      <input
                        type="password"
                        class="MyInput Pass"
                        placeholder="Password..."
                      />
                      <i class="fa-solid fa-eye EyeIcon"></i>
                    </div>
                  </div>
                  <div class="P_MyInput mt-3">
                    <label for="">Repeat Password</label>
                    <div class="PosRel">
                      <input
                        type="password"
                        class="MyInput Pass"
                        placeholder="Repeat Password..."
                      />
                      <i class="fa-solid fa-eye EyeIcon"></i>
                    </div>
                  </div>
                </div>
                <div class="mt-5 P_TwoBtn">
                  <button class="RegisterBtn Flex1">Sign Up</button>
                  <button class="RegisterBtnGoogle Flex1">
                    Sign Up With Google
                    <img
                      src="./assets/images/google.png"
                      class="ImgGoogle"
                      alt=""
                    />
                  </button>
                </div>
              </form>
              <form class="MyTab">
                <div class="P_MyInput mt-3">
                  <label for="">Email</label>
                  <input type="email" class="MyInput" placeholder="Email..." />
                </div>
                <div class="P_TwoInput">
                  <div class="P_MyInput mt-3">
                    <label for="">Password</label>
                    <div class="PosRel">
                      <input
                        type="password"
                        class="MyInput Pass"
                        placeholder="Password..."
                      />
                      <i class="fa-solid fa-eye EyeIcon"></i>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="mt-4 P_TwoBtn">
                    <button class="RegisterBtn Flex1">Sign In</button>
                    <button class="RegisterBtnGoogle Flex1">
                      Sign In With Google
                      <img
                        src="./assets/images/google.png"
                        class="ImgGoogle"
                        alt=""
                      />
                    </button>
                  </div>
                  <div class="mt-3 text-center">
                    <a href="forgotpass.php" class="NormalLink"
                      >Dont Remember your password?</a
                    >
                  </div>
                </div>
              </form>
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
    <script src="./js/jquery-3.6.1.js"></script>
    <script src="./js/TabChanger.js"></script>
    <script src="./js/register.js"></script>
  </body>
</html>
