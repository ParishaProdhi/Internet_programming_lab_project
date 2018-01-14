<?php 

	if (isset($_POST['commit'])) {
		
	$name = $_POST['username'];
	$password = $_POST['password'];
	$mail = $_POST['email'];
	if($name && $password){
	$connection=mysqli_connect('localhost','root','','final');
	
	$query = "INSERT INTO user(username,password,email) VALUES('$name','$password', '$mail')";

	$result = mysqli_query($connection,$query);
	 header("Location:login.php");

	}

	}

 ?>
<!DOCTYPE html>
<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">

  input:required:invalid, input:focus:invalid {
    background-image: url(Images/invalid.png);
    background-position: right top;
    background-repeat: no-repeat;
  }
  input:required:valid {
    background-image: url(Images/valid.png);
    background-position: right top;
    background-repeat: no-repeat;
  }

</style>
<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function() {

    

    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
      if(this.username.value == "") {
        alert("Error: Username cannot be blank!");
        this.username.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.password.value != "" && this.password.value == this.confirm_password.value) {
        if(!checkPassword(this.password.value)) {
          alert("The password you have entered is not valid!");
          this.password.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.password.focus();
        e.preventDefault();
        return;
      }
      alert("Both username and password are VALID!");
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var passwordInput = document.getElementById("field_password");
      passwordInput.setCustomValidity(passwordInput.title);

      var confirm_passwordInput = document.getElementById("field_confirm_password");


      usernameInput.addEventListener("keyup", function() {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      passwordInput.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? passwordInput.title : "");
        if(this.checkValidity()) {
          confirm_passwordInput.pattern = this.value;
          confirm_passwordInput.setCustomValidity(confirm_passwordInput.title);
        } else {
          confirm_passwordInput.pattern = this.pattern;
          confirm_passwordInput.setCustomValidity("");
        }
      }, false);

      confirm_passwordInput.addEventListener("keyup", function() {
        this.setCustomValidity(this.validity.patternMismatch ? confirm_passwordInput.title : "");
      }, false);

    }

  }, false);

</script>


</script>
</head>
<body>
<img src="Images/hi.png" alt="Note" style="height:100px;width:120px">
<div class="container">
<div class="login">
<h1>SIGN UP FOR FREE!</h1>
    <form action="signup.php" method="POST" onsubmit="return checkForm(this);">
      <p><input id="field_username" title="Username must not be blank and contain only letters, numbers and underscores." type="text" name="username" value="" placeholder="Username" required pattern="\w+"></p>
      <p><input type="email" name="email" value="" placeholder="Email" required></p>
      <p><input id="field_password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" name="password" value="" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></p>
      <p><input id="field_confirm_password" title="Please enter the same Password as above." type="password" name="confirm_password" value="" placeholder="Confirm Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></p>
        <label>
        </label>
      </p>
      <p class="submit"><input type="submit" name="commit" value="Create Account"></p>
    </form>
  </div>
  <br>
  <pre><h1 style="color:white">Note:Passwords must contain at least 6 characters,
     including UPPER/lowercase and numbers.</style></h1></pre>
 
</div>

</body>