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
      <button class="progress-next">3</button>
      <p>Payment Details</p>
    </div>
  </div>
</div>

<div class="sign in">
  <div class="sign-in-container">
    <div class>
      <h2 class="sign-in-heading">SIGN IN</h2>
    </div>

    <!--registered user sign in-->
    <div class="registered-container">
      <div class="registered-user">
        <h2>REGISTERED USER</h2>

        <p>EMAIL ADDRESS</p>
        <input type="text" class="input-box" />

        <p>PASSWORD</p>
        <input type="text" class="input-box" />

        <p class="forget-password">Forget Password?</p>

        <button class="sign-in-btn">SIGN IN & CHECK OUT</button>

        <a href="payment.html" class="continue-shopping">
          <img src="icon/left-icon.svg" />
          <p>Back</p>
        </a>
      </div>

      <div class="checking-out-delemeter2"></div>

      <!--guest checkout-->
      <div class="guest-checkout">
        <h2 class="check-out-heading" c>CHECK OUT AS GUEST</h2>

        <p>* EMAIL ADDRESS</p>
        <input type="text" class="input-box" />

        <p>* CONFIRM EMAIL ADDRESS</p>
        <input type="text" class="input-box" />

        <p class="promotion-question">
          Do you want to receive the latest offers and promotions from Story
          Hub?
        </p>

        <div class="promotion-box">
          <div class="first-line">
            <input type="checkbox" class="promotion-checkbox" />
            <p class="promotion-no-thanks">No thanks</p>
          </div>
          <p class="second-line">
            Tick this box if you prefer not to receive updates on new
            arrivals and exclusive offers. Click to see your privacy policy.
          </p>
        </div>

        <h3>Delivery address</h3>

        <p>*TITLE</p>

        <select name="title" class="title">
          <!--needs to link to db-->
          <option value="mr">Mr</option>
          <option value="ms">Ms</option>
          <option value="miss">Miss</option>
        </select>

        <div class="name-box">
          <p>*FULL NAME</p>

          <div class="name-div">
            <input type="text" placeholder="First Name" class="input-box" />
            <input type="text" placeholder="Last Name" class="input-box" />
          </div>
        </div>

        <p>* PHONE NUMBER</p>

        <input type="text" class="input-box" />

        <p>* ADDRESS</p>

        <div class="address-line">
          <input
            type="text"
            placeholder="Street Address"
            class="input-box"
          />
          <input
            type="text"
            placeholder="Office, Suite, Apt"
            class="input-box"
          />
        </div>

        <div class="address-city">
          <div class="address-info">
            <p>* CITY</p>
            <input type="text" class="input-box" />
          </div>

          <div class="address-info">
            <p>COUNTY</p>
            <input type="text" placeholder="Choose..." class="input-box" />
          </div>

          <div class="address-info">
            <p>* POSTCODE</p>
            <input type="text" class="input-box" />
          </div>
        </div>

        <h2 class="delivery-instruction">
          SPECIAL DELIVERY INSTRUCTION (Optional)
        </h2>

        <p class="delivery-instruction-subheading">
          If you are unavailable at delivery, we will try to leave the items
          in your designated safe place.<br />
        </p>

        <p class="max-character">Max 50 characters</p>

        <input
          type="text"
          placeholder="E.g. Leave with neighbour"
          class="delivery-input-box"
        />

        <div class="delivery-checkbox">
          <input type="checkbox" class="promotion-checkbox" />
          <p>Billing address same as delivery address</p>
        </div>

        <a href="payment.html"
          ><button class="guest-checkout-btn">CHECKOUT AS GUEST</button></a
        >
      </div>
    </div>
  </div>
</div>

<?php require '../app/views/layouts/header.php';?>
