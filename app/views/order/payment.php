<?php require '../app/views/layouts/header.php';?>


<!--shopping cart page-->
<div class="cart-progress">
  <!--progress status-->
  <div class="number-container">
    <div class="progress">
      <button class="progress-current">1</button>
      <p>Shopping Cart</p>
    </div>

    <div class="delemeter"></div>

    <div class="progress">
      <button class="progress-current">2</button>
      <p>Details</p>
    </div>

    <div class="delemeter"></div>

    <div class="progress">
      <button class="progress-current">3</button>
      <p>Payment Details</p>
    </div>
  </div>
</div>

<!--payment section-->
<h2 class="payment-details-heading">PAYMENT DETAILS</h2>
<div class="payment-delemeter"></div>

<div class="payment-container">

<div class="card-images">
  <img src="icon/payment-method/visa.svg" class="card-box">
  <img src="icon/payment-method/applepay.svg" class="card-box" >
  <img src="icon/payment-method/mastercard.svg" class="card-box">
  <img src="icon/payment-method/paypal.svg" class="card-box">
  <img src="icon/payment-method/unionpay.svg" class="card-box">
</div>

<div class="card-details-container">
  <div class="card-details">
    <h3>Credit Card Information</h3>

    <p>NAME ON CARD</p>
    <input type="text">

    <p>CARD NUMBER</p>
    <input type="text">

    <div class="card-security">
      <div class="card-cvv">
          <p>CVV</p>
          <input type="text" placeholder="***">
      </div>

      <div class="card-expires">
          <p>EXPIRATION DATE</p>
          <div class="expires-details">
            <select name="expire-month" class="expire-month">
                <option value="January">January</option>
                <option value="Febrary">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="Devember">December</option>

                
            </select>   
            <select name="expire-year" class="expire-year">
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2032</option>
                <option value="2034">2034</option>
            </select>            
          </div>
      </div>
    </div>
    <a href="checking-out.html" class="continue-shopping">
      <img src="icon/left-icon.svg">
      Continue Shopping
    </a>
  </div>

  <div class="payment-divider-delemeter"></div>

  <div class="payment-summary">
      <h3>Order Summary</h3>

      <div class="order-books">
        <img src="bookcover/the-housemaid.png">
        <p>The Housemaid</p>
      </div>
      
      <div class="view-more">
        <p>View more</p> 
        <img src="icon/dropdown.svg" alt="dropdown-icon" class="view-more-icon">
      </div>

      <div class="cost-container">
          <div class="cost-row">
              <p class="cost-row-p">Subtotal</p>
              <p>£17.70</p>
          </div>
          <div class="cost-row">
              <p class="cost-row-p">Shipping</p>
              <p>£5.00</p>
          </div>
      </div>
  
      <div class="total-cost-row">
          <p>Total</p>
          <p>£22.70</p>
      </div>

      <a href="payment-confirmation.html">
        <button class="place-order-btn">
          Place Order
        </button>
      </a>
  </div>  
</div>

<?php require '../app/views/layouts/footer.php';?>

