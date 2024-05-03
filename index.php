<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<title src="./MARS.jpg">MARSMESSENGER | SIGNUP</title>
<?php include_once "header.php"; ?>

<body>
  <link href="./internetconnection/index.html" ></link>
  <div class="wrapper">
    <section class="form signup">
      <header>MARSMESSENGER</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Phone</label>
          <input type="number" name="phone" id="phone" placeholder="Enter your tel/phone number" required>
       </div>
      <div class="field input">
          <label>Date of birth</label>
          <input type="date" name="birthday" id="date" required>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
       </div>
        <div class="field image">
          <label>Profile pic:-</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
       </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
       </div>
      </form>
       

      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>