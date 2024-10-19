<?php

require("../Signup.php");

?>

<?php


$username = null;
$password = null;
$email = null;
$country = null;


if(isset($_POST["btn"])){
            $username =filter_input(INPUT_POST, "username" ,FILTER_SANITIZE_SPECIAL_CHARS);
            $username = trim($username);
            

            $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
            $password = trim($password);
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $email =filter_input(INPUT_POST, "email" ,FILTER_VALIDATE_EMAIL);
            $email =trim($email);

            $country = $_POST["Origin"];

            if(empty($username) || empty($password) || empty($email)  ||  empty($country) ){
    
                header("Location:../Signup.php");
                
            }
            else{

                try{
                    $sql = "INSERT INTO data(name,password,email,country)VALUES('$username','$hash','$email','$country')";
                    mysqli_query($conn,$sql);     
       
                    echo "Data Registered Succesfully <br>";
                }
                catch(mysqli_sql_exception){
                    echo "Something Went Wrong";
                }
                header("Location:../Signup.php");

            }

    }


?>