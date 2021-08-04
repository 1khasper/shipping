<?php
if(isset($_POST["submit"]))
{
    $trackingNumber = "PMS43723153";
    $inputNum = $_POST["firstbox"];
    if (empty($inputNum)){
        header("location: ../index.php?error=emptyinput");
        exit();
    }


    if ($trackingNumber == $inputNum) {
        header("location: ../new.php");
        exit();
    } else {
        header("location: ../index.php?error=invalid");
        exit();
    }
}
?>