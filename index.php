<!DOCTYPE html>
<html lang="en">

<head>    
    <link rel="stylesheet" href="web.css" type="text/css">
    <title>PMOTIONAL SHIPPING & LOGISTICS</title>
</head>
<body>
    
    <form action="include/modified.php" method="post" class="form" enctype="multipart/form-data"> 

        <h2 id="txt2"> PMOTIONAL SHIPPING AND LOGISTICS</h2>

        <h5 id="txt"> Enter needed information</h5>
        <label for="tracking number" id="track1">Tracking Number: </label>
        <input type="text" placeholder="up to 10 codes" id="firstbox" name = "firstbox"><br>
        <input type="submit" value="submit" id="submit" name = "submit">   
    </form>
    <?php
        if (isset($_GET["error"])) {
            if($_GET["error"]=="invalid"){
                echo "<script>alert('Tracking number is invalid')</script>";
            }     
        }
    ?>    
    <?php
    include_once("index.php")     
    ?>

</body>
</html> 