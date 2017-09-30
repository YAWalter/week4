<?php

	$obj = new main();

	class main {
		public function __construct() {
			echo 'Starting the function display: </br>';
		}
		
		public function __destruct() {
			echo '</br> All done!';
		}
	}

/*	TODO: put this in a new function
	echo '1. The Original Data: <br> <pre>';

	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";

	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";

	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	echo '</pre>';
*/

/* TODO:
2.  Replace “-“ in $date with “/“ and print out the result.

3. Compare $date with $tar and then if the result is greater than 0, you should print out “the future”; if the result is less than 0, you should print out “the past”; if the result is equal to 0, you should print out “Oops”. You must use if-elseif statement in this question. 

4. Search for “/“ in $date and print out all positions. If there are more than one position, please delimit each position value with space.

5. Count the number of words in $date and print out the result.

6. Return the length of a string and print out the result.

7. Return the ASCII value of the ﬁrst character of a string and print out the result. 

8. Return the last two characters in $date and print out the result.

9. Break $date into an array and set “separator” parameter as “/“ and print out the each array element and delimit all elements with space. (8%) 

10.Loop through the array $year and you need to identify whether each year is a leap year. If it is, print out “True”, otherwise, print out “False”.
	A. You need to use two methods to loop through the array, which means you need to use two different statement structures to ﬁnish this job. The ﬁrst one must be foreach and the second one could be for or while or do…while. 
	B. You need to use switch statement to identify whether a year is a leap year. 
	C. You need to delimit each result with space in one line. 
	
Leap Years - https://www.mathsisfun.com/leap-years.html
*/
?>