if (getCookie("validate") == 1)
{
    document.getElementsByClassName('modal')[0].setAttribute("style", "display : none");
}
   

  

    if(getCookie("validate") != 1)
{
       let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
        
            document.cookie = "validate=1";
         
          let modal = btn.closest(".modal");
          modal.style.display = "none";
         
        };
      });
      
      let retour = [...document.querySelectorAll(".retour")];
      retour.forEach(function (btn) {
        btn.onclick = function () {
            window.history.back();
        };
      });
    }
   