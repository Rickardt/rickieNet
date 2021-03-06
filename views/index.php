<html>
    <head>
        <title>RickieNet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="../../resources/css/style.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
        <script type="text/javascript" src="../../resources/javascript/rickieJavaScript.js"></script>
        

    </head>
    <body>
        <?php include 'resources/fragments/header.php';
            
              if($_SESSION['userOnline'] === FALSE){
              include 'resources/fragments/loginPopup.php';
              }else{
                  
              }
        ?>
     
        
        
        <div id="menubox">
            <p id="name"><?php echo "Rickie"; ?></p>
            <ul>
                <li><div class="indexCard">Apartment light status: 
                        <p id="lightStatus"></p>
                    </div></li>
                <li><div class="indexCard">Music stream: N/A</div></li>
                <li><div class="indexCard">Todo notes:
                        <ul data-bind="foreach: {data: comments, as: 'comment'}">
                            <span data-bind="text: comment"> </span>
                        </ul>
                        
                    </div></li>
                <li><div class="indexCard">Server status:
                        <br>
                        <p id="status">N/A</p>
                    </div></li>
            </ul>
            
                
                
                
            
            
        </div>
    
    </body>
</html>