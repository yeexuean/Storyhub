<?php require '../app/views/layouts/header.php';?>


 <!--sign in options-->
  <div class="sign-in-box">
  <div class="sign-in-title">
    <a href="sign-in.html"><h2>Sign In</h2></a>
    <a href="register-user.html"><h2>Create an Account</h2></a>
  </div>

  <div class="sign-in-details">
    <form id="loginForm" action="login-handler.php" method="POST">
      <label for="username">
        <h3>* Username</h3>
      </label>
      <div class="username-box">
        <input type="username" id="username" name="username" required />
      </div>

      <label for="password">
        <h3>* Password</h3>
      </label>

      <div class="password-box">
        <input
          type="password"
          id="password"
          placeholder="Enter your password"
          required
        />
        <button id="togglePassword" class="password-show-btn">
          <img
            src="icon/password-eye-close.svg"
            alt="toggle-password-visibility"
          />
        </button>
      </div>

      <div class="remember-me">
        <input type="checkbox" id="remember-me" name="remember-me" />
        <label for="remember-me">Remember me?</label>
      </div>

      <button type="submit" class="registered-user-sign-in">SIGN IN</button>
    </form>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        function togglePasswordVisibility() {
          const passwordInput = document.getElementById("password");
          const toggleButton = document.getElementById("togglePassword");
          const eyeIcon = toggleButton.querySelector("img");

          //toggle password visibility
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.src = "icon/password-eye-close.svg";
            eyeIcon.alt = "hide password";
          } else {
            passwordInput.type = "password";
            eyeIcon.src = "icon/password-eye-open.svg";
            eyeIcon.alt = "show password";
          }
        }

        document
          .getElementById("togglePassword")
          .addEventListener("click", function (e) {
            e.preventDefault();
            togglePasswordVisibility();
          });
      });

      const loginForm = document.getElementById("loginForm");

      loginForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        try {
          // Send login request to REST API
          const response = await fetch("http://localhost:8000/login.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({ username, password }),
          });

          if (!response.ok) {
            throw new Error("Login failed");
          }

          const data = await response.json();

          console.log(JSON.stringify(data));

          if (data.session_id) {
            //save the session_id
            localStorage.setItem("session_id", data.session_id);

            //after successful login, save the username to cookies
            document.cookie = `username=${username}; path=/; max-age=${
              60 * 60 * 24 * 7
            }`; //expires in one week

            alert("Login successful");
          } else {
            alert("Login failed!");
          }
          //optionally redirect to another page
          window.location.href = "/";
        } catch (error) {
          console.error("Error:", error);
          alert("Login failed. Please try again.");
        }
      });
    </script>

    <p class="forgot-password">Forgotten Password?</p>
  </div>
  </div>

<?php require '../app/views/layouts/footer.php';?>

