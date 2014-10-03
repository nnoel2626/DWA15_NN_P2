<?php
error_reporting(E_ALL);         # Report Errors, Warnings, and Notices
ini_set('display_errors', 1);

$paramCount = 0;
foreach($_POST as $post)
if (!empty($post))
	$paramCount++; //same as $paramCount = $paramCount + 1 or $paramCount += 1//
if ($paramCount > 0) //Or if $paramCount (post) have been submited//
{
	//I start with a text document that contains about 70 american proverbs.

	$proverbFilePath = "./prov_phrase.txt";										// contains a list of proverbs//
	//$numeric = "0123456789";													// number string
	$special = ".-+=_,!@$#";													// special character symbol//
	$password = "";																// declare password variable

	$proverbFile = file_get_contents($proverbFilePath);							//Get all the phases in the pro_phase.txt into a string//

	$proverbs = explode("\n", $proverbFile);									//Breaking it down into a list distinct array string arrays//

	/*
	echo "<pre>";//For testing purposes
	print_r ($generated_strings);//For testing purposes
	echo "</pre>";
	*/

	/* ***** Select Proverb to Use ***** */

	$qualifiedProverbs = array ();												// declare empty array for storing qualified proverbs

	foreach ($proverbs as $proverb)												// iterate over proverb array
	if (str_word_count($proverb) == intval ($_POST['word_count']))			// if the proverb length matches user input
		$qualifiedProverbs[] = $proverb;									// add proverb to qualified proverbs array ($qualifiedProverbs)

	$proverbCount = count($qualifiedProverbs);									// define number of qualified proverbs
	$finalIndex = rand (0, $proverbCount - 1);										// generate index of final proverb from qualified pool
	$finalProverb = $qualifiedProverbs[$finalIndex];							// set final proverb

	// above three lines can be written as: $finalProverb = $qualifiedProverbs[rand (0, count($qualifiedProverbs))];

	/* ***** Initialise $password Variable and Set Capitalization ***** */
	$proverbWords = explode(" ", trim($finalProverb));								// break down proverb into words

	foreach ($proverbWords as $word)											// iterate over proverb words
	{	
	$letter = strtolower ($word[0]);										// initialize temporary letter variable

	if (isset($_POST['firstL_cap']) && rand(0, 1))							// if capitalization check box is checked and random boolean selection is true
		$letter = strtoupper ($letter);										// capitalize letter

	$password .= $letter;													// add letter to password
	}


	/* ***** Add Numerals ***** */
	if (isset($_POST['add_number']))												// if user wants numbers
	{

	$numberOfNumeralsToAdd = rand (1, 4);									// randomly choose how many to add (1-4)
	
	for ($i = 0; $i < $numberOfNumeralsToAdd; $i++)							// loop the amount of numbers that need adding
		$password .= rand (0, 9);											// add a random number to password
	}

	

	/* ***** Add Special Chars ***** */
	if (isset($_POST['add_symbol']))												// if user want special chars
	{
	$numberOfSpecialCharsToAdd = rand (1, 3);	
																				// randomly choose how many to add (1-3)
	for ($i = 0; $i < $numberOfSpecialCharsToAdd; $i++)						// loop the amount of special chars that need adding
		$password .= $special[rand (0, strlen($special) -1)];					// add a random special character to password
	}

	/* ***** Display the New Password ***** */
	

}
 ?>