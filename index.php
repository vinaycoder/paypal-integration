    <form id="paypal_order" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="zahlung-facilitator@homepagenerds.de" />
<!--   <form id="paypal_order" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="zahlung@homepagenerds.de" /> -->    
    <input type="text" name="amount" value="100" />
    <input type="text" name="invoice" value="" id="orders_id" />
    <input type="text" name="custom" value="<?php //echo $_SESSION['u_user_id']; ?>1"  />
    <input type="text" name="quantity" value="1" />
    <input type="text" name="item_name" value="Package" />
    <input type="text" name="item_number" value="1" />    
    <input type="text" name="shipping" value="0" />
    <input type="text" name="no_note" value="1" />
    <input type="text" name="notify_url" value="Your notify url">
    <input type="text" name="currency_code" value="EUR" />
    <input type="text" name="rm" value="2" >
     <input type='text' id="return_tt" name='cancel_return' value='http://localhost/paypal/cancel.php'>
    <input type='text' name='return' value='http://localhost/paypal/success.php'>   
    <input type="submit" value="Pay">
    </form>

<?php
/*
Test Business email :  zahlung-facilitator@homepagenerds.de
Test currency code  :  EUR
Developer account   :  https://developer.paypal.com/developer/accounts
*/

?>