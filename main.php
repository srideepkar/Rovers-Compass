<html>
	<head>
		<style>
			div{
				background-color: white;
				width:100%;
				height:87%;
			}
			.form-container {
			  max-width: 150%;
			  background-color: transparent;
			}
			.form-container input[type=text],input[type=password]{
			  padding: 7px;
			  border: none;
			  
			}
			.form-container input[type=text],input[type=password]:focus{
				outline: none;
			}
			.form-container1 {
			  max-width: 50%;
			  padding: 10px;
			  background-color: white;
			  border-radius: 10px;
			}
			.form-container1 input[type=text],.form-container1 input[type=password]{
			  width: 100%;
			  padding: 15px;
			  margin: 5px 0 22px 0;
			  border: none;
			  background: #f1f1f1;
			  border-radius: 10px;
			}
			.form-container1 input[type=text]:focus,.form-container1 input[type=password]:focus{
			  background-color: #ddd;
			  outline: none;
			}
			.button1{
				background-color: black;
				border: none;
				color: white;
				padding: 13px 32px;
				text-align: center;
				font-size: 16px;
				margin: 4px 2px;
				opacity: 0.6;
				transition: 0.3s;
				border-radius: 10px;
			}
			.button1:hover,.button2:hover{
				opacity: 1;
			}
			.button2{
				background-color: white;
				border: none;
				color: black;
				padding: 8px 18px;
				text-align: center;
				font-size: 12px;
				opacity: 0.5;
				transition: 0.3s;
				border-radius: 3px;
			}
		</style>
	</head>
	<body bgcolor="black">
		<table width="100%" height="10%">
			<tr>
				<td>
					<font color="white" size="5" face="Verdana"><b>Rover's Compass</b></font>
				</td>
				<td width="40%">
					
				</td>
				<td width="35%">
					<form action="login.php" method="POST" class="form-container">
					<input type="text" placeholder="Email" name="login" id="login" />
					<input type="password" placeholder="Password" name="password" id="password" />
					&nbsp;
					&nbsp;
					<button type="submit" class="button2"><b>Login</b></button><br>
					<a href="www.google.in"><font color="gray">forgot password?</font></a>
					</form>
				</td>		
			</tr>
		</table>
		
				
		
		<div>
		<table border="1" width="100%" height="100%" >
			<tr>
				<td width="50%">
					<center><b>LOGO</b></center>
				</td>
				<td>
				<center><h1>Create Your Account</h1>
				<form action="sign.php" method="POST" class="form-container1">
				
				<input type="text"  name="fname" placeholder="First Name" required>
				
				<input type="text"  name="lname" placeholder="Last Name" required>
				
				<input type="text"  name="mno" placeholder="Mobile Number (Optional)">
				
				<input type="text" name="email" placeholder="Email" required>
				
				<input type="password" name="pass" placeholder="Password" required>
								
				<center>
					<button type="submit" class="button1" value="Insert"><font color="white" size="2"><b>Sign Up</b></font></button>
				</center>	
				</center>
			</form>
				</td>				
			</tr>
		</table>
		</div>
	</body>
</html>