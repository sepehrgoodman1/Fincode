
function ActiveTab(index) {
    $(".ItemTab").each(function (e) {
      if (index !== e) {
        $(this).removeClass("TabReg_Active");
        $(`.MyTab:eq(${e})`).addClass("DisNone");
      } else {
        $(this).addClass("TabReg_Active");
        $(`.MyTab:eq(${index})`).removeClass("DisNone");
      }
    });
  }
  ActiveTab(0)