<?php require '../app/views/layouts/header.php';?>

<!--sign up options-->
<div class="create-account-box">
  <div class="create-account-title">
    <a href="sign-in.html"><h2>Sign In</h2></a>
    <a href="register-user.html"><h2>Create an Account</h2></a>
  </div>

  <div class="create-account-details">
    <h3>* Title</h3>
    <select name="title" class="account-title">
      <!--needs to link to db-->
      <option value="mr">Mr</option>
      <option value="ms">Ms</option>
      <option value="miss">Miss</option>
    </select>

    <h3>* First Name</h3>
    <input type="text" />

    <h3>* Last Name</h3>
    <input type="text" />

    <h3>* Username</h3>
    <input type="text" />

    <h3>* Email address</h3>
    <input type="text" />

    <h3>* Confirm Email address</h3>
    <input type="text" />

    <h3>* Phone number</h3>
    <select name="phone-number" class="phone-number-country-code">
      <option value="+44">+44</option>
      <option value="+65">+65</option>
      <option value="+88">+88</option>
    </select>
    <input type="text" />

    <h3>* Create a Password</h3>
    <p class="password-requirement">
      Passwords must be between 12 and 64 characters
    </p>
    <div class="create-account-password-box">
      <input type="text" />
      <button class="password-show-btn">
        <img src="icon/password-eye-close.svg" alt="closing-eye-pw" />
      </button>
    </div>

    <h3>* Confirm Password</h3>
    <div class="create-account-password-box">
      <input type="text" />
      <button class="password-show-btn">
        <img src="icon/password-eye-close.svg" alt="closing-eye-pw" />
      </button>
    </div>

    <div class="promotion-query">
      <div class="first-line">
        <input type="checkbox" class="promotion-checkbox" />
        <p class="no-thanks">No thanks</p>
      </div>
      <p class="second-line" s>
        Tick this box if you prefer not to receive updates on new arrivals
        and exclusive offers. Click to see your privacy policy.
      </p>
    </div>
  </div>
  <div class="register-sign-in-btn">
    <button>CREATE AN ACCOUNT</button>
  </div>
</div>

<?php require '../app/views/layouts/footer.php';?>
