
<div class="container"><!--All the form element go inside the container div-->		
					
	<h1>XKCD Password Generator</h1><!--h1 is the name of the web-app-->
		<hr>
			<h2 class='password'>Create a very secure password that you will always remember !!</h2>
			<form action="index.php" method="post"> <!--Post collect all the use inputs values to be processed of the input values back into the page-->
	     
	           <fieldset>
	        						
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
						<br>
				
		   				<label for='firstL_cap'>Include Capital Letters</label>
		                <input type='checkbox' name='firstL_cap' id='firstL_cap' <?php if (isset($_POST['firstL_cap'])) echo "checked" . " " . "value='y'"; ?>><!--Checbox to add numerical value to password -->          
					
						<br>
					
						<label for='add_number'>Add Numbers</label>
						<input type='checkbox' name='add_number' id='add_number' <?php if (isset($_POST['add_number'])) echo "checked" . " " . "value='y'"; ?> > <!--Checbox to add numerical value to password -->
					
						<br>
				
						<label for='add_symbol'>Add Symbols</label>
						<input type='checkbox' name='add_symbol' id='add_symbol'<?php if (isset($_POST['add_symbol'])) echo "checked" . " " . "value='y'"; ?>> <!--Checbox to add special symbol to password -->
					
					</fieldset>
				
					<fieldset>
					
					<h3> Generate an new password</h3>
					
					<input type="submit" name="generate"  value="generate"/><!--Each time the submit button is pressed it will generate a new passwor-->       
					
					</fieldset>
					
					
				
					<p align="center" style= "color:red"><strong><?php error_reporting(0); if (isset($password)){echo "The generated password is:".$password;
					
					echo "<br>Your passphrase is: " . $finalProverb;} ?></strong></input>
					</p>
					
					
					</form>
					
			
			     <br><br>
	                
                

 
		