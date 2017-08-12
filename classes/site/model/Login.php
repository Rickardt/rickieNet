<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login{
    
    public function login($un,$pw){
        
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
                if($row["username"]=== $un && $row["password"]=== $pw )
                {
                    echo 'Welcome online ' . $row["username"].'!';
                    $_SESSION["username"] = $row["username"];
                    echo '<script type="text/javascript">',
                         'loginSuccess();',
                         '</script>';                  
                }
            }
                echo '<script type="text/javascript">',
                         'loginFail();',
                         '</script>';  
            } else {
                echo '<script type="text/javascript">',
                         'loginFail();',
                         '</script>';  
                }
            $conn->close();

        
        
    }
    
    
}
