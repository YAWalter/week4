<?php

	// debugging
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT);
	

	$obj = new main();
	
	class main {
		
		private $html; 	// for output string
		
		// constructor holds initial array value & prints initial output
		public function __construct() {
			// variables:
			$date 	=  date('Y-m-d', time());
			$tar 	= "2017/05/24";
			$year 	= array("2012", "396", "300","2000", "1100", "1089");
			$serial 	= array(
				'date' => $date,
				'tar'  => $tar,
				'year' => $year);
			
			// begin building output (since this is initial data and we're not altering it yet, it can go in the constructor)
			
			// header
			$this->html .= textFormat::lineBreak();
			$this->html .= 'Week 4 homework: ' . textFormat::lineBreak();
			$this->html .= textFormat::lineBreak();
			
			// homework output
			$this->html .= '<ol>';
			$this->html .= textFormat::makeListItem(answers::quesOne($serial));
			$this->html .= textFormat::makeListItem(answers::quesTwo($date));
/*
			$this->html .= answers::quesThree($this->html);
			$this->html .= answers::quesFour($this->html);
			$this->html .= answers::quesFive($this->html);
			$this->html .= answers::quesSix($this->html);
			$this->html .= answers::quesSeven($this->html);
			$this->html .= answers::quesEight($this->html);
			$this->html .= answers::quesNine($this->html);
			$this->html .= answers::quesTen($this->html);
			$this->html .= '</ol>';
			// echo $this->html;
*/		}
		
		public function __destruct() {
			$this->html .= '<h1>' . textFormat::lineBreak();
			$this->html .= '***  DID YOU TURN DEBUG OFF?!  ***';
			$this->html .= '</h1>' . textFormat::lineBreak();
			echo 'OUTPUT:<br>';
			echo $this->html;
			echo 'All done!';
		}
	}
	
	

	
	// new classes (function packages) go here
	class textFormat {
		static public function preformat($str) {
			return '<pre>' . $str . '</pre>';
		}
		 
		static public function lineBreak() {
			return '<br>';
		}
		
		static public function makeListItem($str) {
			return '<li>' . $str . '</li>';
		}
	}

	class answers {
		static public function quesOne($obj) {			
			$answer  = 'The Original Data: ' . textFormat::lineBreak();
			$answer .= 'The value of $date: ' . $obj['date'] . textFormat::lineBreak();
			$answer .= 'The value of $tar:  ' . $obj['tar']  . textFormat::lineBreak();
			$answer .= 'The value of $year: ' . print_r($obj['year'], true) . textFormat::lineBreak();
			
			return textformat::preformat($answer);
		}
		
		static public function quesTwo($date) {
			$answer  = 'Replace “-“ in $date with “/“: ' . textFormat::lineBreak();
			$answer .= str_replace('-', '/', $date)  . textFormat::lineBreak();
			
			return textformat::preformat($answer);
		}
	}
	

/* TODO:
2. Replace “-“ in $date with “/“ and print out the result.

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