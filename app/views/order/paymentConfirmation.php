<?php require '../app/views/layouts/header.php';?>

<div class="order-confirmation-page">
  <div class="tick-row">
    <div class="tick-icon">
      <img src="icon/tick.svg" alt="confirmation-tick" />
    </div>

    <div class="back-to-shopping">
      <img src="icon/arrow-left.svg" alt="arrow-left" />
      <a href="index.html"><p>Back to shopping</p></a>
    </div>
  </div>

  <h2>
    Thank you<br />
    Your order has been received
  </h2>

  <p class="confirmation-text">
    A confirmation email will be sent to you shortly.
  </p>

  <div class="order-details-box">
    <h2>Order Details</h2>

    <div class="order-details">
      <div class="order-details-row">
        <p class="left-text">Order number:</p>
        <p class="right-text">10000000089</p>
      </div>

      <div class="order-details-row">
        <p class="left-text">Date:</p>
        <p class="right-text">May 08, 2024</p>
      </div>

      <div class="order-details-row">
        <p class="left-text">Payment Method:</p>
        <p class="right-text">Credit Card</p>
      </div>
    </div>

    <div class="order-details-delemeter"></div>

    <div class="total-row">
      <p class="left-text">Total:</p>
      <p class="right-text">£22.70</p>
    </div>
  </div>

  <!--Product detail section-->
  <div class="products-container">
    <div class="products-heading">
      <h3>Products</h3>
    </div>

    <div class="product-details">
      <div class="order-list">
        <div class="order-list-row">
          <p>1X Reckless</p>
          <p>£5.90</p>
        </div>
        <img src="bookcover/reckless.jpg" alt="reckless-book" />
      </div>

      <div class="product-details-delemeter"></div>

      <div class="order-list">
        <div class="order-list-row">
          <p>1X Twisted Love</p>
          <p>£8.90</p>
        </div>
        <img src="bookcover/twisted-love.png" alt="twisted-love-book" />
      </div>

      <div class="product-details-delemeter"></div>

      <div class="order-list">
        <div class="order-list-row">
          <p>1X Iron Flame</p>
          <p>£5.90</p>
        </div>
        <img src="bookcover/iron-flame.jpg" alt="iron-flame-book" />
      </div>

      <div class="product-details-delemeter"></div>

      <div class="customer-details-container">
        <h3>Customer Details</h3>

        <div class="customer-details">
          <div class="column-1">
            <h4>Contact</h4>
            <p>Email: adam@gmail.com</p>
            <h4>Bank accounts and cards</h4>
            <p>Credit card: xxxx xxxx xxxx 7492</p>
          </div>

          <div class="column-2">
            <h4>Billing Address</h4>
            <p>Adam Marallo</p>
            <p>19 Towers Drive</p>
            <p>Leicestershire</p>
            <p>LE10 0FF</p>
            <p>United Kingdom</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require '../app/views/layouts/header.php';?>
