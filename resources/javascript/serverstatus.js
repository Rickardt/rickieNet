$(document).ready(function(){
    var self = this;
    
    self.loadServerStat = function(){
        $.get("http://localhost:8080/status", function(data, status){
            
            document.getElementById("status").innerHTML = data;
        });
    };
    self.loadServerStat();
});


