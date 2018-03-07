<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
                
        <?php
        echo "<h2>Your Receipt:</h2>";
echo "Name: " . $_SESSION["name"];
echo "<br>";
echo "Email: " . $_SESSION["email"];
echo "<br>";
echo "Contact Number: " . $_SESSION["contact"];
echo "<br>";
echo "Gender: " . $_SESSION["gender"];
echo "<br>";
echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>
