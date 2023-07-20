<?php
  require("content.php");
  $page = "aibot";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fin code</title>

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
        <div class="WrapperRobot">
          <!-- right  -->
          <div class="RobotArea">
            <div class="RobotNav">
              <!-- Start Multi Step -->
              <div class="P_FormOfStepNew">
                <div class="P_Progresss">
                  <!-- Progress bar -->
                  <div class="progressbar">
                    <div class="progress ProNew" id="progress"></div>
                    <div
                      class="progress-step ProNew progress-step-active"
                      data-title="Bot Requirements"
                    ></div>
                    <div
                      class="progress-step ProNew"
                      data-title="Match Cases"
                    ></div>
                    <div
                      class="progress-step ProNew"
                      data-title="Place Order"
                    ></div>
                  </div>
                </div>
                <div class="P_ImgStepNew">
                  <div class="btns_groupNew">
                    <div class="Mt_30 btns_group1 Flex1 P_PrevBtn DisNone">
                      <a href="#" class="btn_Step btn-prev PrevBtn">Back</a>
                    </div>

                    <div class="Mt_30 btns_group1 Flex1 P_NextStep">
                      <button
                        href="#"
                        id="next_1"
                        class="btn_Step btn-next BgDisable"
                      >
                        Next
                      </button>
                    </div>
                    <div
                      class="Mt_30 btns_group1 Flex1"
                      id="finish_btn"
                      style="display: none"
                    >
                      <button href="#" class="btn_Step" id="BtnFisnish">
                        Finish and Biuld
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- End Multi Step  -->
            </div>

            <!-- Steps -->
            <div class="form-step form-step-active D_flex">
                <div class="P_Ai_Side">
                  <div class="Flex1">
                    <!-- chat item  -->
                    <div class="ChatBox">
                      <div>
                        <img
                          src="./assets/images/Robot.jpg"
                          class="RobotImage"
                          alt=""
                        />
                      </div>
                      <div class="P_TextChat">Hey, I am fincode AI Bot
                        <p class="TextChat">
                          <?php echo $aibot_question1; ?>
                        </p>
                        <div class="OptionsChat">
                            <div class="OptionOfChat OptionOfChat_Active">MT4</div>
                                                <div class="OptionOfChat">MT5</div>
                            <div class="OptionOfChat OptionOfChat_Active">EA</div>
                          <div class="OptionOfChat">Indicator</div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h5 class="Write"><?php echo $aibot_question2; ?></h5>
                      <div class="P_texAreaUser mt-3">
                        <div class="Mb_Center">
                          <img src="./assets/images/user.png" class="ImgPerson" alt="">
                        </div>
                          <div class="PText">
                            <textarea name="" id="TextAreaUser" cols="30" rows="10" class="TextAreaUser" onkeyup="DetectWords()"></textarea>
                          </div>
                  </div>
                </div>
              </div>

                        <!-- right  -->
                  <div class="SideRobot">
                    <div class="ItemWrapper">
                      <h1 class="TaeenProj mb-4">
                        <i class="fa-solid fa-list-check FitIcon"></i> AI Understanding
                      </h1>
                      <div class="RwapperCategory" id="WrapperCategories">

                      </div>
                    
                    </div>
                  
                  
                  </div>
          </div>
            </div>

            <!-- Steps -->
            <div class="form-step">
                <div class="P_All_Loading">
                  <div class="h3 text-center">Find Match Cases...</div>
                  <div class="LoadingArea">
                    <div class="LoadingBar"></div>
                  </div>
                </div>

              <div class="P_box DisNone" id="P_BoxInfo">
             <!-- item  -->
                <div class="Box">
                    <!-- medal image  -->
                    <img src="assets/images/Medal.png" class="MedalImage" alt="Medal">

                    <div class="ImgAndTitle">
                    
                      <div class="ml-3">
                        <h5>Bot 1</h5>
                      </div>
                    </div>
                  
                      <div class="P_Detail">
                          <div class="Flex1">
                            <div class="Fs12">ROI</div>
                            <div class="Fw500 GreenArea">+30%</div>
                          </div>
                          <div class="Flex1">
                            <div class="Fs12">Drawdown</div>
                            <div class="Fw500 GrayArea">-4%</div>
                          </div>
                      </div>
                      <div class="P_Detail">
                        <div class="Flex1">
                          <div class="Fs12">Trusted By</div>
                          <div class="Fw500 GreenArea">961</div>
                        </div>
                        <div class="Flex1">
                          <div class="Fs12">Rate</div>
                          <div class="Fw500 GrayArea">1000</div>
                        </div>
                      </div>
                      <a href="trades.html">
                          <button class="Follow">Download</button>
                      </a>
                 </div>

                  <!-- item  -->
                <div class="Box">
                    <div class="ImgAndTitle">
                    
                      <div class="ml-3">
                        <h5>Bot 2</h5>
                      </div>
                    </div>
                  
                      <div class="P_Detail">
                          <div class="Flex1">
                            <div class="Fs12">ROI</div>
                            <div class="Fw500 GreenArea">+30%</div>
                          </div>
                          <div class="Flex1">
                            <div class="Fs12">Drawdown</div>
                            <div class="Fw500 GrayArea">-4%</div>
                          </div>
                      </div>
                      <div class="P_Detail">
                        <div class="Flex1">
                          <div class="Fs12">Trusted By</div>
                          <div class="Fw500 GreenArea">961</div>
                        </div>
                        <div class="Flex1">
                          <div class="Fs12">Rate</div>
                          <div class="Fw500 GrayArea">1000</div>
                        </div>
                      </div>
                      <a href="trades.html">
                          <button class="Follow">Download</button>
                      </a>
                 </div>

                  <!-- item  -->
                <div class="Box">
                   <!-- medal image  -->
                   <img src="assets/images/Medal.png" class="MedalImage" alt="Medal">
                    <div class="ImgAndTitle">
                    
                      <div class="ml-3">
                        <h5>Bot 3</h5>
                      </div>
                    </div>
                  
                      <div class="P_Detail">
                          <div class="Flex1">
                            <div class="Fs12">ROI</div>
                            <div class="Fw500 GreenArea">+30%</div>
                          </div>
                          <div class="Flex1">
                            <div class="Fs12">Drawdown</div>
                            <div class="Fw500 GrayArea">-4%</div>
                          </div>
                      </div>
                      <div class="P_Detail">
                        <div class="Flex1">
                          <div class="Fs12">Trusted By</div>
                          <div class="Fw500 GreenArea">961</div>
                        </div>
                        <div class="Flex1">
                          <div class="Fs12">Rate</div>
                          <div class="Fw500 GrayArea">1000</div>
                        </div>
                      </div>
                      <a href="trades.html">
                          <button class="Follow">Download</button>
                      </a>
                 </div>
                </div>
                </div>

           
                 <!-- Steps -->
            <div class="form-step">
              <form action="/action_page.php">
                <div class="P_All_Loading">
                  <div class="h3 text-center">Loading...</div>
                  <div class="LoadingArea">
                    <div class="LoadingBar"></div>
                  </div>
                </div>
                <div class="WrapperOverview DisNone" id="P_ThreeBox">
                  <div class="BgBlueOv">
                    <h1 class="OVText">
                      <i class="fa-solid fa-chart-line OChart"></i> FinCode AI In Your Hand
                    </h1>
                    <p class="OvDeskText">Hire AI or place your request in queue</p>
                  </div>
                  <div class="P_AreaWhite1">
                    <div class="BoxWhite">
                      <h3 class="h4 PrimaryColor">Put Your Order In Build Queue For Free</h3>
                      <p class="mt-3">
                        You can build your request in build qoute, our AI bot will generate your bot as soon as possible and publish it as public bot
                      </p>
                      <img
                        src="./assets/images/at-work.svg"
                        alt="OverView At work"
                        class="mt-3 ImgWork"
                      />
                      <button class="ButtonChoose">Choose</button>
                    </div>
                    <div class="BoxWhite">
                      <h3 class="h4 PrimaryColor">Hire AI And Build Your Code out of queue</h3>
                      <p class="mt-3">
