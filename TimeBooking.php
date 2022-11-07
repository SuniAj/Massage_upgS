<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div>
        <form method="post" action="">
            <label for="name">Name:</label><br />
            <input type="text" id="name" placeholder="Name" name="name"><br />

            <label for="massagetype">Massage Type:</label><br />
            <input type="text" id="massagetype" placeholder="massagetype" name="massagetype"><br />
            <p>Example: Classic, SportMassage, Physiotherapy.</p>

            <label for="Time">Time:</label><br />
            <input type="time" id="Time" placeholder="Time" name="time"><br />

            <label for="date">Date:</label><br />
            <input type="date" id="date" placeholder="date" name="date"><br />

            <label for="phonenumber">PhoneNumber:</label><br />
            <input type="phonenumber" id="phonenumber" placeholder="000 000 000" name="phonenumber"><br />
                            
            <input type="submit" id="button" name="form-submit" value="Skicka">


        </form>

    </div>
    
</body>
</html>


<?php
include "Timeconfig.php"

function cleanexdata($exdata){
    $exdata = trim($exdata);
    $exdata = stripslashes($exdata);
    $exdata = ($exdata);


}


if(isset($_POST['form-submit'])){

$name =
$massagetype =
$time =
$date =
$phonenumber =


}












?>
