

					<div class="container"><!--All the form element go inside the container div-->
				
					<strong><h1>XKCD Password Generator</h1></strong><!--h1 is the name of the web-app-->
					<p class='password'>Your new password will be one that can not forgotten:</p>
					<!--Post collect all the use inputs values to be processed of the input values back into the page-->
					<form action="index.php" method="post" > 
	                <label  name="word_count">Number of Words</label>	
	                <select name= "word_count"> 	
	     			<option value="4">4</option>(4 min)<!--Field to enter how many words for password -->
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select>
					<br><br><!--Php code is to preserve user input when the form is reset-->
	   				<label for='firstL_cap'>Add Capital Letters</label>
	                <input type='checkbox' name='firstL_cap' id='firstL_cap' <?php if (isset($_POST['firstL_cap'])) echo "checked" . " " . "value='y'"; ?>> <!--Checbox to add numerical value to password -->
	               	<br><br>
	               	<!--Php code is to preserve user input when the form is reset-->
					<label for='add_number'>Add numbers</label>
					<input type='checkbox' name='add_number' id='add_number' <?php if (isset($_POST['add_number'])) echo "checked" . " " . "value='y'"; ?>> <!--Checbox to add numerical value to password -->
					<br><br>
					<!--Php code is to preserve user input when the form is reset-->
					<input type='checkbox' name='add_symbol' id='add_symbol' <?php if (isset($_POST['add_symbol'])) echo "checked" . " " . "value='y'"; ?>> <!--Checbox to add special symbol to password -->
					<label for='add_symbol'>Add symbols</label>
					<br><br>
					<h3> Generate an new password</h3>
					<input type="submit" name="generate" value="generate"/><!--Each time the submit button is pressed it will generate a new passwor-->       
					</form>
					<br><br>
					<div>				
					<strong><?php error_reporting(0); if (isset($password)){//echo "The generated password is:".$password;
					echo "<br>THe passphrase is: " . $finalProverb . $password;} ?></strong></input>
					</div>
					</div>      
	                
                
  
 
		