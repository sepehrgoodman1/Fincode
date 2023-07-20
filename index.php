<?php
  require("required_page.php");
  require("content.php");
  $page = "index";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FinCode</title>

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
              <i class="fa-solid fa-chart-line OChart"></i> Overview
            </h1>
            <p class="OvDeskText">AI is much faster than human coding</p>
          </div>
          <div class="P_AreaWhite">
            <div class="BoxWhite P_30_10">
              <h3 class="h4 PrimaryColor"> <?php echo $index_head1;?> </h3>
              <div class="d-flex W100 mt-3 Mb_Column">
                <div >
                 <img src="./assets/images/Robot.jpg" class="RobotImg" alt="">
                </div>
                <div class="P_TypingArea">
                  <p  id="TypingArea">
                    <!-- <?php echo $index_body1;?> -->
                  </p>
                </div>
              </div>
             
              <img
                src="./assets/images/bot_flying.png"
                alt="OverView At work"
                class="mt-3 ImgBotFly"
              />
            </div>
            <div class="BoxWhite">
              <h3 class="h4 PrimaryColor"><?php echo $index_head2;?></h3>
              <p class="mt-3">
                <?php echo $index_body2;?>
              </p>
              <img
                src="./assets/images/at-work.svg"
                alt="OverView At work"
                class="mt-3 ImgWork"
              />
            </div>
            <div class="BoxWhite P_30_0">
              <h3 class="h4 PrimaryColor">AI Activity</h3>

              <div class="container TextStart">
                <div class="row">
                  <div class="">
                    <ul class="timeline">
                        <?php
                        foreach (selectQuery_fc_bots("status='publish' LIMIT 5") as $bot){
                        ?>
                      <li>
                        <div class="Between mb-1">
                          <a
                            target="_blank"
                            class="NormalLink PrimaryColor"
                            href="<?php if ($userid > 0 && $bot['mq_path'] != "" && ($bot['access'] == "public" || $bot['owner_id'] == $userid)){echo $bot['mq_path'];}else{echo "#";} ?>"
                          >
                            RSI Cross Over Bot
                            </a>
                          <a
                            href="<?php if ($userid > 0 && $bot['mq_path'] != "" && ($bot['access'] == "public" || $bot['owner_id'] == $userid)){echo $bot['mq_path'];}else{echo "#";} ?>"
                            class="float-right NormalLink PrimaryColor"
                            ><?= $bot['publish_time'] ?></a
                          >
                        </div>
                        <span class="<?php if ($bot['access'] == "private"){echo "PrivateSpan";}else{echo "PublicSpan";} ?>"><?= $bot['access'] ?></span>

                        <p class="mt-3">
                            <?= $bot['bot_description'] ?>
                        </p>
                      </li>
                        <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="px-5">
            <div class="row">
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-cherry">
                  <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large">
                      <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="mb-4">
                      <h5 class="card-title mb-0">Public Bots</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">3,243</h2>
                      </div>
                      <div class="col-4 text-right">
                        <span>12.5% <i class="fa fa-arrow-up"></i></span>
                      </div>
                    </div>
                    <div
                      class="progress mt-1"
                      data-height="8"
                      style="height: 8px"
                    >
                      <div
                        class="progress-bar l-bg-cyan"
                        role="progressbar"
                        data-width="25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 25%"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-blue-dark">
                  <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large">
                      <i class="fas fa-users"></i>
                    </div>
                    <div class="mb-4">
                      <h5 class="card-title mb-0">Private Bots</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">15.07k</h2>
                      </div>
                      <div class="col-4 text-right">
                        <span>9.23% <i class="fa fa-arrow-up"></i></span>
                      </div>
                    </div>
                    <div
                      class="progress mt-1"
                      data-height="8"
                      style="height: 8px"
                    >
                      <div
                        class="progress-bar l-bg-green"
                        role="progressbar"
                        data-width="25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 25%"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-green-dark">
                  <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large">
                      <i class="fas fa-ticket-alt"></i>
                    </div>
                    <div class="mb-4">
                      <h5 class="card-title mb-0">Logic in qoute</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">578</h2>
                      </div>
                      <div class="col-4 text-right">
                        <span>10% <i class="fa fa-arrow-up"></i></span>
                      </div>
                    </div>
                    <div
                      class="progress mt-1"
                      data-height="8"
                      style="height: 8px"
                    >
                      <div
                        class="progress-bar l-bg-orange"
                        role="progressbar"
                        data-width="25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 25%"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-orange-dark">
                  <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large">
                      <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="mb-4">
                      <h5 class="card-title mb-0">Trusted By</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                      <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">$11.61k</h2>
                      </div>
                      <div class="col-4 text-right">
                        <span>2.5% <i class="fa fa-arrow-up"></i></span>
                      </div>
                    </div>
                    <div
                      class="progress mt-1"
                      data-height="8"
                      style="height: 8px"
                    >
                      <div
                        class="progress-bar l-bg-cyan"
                        role="progressbar"
                        data-width="25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 25%"
                      ></div>
                    </div>
                  </div>
                </div>
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
    <script src="./js/overview.js"></script>
  </body>
</html>
