<?php 
function active($CurrentPage){
    global $page;
    if($page==$CurrentPage){
        return 'ItemSideActive';
    } 
}

?>
<div class="SideMenu PosRel">
        <i class="fa-solid fa-caret-left IconArrow " id="ArrowSide"></i>
        <a href="index.php" class="NormalLink ItemSide <?= active("index") ?>">
          <div class="">
            <i class="fa-solid fa-eye IconSide"></i>
            <div class="TextSide">OverView</div>
          </div>
        </a>

        <a href="aibot.php" class="NormalLink ItemSide <?= active("aibot") ?>">
          <div class="">
            <i class="fa-solid fa-robot IconSide"></i>
            <div class="TextSide">Ai Bot</div>
          </div>
        </a>

        <a href="publicbot.php" class="NormalLink ItemSide <?= active("publicbot") ?>">
          <div class="">
            <i class="fa-solid fa-clock-rotate-left IconSide"></i>
            <div class="TextSide">Public Bot</div>
          </div>
        </a>

        <a href="myboard.php" class="NormalLink ItemSide <?= active("myboard") ?>">
          <div class="">
            <i class="fa-solid fa-cloud-arrow-down IconSide"></i>
            <div class="TextSide">My Board</div>
          </div>
        </a>
        <a href="pricing.php" class="NormalLink ItemSide <?= active("pricing") ?>">
          <div class="">
            <i class="fa-solid fa-money-check-dollar IconSide"></i>
            <div class="TextSide">Pricing</div>
          </div>
        </a>

      </div>