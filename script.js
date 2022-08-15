var MenuItems = document.getElementById("MenuItems");
MenuItems.style.maxHeight = "0px";
            
function menutoggle()
{
    if(MenuItems.style.maxHeight == "0px")
    {
       MenuItems.style.maxHeight = "200px";
    }
    else
    {
       MenuItems.style.maxHeight = "0px";
    }
}
//Js For toggle Form
var loginForm = document.getElementById("loginForm");
var regForm = document.getElementById("regForm");
var indicator = document.getElementById("indicator");
function login(){
    regForm.style.transform = "translateX(280px)";
    loginForm.style.transform = "translateX(280px)";
    indicator.style.transform = "translateX(-20px)";
}
function reg(){
    regForm.style.transform = "translateX(0px)";
    loginForm.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
}
