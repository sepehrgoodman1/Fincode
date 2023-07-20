const ArrowSide = document.querySelector("#ArrowSide");
const LeftSide = document.querySelector(".SideMenu");
const PaypalIcon = document.querySelector(".PaypalIcon");
const ContentMenu = document.querySelectorAll(".ItemSide .TextSide");
let width = screen.width;

ArrowSide.addEventListener('click', ()=>{
    if(!LeftSide.classList.contains("LeftSideClose")){
        LeftSide.classList.add("LeftSideClose")
        ArrowSide.classList.add("ArrowClose");
        for (let i = 0; i < ContentMenu.length; i++) {
            ContentMenu[i].classList.add("FadeText")
            setTimeout(() => {
                ContentMenu[i].classList.add("DisNone")
            }, 100);
        }
      
    }
    else{
        LeftSide.classList.remove("LeftSideClose")
        ArrowSide.classList.remove("ArrowClose");
        for (let i = 0; i < ContentMenu.length; i++) {
            ContentMenu[i].classList.remove("FadeText")
            setTimeout(() => {
                ContentMenu[i].classList.remove("DisNone")
            }, 100);
        }
        
       
    }
   
})

if(width < 960){
    LeftSide.classList.add("LeftSideClose")
    ArrowSide.classList.add("ArrowClose");
    for (let i = 0; i < ContentMenu.length; i++) {
        ContentMenu[i].classList.add("FadeText")
        setTimeout(() => {
            ContentMenu[i].classList.add("DisNone")
        }, 100);
    }
}