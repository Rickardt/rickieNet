<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login{
    
    public function login(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "rickieNet";
        session_start();

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully <br>";


        $getUser = "SELECT id, username, password FROM users";
        $result = $conn->query($getUser);

        if ($result->num_rows > 0) {
            // output data of each row

            for ($i = 0; $i < $result->num_rows; $i++) 
            {
                $row = $result->fetch_assoc();
                if($row["username"]=== $_POST['username'] && $row["password"]=== $_POST['password'] )
                {
                    echo 'Welcome online ' . $row["username"].'!';
            $_SESSION["username"] = $row["username"];
             header('Location: comment.php');
                        //return;
                    }
                }
                echo 'incorrect username or password!';
            } else {
                echo "0 results";
                }
            $conn->close();

        
        
    }
    
    
}
