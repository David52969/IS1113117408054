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
            <h4><strong>Select a Product</strong></h4>

            <br/>
            
            <form method="POST" action="ebus2.php">
                          <style>
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.buttoncalc {border-radius: 12px;}
.buttonproceed {border-radius: 12px;}
.buttonclear {border-radius: 12px;}
.button1 {border-radius: 12px;}
</style>

              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button class= "buttonproceed" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button class = "buttoncalc" onClick="calcSub()">Calculate Cost</button>
            <form action="Ebus1.php">
    <a role="button" href="Ebus1.php">Clear Choice</a>
</form>
    </center>
    </body>
</html>