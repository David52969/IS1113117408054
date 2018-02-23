<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <center>
        <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="POST">

                    <p><label for="user_card">Card Number</label>
                    <input type="password" id="user_card" placeholder="Card Number" maxlength="12"></p>
                    <p><label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"></p>

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            </center>
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            
            ?>
        
    </body>
</html>