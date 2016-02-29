<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>CMPT 350 Assg2</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="..\stylesheets\screen.css">
	</head>
	<body>
		<div id="header">
			<h1><img id="h-image" src="../assets/dnd_logo.png">Character Builder</h1>
		</div>
		<iframe name="dumpster" style="display:none;"></iframe>
		<div id="forms">
			<form action ="../php/send_data.php" method ="post" id="contact" target="dumpster">
				Create a character
				<br>
				<br>
				Name:
				<br>
				<input type="text" name="name" id="name" required>
				<br>
				<br>
				Level:
				<br>
				<input type="number" name="level" id="level" required>
				<br>
				<br>
				Race:
				<br>
				<select name="race" id="race" required>
					<option value= "Dragonborn">Dragonborn</option>
					<option value= "Dwarf">Dwarf</option>
					<option value= "Elf">Elf</option>
					<option value= "Gnome">Gnome</option>
					<option value= "Half-Elf">Half-Elf</option>
					<option value= "Half-Orc">Half-Orc</option>
					<option value= "Halfing">Halfing</option>
					<option value= "Human">Human</option>
					<option value= "Tiefling">Tiefling</option>
				</select>
				<br>
				<br>
				Class:
				<br>
				<select name="class" id="class" required>
					<option value= "Barbarian">Barbarian</option>
					<option value= "Bard">Bard</option>
					<option value= "Cleric">Cleric</option>
					<option value= "Druid">Druid</option>
					<option value= "Fighter">Fighter</option>
				</select>
				<br>
				<br>
				Background:
				<br>
				<select name="background" id="background" required>
					<option value= "Acolyte">Acolyte</option>
					<option value= "Charlatan">Charlatan</option>
					<option value= "Criminal">Criminal</option>
					<option value= "Entertainer">Entertainer</option>
					<option value= "Hermit">Hermit</option>
				</select>
				<br>
				<br>
				<input type="submit" value="Submit" id="submit">
			</form>
			<div id = "right_col">
				<p id="char_title">
					Character List
				</p>
				<form action="../php/searchForCharacters.php" method="post" target="character_display" id = "charterForm" name="character_display">
					<br>
					<br>
					Name:
					<br>
					<input type="text" name="searchName" id="searchName" value="<?php echo $_GET['name'];?>" required>
					<br>
					<br>
					<p value = "<?php echo $_GET['name'];?>">
						"<?php echo $_GET['name'];?>" 
						</p>
					<input type="submit" value="Submit" id="submit">

				</form>
			</div>
		</div>
		<div id="footer">
			© Corey Hickson & Levi Paradis
		</div>
	</body>
</html>