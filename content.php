

					<div class="container"><!--All the form element go inside the container div-->
				
					<strong><h1>XKCD Password Generator</h1></strong><!--h1 is the name of the web-app-->
					<p class='password'>Your new password is:</p>
					
					<form action="index.php" method="post" > <!--Post collect all the use inputs values to be processed
						of the input values back into the page-->
	                
	                <label  name="alpha_upper">Number of Words</label>	
	                <select name= "alpha_upper"> 	
	     			<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
	     			<option value="4">4</option><!--Field to enter how many words for password -->
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					</select><br>
					<br>
	   				<label name="alpha">alpha</label>
	                <select name= "alpha"> 
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
	               	</select><br>

					<label name="numeric">numeric</label><!--Checbox to add numerical value to password -->
					<select name="numeric">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option> 
					</select><br>

					<label name="special">symbol</label><!--Checbox to add special symbol to password -->
					<select name="special">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option> 
					<option value="6">6</option> 
					<option value="7">7</option> 
					</select>
					<br><br>
						<h3> Generate an new password</h3>
					<input type="submit" name="generate" value="generate"/>

					                				
				<!--Each time the submit button is pressed it will generate a new passworf-->			
					</form><br>
					<di>				
					<strong><?php error_reporting(0); echo $generated_mixed; ?></strong></input>
					</di>
	      	  </div>      
	                
                
  
 
		