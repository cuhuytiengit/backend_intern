function myFunction() {
    var x = document.getElementById("menu_respon");
    if (x.className === "menu_respon") {
      x.className += " header-menu";
    } else {
      x.className = "topnav";
    }
  }