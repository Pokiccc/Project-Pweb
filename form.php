<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="action.php" enctype="multipart/form-data">
	  <label for="fname">First name:</label><br>
	  <input type="text" id="fname" name="fname"><br>

	  <label for="lname">Last name:</label><br>
	  <input type="text" id="lname" name="lname"><br>
	  
	  <label for="address">Address:</label><br>
	  <textarea id="address" name="address" rows="4" cols="50"></textarea><br>

	  <label for="fav_language">Favourite Language:</label><br>
	  <input type="radio" id="html" name="fav_language" value="HTML">
	  <label for="html">HTML</label><br>
	  <input type="radio" id="css" name="fav_language" value="CSS">
	  <label for="css">CSS</label><br>
	  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
	  <label for="javascript">JavaScript</label><br>

	  <label for="vehicle">Favourite vehicle:</label><br>
	  <input type="checkbox" id="vehicle" name="vehicle[]" value="Bike">
	  <label for="vehicle"> I have a bike</label><br>
	  <input type="checkbox" id="vehicle" name="vehicle[]" value="Car">
	  <label for="vehicle"> I have a car</label><br>
	  <input type="checkbox" id="vehicle" name="vehicle[]" value="Boat">
	  <label for="vehicle"> I have a boat</label><br>

	  <label for="cars">Choose a car:</label><br>

		<select name="cars" id="cars">
		  <option value="volvo">Volvo</option>
		  <option value="saab">Saab</option>
		  <option value="mercedes">Mercedes</option>
		  <option value="audi">Audi</option>
		</select> <br>

	  <label for="foto">Your Foto:</label><br>
	  <input type="file" id="foto" name="foto"><br>

	  <br><input type="submit" name="simpan" value="Simpan">
	</form>
</body>
</html>