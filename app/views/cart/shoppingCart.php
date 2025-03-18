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
      <button class="progress-next">2</button>
      <p>Details</p>
    </div>

    <div class="delemeter"></div>

    <div class="progress">
      <button class="progress-next">3</button>
      <p>Payment Details</p>
    </div>
  </div>
</div>

<!--shopping cart section-->
<div class="order-info">
  <div class="shopping-cart-container">
    <div class="shopping-cart-title">
      <div class="shopping-cart-heading">
        <h2>Shopping Cart</h2>
        <h2>3 items</h2>
        <!--will change to make it link with db so number will auto change-->
      </div>
    </div>

    <div class="shopping-cart-details">
      <table>
        <thead>
          <tr>
            <th>PRODUCT DETAILS</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>TOTAL</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!--order 1-->
          <tr class="shopping-cart-table-row">
            <td class="product">
              <img
                src="bookcover/the-housemaid.png"
                alt="the housemaid book"
              />
              <div class="book-details">
                <p>The Housemaid</p>
                <p class="stock-status in-stock">In Stock</p>
              </div>
            </td>
            <td class="quantity">
              <span>-</span>
              <button>1</button>
              <!--will link from db next time-->
              <span>+</span>
            </td>
            <td>£5.90</td>
            <td>£5.90</td>
            <td>
              <img
                src="icon/bin.svg"
                alt="delete button"
                class="delete-btn"
              />
            </td>
          </tr>
          <!--order 2-->
          <tr class="shopping-cart-table-row">
            <td class="product">
              <img src="bookcover/powerless-1.png" alt="powerless book" />
              <div class="book-details">
                <p>Powerless</p>
                <p class="stock-status in-stock">In Stock</p>
              </div>
            </td>
            <td class="quantity">
              <span>-</span>
              <button>2</button>
              <!--will link from db next time-->
              <span>+</span>
            </td>
            <td>£5.90</td>
            <td>£11.80</td>
            <td>
              <img
                src="icon/bin.svg"
                alt="delete button"
                class="delete-btn"
              />
            </td>
          </tr>

          <!--order 3-->
          <tr class="shopping-cart-table-row">
            <td class="product">
              <img
                src="bookcover/one-thousand-boy-kisses.png"
                alt="one thousand boy kisses book"
              />
              <div class="book-details">
                <p>One Thousand Boy Kisses</p>
                <p class="stock-status out-of-stock">Out Of Stock</p>
              </div>
            </td>
            <td class="quantity">
              <span>-</span>
              <button>1</button>
              <!--will link from db next time-->
              <span>+</span>
            </td>
            <td>£5.90</td>
            <td>£5.90</td>
            <td>
              <img
                src="icon/bin.svg"
                alt="delete button"
                class="delete-btn"
              />
            </td>
          </tr>
        </tbody>
      </table>
      <div class="continue-shopping">
        <a href="index.html">
          <img src="icon/left-icon.svg" />
          Continue Shopping
        </a>
      </div>
    </div>
  </div>

  <!--order summary-->
  <div class="order-summary">
    <h2 class="order-summary-heading">Order Summary</h2>

    <div class="summary-item">
      <div class="bold-summary-heading">
        <p>ITEMS</p>
        <P>3</P>
      </div>
      <div class="price">£17.70</div>
    </div>

    <div class="bold-summary-heading subheading">SHIPPING</div>

    <div class="shipping-info">
      <div class="subheading first-book">
        <p>First Book</p>
        <p class="price">£3.00</p>
      </div>

      <div class="subheading subsequent-book">
        <p>Per added book</p>
        <p class="price">£1.00</p>
      </div>

      <div class="subheading total-shipping-fee">
        <p>Total shipping fee</p>
        <p class="price">£5.00</p>
      </div>
    </div>

    <div class="bold-summary-heading subheading">PROMO CODE</div>

    <input type="text" placeholder="Enter your code" class="code-box" />

    <button class="apply-btn">APPLY</button>

    <div class="total-cost">
      <p class="bold-summary-heading subheading">TOTAL COST</p>
      <p class="price">£17.70</p>
    </div>

    <a href="checking-out.html"
      ><button class="checkout-btn">CHECK OUT</button></a
    >
  </div>
</div>

<?php require '../app/views/layouts/footer.php';?>
