<html>
<?php
	$connect = mysqli_connect("location","root","","gallery");
	if(isset($_POST["insert"]))
	{
		$file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$query = "insert into image_tab(name) values ('$file')";
		if(mysqli_query($connect,$query))
		{
				echo '<script>alert("Image inserted into database")</script>';
				
		}
	}
?>
	<head>
		<title>
			Gallery
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		div{
				background-color:white;
				width:100%;
				
			}
		a{
			text-decoration: none;
			display: inline-block;
			padding: 10px 10px;
		}
		.previous {
				background-color: black;
				color: white;
		}
			
		a:hover{
				background-color: gray;				
		}
		.bg2{
			background-color:#f1f1f1;
			width:90%;
			height:100%;
		}
		.upld{
			background-color: white;
			color: black;
			cursor: pointer
			
			
		}
		.upld:hover{
			background-color: gray;
			background-color: black;
			color: white;
			transition-duration: 0.4s;
		}
		
		
		.form-popup {
		  display: none;
		  position: fixed;
		  left:70%;
		  max-width:400px;
		  z-index: 20;
		  top: 150;
		  border: 3px solid #f1f1f1;
		  border-color: black;
		  
		}

		/* Add styles to the form container */
		.form-container {
		  max-width: 100%;
		  padding: 10px;
		  background-color: white;
		}

		/* Full-width input fields */
		.form-container input[type=file] {
		  width: 100%;
		  padding: 15px;
		  margin: 5px 0 22px;
		  border: none;
		  background: #f1f1f1;
		}

		/* When the inputs get focus, do something */
		.form-container input[type=file]:focus:focus {
		  background-color: #ddd;
		  outline: none;
		}		
		
		</style>
	</head>
	<body bgcolor="black">
		<table width="100%">
			<tr>
				<td>
					<font color="white" size="5" face="Verdana"><b>Rover's Compass</b></font>
				</td>
				<td width="75%">
				</td>
				<td>
					<a href="#"><input type="image" src="pro.png" height="40px" width="40px"/></a>
				</td>
			</tr>
		</table>
		<div>
		<br>
		<table width="100%">
			<tr>
				<td>
					&nbsp;&nbsp;<a href="home.php" class="previous round"><font color="white" size="2" face="Verdana" id="openForm"><b>&#8249; HOME</b></font></a>
				</td>
				<td width="83%">
				</td>
				<td>
					<button type="button" onclick="openForm()" style="border: 2px solid black; padding:10px 10px;" class="upld"><font size="2" face="Verdana"><b>Upload your image</b></font></a></button>
					<div class="form-popup" id="myForm">
						<form action="/action_page.php" class="form-container" method="post">
							
							<input type="file" name="Browse" id="image"/>
							
							<br>
							<form action="/action_page.php">
							<font color="black" size="3" face="Verdana">
							<b>Please select the type of the image</b><br></font>	
							<font color="black" size="2" face="Verdana">
							<input type="radio" id="portrait" name="type" value="portrait"/>
							<label for="portrait">portrait</label><br>
							<input type="radio" id="landscape" name="type" value="landscape"/>
							<label for="landscape">Landscape</label><br>
							<input type="radio" id="abstract" name="type" value="abstract"/>
							<label for="abstract">Abstract</label><br>
							<input type="radio" id="bw" name="type" value="bw"/>
							<label for="bw">Black & white</label><br>
							<input type="radio" id="macro" name="type" value="macro"/>
							<label for="macro">Macro</label><br>
							<input type="radio" id="fassion" name="type" value="fassion"/>
							<label for="fassion">Fassion</label>
							</font>
							</form>
														
							<center>							
							<button type="submit" name="insert" id="insert" value="insert" style="border: 2px solid black; padding:10px 10px;" class="upld" id="insert"><b>Upload</b></button>
							&nbsp;
							<button type="button" style="border: 2px solid black; padding:10px 10px;" class="upld" onclick="closeForm()" id="close"><b>Close</b></button>
							</center>
							<br>
						</form>
					</div>
				</td>
			</tr>
		</table>
		<center>
			<font color="black" size="10" face="Verdana"><b>Gallery</b></font>
		<br>
		<br>
		<div class="bg2">
		<br>
		<br>
		<table>
			<?php
				$query = "select * from gallery_tab order by id desc";
				$result = mysqli_query($connect,$query);
				while($row = mysqli_fetch_array($result))
				{
					echo'
						<tr>
							<td>
								<img src="data:image/jpeg;base64,'.base64_encode($row['name']).'"/>
							</td>
						</tr>
					';
				}
			?>
		</table>
		</div>
		</center>
		</div>
		<br>
		<script>
		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
		
		$(document).ready(function(){
			var image_name =$('#image').val();
			if(image_name == '')
			{
				alert("Please select image");
			}
			else
			{
				var extension = $('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg'])==-1)
				{
					alert('Invalud image file');
					$('#image').val('');
					return false;
				}
			}
			
		});
		
		
		</script>
	</body>

</html>
