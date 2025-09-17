<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BASC Student Portal Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <!-- Login box -->
    <div class="login-box active">   <!-- 👈 active by default -->
      <div class="login">
        <div class="in">
          <h1>Log in</h1>
          
          <form action="backend.php" method="POST">
            <input type="hidden" name="action" value="login">
            
            <fieldset class="input-box">
              <input type="number" name="snumber" placeholder=" " required>
              <legend>Student Number</legend>
            </fieldset>

            <fieldset class="input-box">
              <input type="password" name="pass" placeholder=" " required>
              <legend>Password</legend>
            </fieldset>

            <div class="remember">
              <input type="checkbox" id="rem">
              <label for="rem">Remember me</label>
            </div>

            <button type="submit">Log in</button>
          </form>

          <div class="signup-link">
            <p>Doesn't have an account yet? <a href="#" id="showSignup">Sign up</a></p>
          </div>
        </div>

        <div class="welcome">
          <h1>Welcome to</h1>
          <img src="images/ics.png" alt="ICS BASC">
          <h1>ICS Student Portal</h1>
        </div>
      </div>
    </div>

    <!-- Signup box -->
    <div class="signup-box">   <!-- 👈 hidden by default -->
      <div class="signup">
        <div class="welcome">
          <img src="images/ics.png" alt="ICS BASC">
          <h1>Create</h1>
          <h1>ICS Student Account</h1>
        </div>

        <div class="up">
          <h1>Sign Up</h1>
          <form action="backend.php" method="POST">
            <input type="hidden" name="action" value="signup">

            <fieldset class="input-box">
              <input type="text" name="fname" placeholder=" " required>
              <legend>Full Name</legend>
            </fieldset>

            <fieldset class="input-box">
              <input type="email" name="email" placeholder=" " required>
              <legend>Email</legend>
            </fieldset>

            <fieldset class="input-box">
              <input type="number" name="snumber" placeholder=" " required>
              <legend>Student Number</legend>
            </fieldset>

            <fieldset class="input-box">
              <input type="text" name="section" placeholder=" " required>
              <legend>Year and Section</legend>
            </fieldset>

            <fieldset class="input-box">
              <input type="password" name="pass" placeholder=" " required>
              <legend>Password</legend>
            </fieldset>

            <fieldset class="input-box">
              <input type="password" name="confirm" placeholder=" " required>
              <legend>Confirm Password</legend>
            </fieldset>

            <button type="submit">Sign up</button>

            <div class="login-link">
              <p>Already have an account? <a href="#" id="showLogin">Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const loginBox = document.querySelector(".login-box");
      const signupBox = document.querySelector(".signup-box");

      document.getElementById("showSignup").addEventListener("click", (e) => {
        e.preventDefault();
        loginBox.classList.remove("active");
        signupBox.classList.add("active");
      });

      document.getElementById("showLogin").addEventListener("click", (e) => {
        e.preventDefault();
        signupBox.classList.remove("active");
        loginBox.classList.add("active");
      });
    });
  </script>
</body>
</html>
