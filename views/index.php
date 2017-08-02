<html>
    <head>
        <title>RickieNet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="../../resources/css/style.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
        <script src="../../resources/javascript/rickieJavaScript.js"></script>

    </head>
    <body>
        <?php include 'resources/fragments/header.php';
        ?>
        <h1>Welcome to RickieNet</h1>
        
        <div class="loginpopup" id="loginPopup">
            <div class="loginpopup-content">
                
                 <form id='login' action='comment/Login' method='post'>
                    <fieldset>
                        <legend>Login</legend>
                        <input type='hidden' name='submitted' id='submitted' value='1'/>

                        <label for='username' >Username*:</label>
                        <input type='text' name='username' id='username' />

                        <label for='password' >Password*:</label>
                        <input type='password' name='password' id='password' />

                        <input id="button" type='submit' name='Submit' value='Log In' />

                        </fieldset>
                    </form>
                
            </div>
        </div>
        
        
        
        
            <center>
                <div class="menubox">
                    <p>Welcome!</p>

                </div>
            </center>
    
    </body>
</html>