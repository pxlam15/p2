<?php

# passing form data to use for logic
$numWords = $_POST['num']; 
$boolNum = $_POST['numYes'];
$boolSym = $_POST['symYes'];

# Hardcoded array list for password 
$wordList = array(
	'a', 
	'b', 
	'c', 
	'd', 
	'e', 
	'f', 
	'g', 
	'h', 
	'i', 
	'j', 
	'k', 
	'l', 
	'm', 
	'n', 
	'o');
$symList = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");

$result = array();
#$finalArray = array();
$rand_keys = array_rand($wordList, $numWords);

foreach ($rand_keys as $key){
	$result[] = $wordList[$key];
}

shuffle($result);
shuffle($symList);


for($i = 0; $i < $numWords; $i++){
	echo $result[$i] . "-";
}	

if(isset($_POST['numYes'])){
	$r1 = rand(0, 9);
	echo $r1;
}

if(isset($_POST['symYes'])){
	$r2 = rand(0, 9);
	echo $symList[$r2];
}



/*
	if (isset($_POST['Numbers with Password?']) && $$_POST['Numbers with Password?'] == '1'){
		$r1 = rand(0, 9);
		echo "I work";
	} 

	if (isset($boolSym) && $boolSym == '1'){
		$r2 = rand(0, 9);
		echo "I work 2";
	}
	*/

#print_r($result);