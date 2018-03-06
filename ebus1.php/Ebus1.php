<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        <center>
            <h1><strong>Select a Product</strong></h1>

            
            <form method="POST" action="ebus2.php">
                          <style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.buttonproceed {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.buttonproceed:hover {
    background-color: #4CAF50;
    color: white;
}

.buttoncalc {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.buttoncalc:hover {
    background-color: #008CBA;
    color: white;
}

.buttonclear {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.buttonclear:hover {
    background-color: #f44336;
    color: white;
}

</style>

<br/>
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              <br/>
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
              <br/>
              <br/> 
              <label for="cloud">
                <input type="radio" id="cloud" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br/>
              <br/>
               <label for="gmail">
                <input type="radio" id="gmail " name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              <br/>
              
              <button class= "buttonproceed" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button class = "buttoncalc" onClick="calcSub()">Calculate Cost</button>
            <form action="Ebus1.php">
              <br/>
                <button class = "buttonclear" onClick="window.location.href='Ebus1.php">Clear Choice</button>
</form>
    </center>
    </body>
</html>