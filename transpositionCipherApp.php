<!DOCTYPE HTML>
<html>  
<head>
	<title>Transposition Cipher Web Application</title>
</head>
<body>

 <form action="transpositioncipherapp.php" method="POST">
  Input Message: <input type="text" id="message" name="message" placeholder="Enter message" required> <!-- textbox -->
  <input type="submit" value="Submit"> <br> <!-- submit button --> 
</form> 

<?php
    $message = "";
    $userinput = "";
    $nospaces = "";

	echo '<br/>'."\n"; /* prints new line */

    if(isset($_POST['message'])) /* checks to see if textbox is filled */
    	$userinput=$_POST['message']; /* append meesage to userinput variable */
    	echo "Plaintext message is: ";
    	echo $userinput; /* prints out message after clicking submit button */
		echo '<br/>'."\n"; /* prints new line */

		echo "Without spaces: ";
		$nospaces = str_replace(' ', '', $userinput);
		echo $nospaces;
		echo '<br/>'."\n"; /* prints new line */
		echo '<br/>'."\n"; /* prints new line */

		echo "3 column encryption: ";
		echo '<br/>'."\n"; /* prints new line */
		$array3 = str_split($nospaces);
		$z=0;
		for ($i = 0; $i < strlen($nospaces); $i++) 
		{
    		if(empty($array3[$i])){$array3[$i]=null;}
    		elseif($array3[$i]){echo $array3[$i]; $z++;}
    		if(empty($array3[$i+1])){$array3[$i+1]=null;}
    		elseif($array3[$i+1]){echo $array3[$i+1];}
    		if(empty($array3[$i+2])){$array3[$i+2]=null;}
    		elseif($array3[$i+2]){echo $array3[$i+2];}
    		$i++;
    		$i++;
    		echo '<br/>'."\n"; /* prints new line */
		}

		echo '<br/>'."\n"; /* prints new line */
		echo "$z rows";
		echo '<br/>'."\n"; /* prints new line */
		echo '<br/>'."\n"; /* prints new line */

		$countrows1=0;
		$location = 0;
		echo "Result: ";
    	for ($y = 0; $y < 3; $y++) 
    	{
    		$location = $y;
    		echo $array3[$y];
    		$location = $location+3;
    		while($countrows1 < $z-1) 
    		{
    			echo $array3[$location];
    			$location = $location+3;
    			$countrows1++;
    		}
    		$countrows1=0;
		}
		echo '<br/>'."\n"; /* prints new line */
		echo '<br/>'."\n"; /* prints new line */

		echo "4 column encryption: ";
		echo '<br/>'."\n"; /* prints new line */
		$b=0;
		$array4 = str_split($nospaces);
		for ($a = 0; $a < strlen($nospaces); $a++)
		{
			if (empty($array4[$a])){$array4[$a]=null;}
			elseif($array4[$a]){echo $array4[$a]; $b++;}
			if (empty($array4[$a+1])){$array4[$a+1]=null;}
    		elseif($array4[$a+1]){echo $array4[$a+1];}
    		if (empty($array4[$a+2])){$array4[$a+2]=null;}
    		elseif($array4[$a+2]){echo $array4[$a+2];}
    		if (empty($array4[$a+3])){$array4[$a+3]=null;}
    		elseif($array4[$a+3]){echo $array4[$a+3];}
    		$a++;
    		$a++;
    		$a++;
    		echo '<br/>'."\n"; /* prints new line */
		}

		echo '<br/>'."\n"; /* prints new line */
		echo "$b rows";
		echo '<br/>'."\n"; /* prints new line */
		echo '<br/>'."\n"; /* prints new line */

		$countrows2=0;
		$location2 = 0;
		echo "Result: ";
    	for ($a = 0; $a < 4; $a++) 
    	{
    		$location2 = $a;
    		echo $array4[$a];
    		$location2 = $location2+4;
    		while($countrows2 < $b-1) 
    		{
    			echo $array4[$location2];
    			$location2 = $location2+4;
    			$countrows2++;
    		}
    		$countrows2=0;
		}
?>
</body>
</html>