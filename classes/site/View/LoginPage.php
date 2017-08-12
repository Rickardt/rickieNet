<?php
use Id1354fw\View\AbstractRequestHandler;
use site\controller\Controller;

    
    $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "rickieNet";
       $un = $_POST["username"];
       $pw = $_POST["password"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $getUser = "SELECT Username, Password, MailAdress, RealName, ID FROM users";
        $result = $conn->query($getUser);

        if ($result->num_rows > 0) {
            // output data of each row

            for ($i = 0; $i < $result->num_rows; $i++) 
            {
                $row = $result->fetch_assoc();
                if($row["Username"]=== $un && $row["Password"]=== $pw )
                {
                    echo '<script type="text/js>
                        loginSuccess();
                        </script>';
                    echo "found!";  
                    $_SESSION['userOnline'] = TRUE;
                    \header("Location: /rickieNet/site/View/FirstPage");
                }
            }
                echo "not found :<";  
            } else {
                echo 'meh, no bueno';  
                }
            $conn->close();
    