 <?php
include 'PHP\sign_up.php';
?> 
<!DOCTYPE html>
<html>
<style>
  .main-div {
    width:30%;
    border:15px solid #fff;
    background-image: url("back_login1.jpg");
    position:absolute;
    top:10%;
    left:35%;
  }

	/*add full-width input fields*/
	input[type=text],
	input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 2px solid #ccc;
		box-sizing: border-box;
	}
	/* set a style for all buttons*/

	button {
		background-color: black;
		color: black;
		padding: 15px 20px;
		margin: 8px 0;
		cursor: pointer;
		width: 100%;
    border:10px solid #fff;
    background-image: url("back_login1.jpg");

	}
	/*set styles for the cancel button*/

	.cancelbtn {
		padding: 15px 20px;
		background-color: black;
    background-image: url("back_login1.jpg");
	}
	/*float cancel and signup buttons and add an equal width*/

	.cancelbtn,
	.signupbtn {
		float: left;
		width: 50%;
	}
	/*add padding to container elements*/

	.container {
		padding: 16px;
	}
	/*clear floats*/

	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}
	/*styles for cancel button and signup button
	on extra small screens*/

	@media screen and (max-width: 300px) {
		.cancelbtn,
		.signupbtn {
			width: 100%;
		}
	}
</style>

<body>

<div class="main-div">

	<h2 style="text-align:center;">Signup</h2>
	<!--Step 1:Adding HTML-->
	<form action="signup.php" method="POST">
		<div class="container">
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<label><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <input type="radio" id="student" name="user" value="student">
      <label for="student">Student</label><br>
      <input type="radio" id="teacher" name="user" value="teacher">
      <label for="teacher">Teacher</label><br>


			<div class="clearfix">
				<button type="button" class="cancelbtn">Cancel</button>
				<button type="submit" class="signupbtn">Sign Up</button>
			</div>
		</div>
	</form>

</div>

</body>

</html>
