$(document).ready(function(){
    
    function AppViewModel(){
        
    
    var self = this;
    var loginPopup = document.getElementById("loginPopup");
    
    self.comments = ko.observableArray([]);
    self.currentUser = ko.observable($("#name").text());
    
    
    
    self.getLightData = function(){
        $.getJSON("http://localhost:8080/lightdata", function(deviceStatus) 
        {
                for (let i = 0; i < deviceStatus.length; i++) {
                    var predata = $("#lightStatus").text();
                    $("#lightStatus").text(predata +"Light Device: "+deviceStatus[i].LightID +"\n IP: "+
                        deviceStatus[i].IP +"\n status: "+ deviceStatus[i].state+ "\n\n");
                }
           
        });
    };
    
    self.getComments = function(){
        $.getJSON("http://localhost:8080/comments", function(jsonComments) 
        {
            console.log("är i callback");
            
            for (var i = 0; i < jsonComments.length; i++) 
            {
                var comment = jsonComments[i].Comment;
                //Lägg till kommentarer som inte är deleted
                
                self.comments.unshift(comment + "\n");
                
            }
        })};
    self.loadServerStat = function(){
        $.get("http://localhost:8080/status", function(data, status){
            
            document.getElementById("status").innerHTML = data;
        });
    };
    self.loadServerStat();
    self.getComments();
    self.getLightData();
    
    
    function setLight(id){
        
    }
    
    
    };
    
    ko.applyBindings(new AppViewModel());
});


