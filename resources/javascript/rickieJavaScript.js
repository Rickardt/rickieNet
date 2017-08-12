$(document).ready(function(){
    
    var loginButton = document.getElementById("loginButton");
    var loginPopup = document.getElementById("loginPopup");
    
    
    loginButton.onclick = function(){
        console.log("click");
        loginPopup.style.display = "none";
    };
    
    function loginSuccess(){
        
        loginPopup.style.display = "none";
    };
    function loginFail(){
        
        $("#loginInfo").text("Login failed!");
    };
    
    
    
    
});