In this case our AI will create your bot in first priority and you will recieve it in next hours, your bot will create private and just you can access that one
                      </p>
                      <img
                        src="./assets/images/at-work.svg"
                        alt="OverView At work"
                        class="mt-3 ImgWork"
                      />
                      <button class="ButtonChoose">Choose</button>

                    </div>
                    <div class="BoxWhite">
                      <h3 class="h4 PrimaryColor">Hire AI And A developer for qualify AI Code</h3>
                      <p class="mt-3">
                        In this case, AI can create your bot out of queue and also one of our developers will check AI code and continue more develop for you.
                      </p>
                      <img
                        src="./assets/images/at-work.svg"
                        alt="OverView At work"
                        class="mt-3 ImgWork"
                      />
                      <button class="ButtonChoose">Choose</button>

                    </div>
                  </div>
                 
                </div>
                
              </form>
            </div>
          </div>

        
        </div>
      </div>
    </div>

    <!-- Modal Text -->
    <div
      class="modal fade"
      id="ModalText"
      tabindex="-1"
      aria-labelledby="ModalText"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ModalAi">
          <h3>Details</h3>
          <p class="Fs20">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
            exercitationem accusantium ipsa id porro nihil deserunt adipisci
            mollitia, blanditiis, est reiciendis ad. Nulla iste adipisci
            delectus perferendis error neque ducimus.
          </p>
        </div>
      </div>
    </div>

    <!-- Modal Image -->
    <div
      class="modal fade"
      id="ModalImage"
      tabindex="-1"
      aria-labelledby="ModalImage"
      aria-hidden="true"
    >
      <div class="modal-dialog MW_700 modal-dialog-centered">
        <div class="modal-content ModalAi">
          <img src="" class="ImgAi" alt="" />
        </div>
      </div>
    </div>

    <!-- js  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="./js/bot.js"></script>
    <script src="./js/side.js"></script>
  </body>
</html>
