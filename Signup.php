<?php

include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@Ashwani's_Project</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div id="Title">
            <p>Please_Provide_Your_Info😊</p>
        </div>

        <p class="Form_title">Enquiry🍳:</p>
    <div class="form_container">
        
        <form action="config/handle.php" id="form" method="post">
            <p>Name-</p>
            <input type="text"id="input"placeholder="Type Your Name" name="username">
            <p>Password-</p>
            <input type="password"id="input"placeholder="Type Your password" name="password">
            <p>Em@il-</p>
            <input type="email"id="input"placeholder="Type Your Em@il" name="email">
            


            <!-- <p>Select_Your_Gender</p>
            <input type="radio" id="chekbox_input" name="gender">Male</input><br>
            <input type="radio"id="checkbox_input" name="gender">Female</input> -->

            <p>Country:</p>
            <select name="Origin" id="Country">
                <option name="country" value="India">India</option>
                <option name="country" value="Korea">Korea</option>
                <option name="country" value="USA">USA</option>
                <option name="country" value="Thailand">Thailand</option>
            </select>

            <!-- <p>Courses:</p> -->
            <!-- <input type="checkbox">Web_dev<br>
            <input type="checkbox">Game_Development<br>
            <input type="checkbox">Android_Development -->

            
            <div class="btn">
                <button type="submit" name="btn" value="signup">Submit</button>
            </div>
        </form>
    </div>

    
    <style>

/* body's background color */
body{
background-color: rgb(142, 142, 231);
}

/* styling the main title */
#Title p{
    font-size: 3em;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}


/* form - container */
.form_container{
    display: flex;
    justify-content: center;
}

/* styling the title */
.Form_title{
    text-align: center;
    color: rgb(229, 255, 0);
    font-size: 2.5em;
}

/* styling the title  */

.form_container p{
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    font-size: 1.5em;

}

/* if the cursor gets over the title written above input_box */

.form_container p:hover{
    opacity: 0.5;
}

/* styling input_box  */
.form_container #input{
    width: 55vw;
    height: 5vh;
    border-radius: 2vh;
    border: none;
    outline: none;
    font-weight: bolder;
}

/* styling the checkbox */
.form_container #Country{
    width: 50vw;
    height: 5vh;
    border: none;
    outline: none;
    box-shadow: 4px 3px rgba(255, 253, 253, 0.61);
}

.btn button{
width: 10vw;
height: 7vh;
color: white;
font-size: 2rem;
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
border: none;
outline: none;
border-radius: 3em;
background-color: rgb(0, 0, 0);
display: flex;
margin: auto;
}

    </style>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php

if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])  ||  empty($_POST["Origin"]) ){
    echo "Field Can't be empty";
}
?>