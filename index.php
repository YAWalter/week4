<?php

	// # DEBUGGING
	// echo '<h1><br>***  TURN DEBUG OFF!!  ***<br></h1><br>';
	// ini_set('display_errors', 'On');
	// error_reporting(E_ALL | E_STRICT);
	// date_default_timezone_set('UTC');
	
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
			
			// begin building output 
			
			// header
			$this->html .= textFormat::lineBreak() . 'Week 4 homework: ' . textFormat::lineBreak() . textFormat::lineBreak();
			
			// homework output (list format to handle numbering)
			$this->html .= '<ol>';
			$this->html .= textFormat::makeListItem(answers::quesOne($serial));
			$this->html .= textFormat::makeListItem(answers::quesTwo($date));
			$this->html .= textFormat::makeListItem(answers::quesThree($serial));
			$this->html .= textFormat::makeListItem(answers::quesFour($date));
			$this->html .= textFormat::makeListItem(answers::quesFive($date));
			$this->html .= textFormat::makeListItem(answers::quesSix($tar));
			$this->html .= textFormat::makeListItem(answers::quesSeven($tar));
			$this->html .= textFormat::makeListItem(answers::quesEight($date));
			$this->html .= textFormat::makeListItem(answers::quesNine($date));
			$this->html .= textFormat::makeListItem(answers::quesTen($year));
			$this->html .= '</ol>' . textFormat::lineBreak();
			// echo $this->html;
		}
		
		public function __destruct() {
			echo $this->html;
			echo '<hr>';
		}
	}
	
	
	// ## OTHER CLASSES GO HERE
	//    try to keep everything in alpha order, eh?
	

	class answers {
		// 1. The original data
		static public function quesOne($obj) {
			$answer  = textFormat::valueOf('$date: ', $obj['date']);
			$answer .= textFormat::valueOf('$tar : ', $obj['tar']);
			$answer .= textFormat::valueOf('$year: ', print_r($obj['year'], true));
			
			return textformat::preformat($answer) . textformat::lineBreak();
		}
		
		// 2. Replace “-“ in $date with “/“ and print out the result
		static public function quesTwo($date) {
			$answer  = textFormat::makeSlashes($date);
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 3. Compare $date with $tar and then if the result > 0, print “the future”; if the result < 0, print “the past”; if the result == 0, print “Oops”
		static public function quesThree($obj) {
			
			$date = str_replace('-', '', $obj['date']);
			$tar  = str_replace('/', '', $obj['tar']);

			if ($tar - $date > 0) {
				$answer = 'the future';
			} elseif ($tar - $date < 0) {
				$answer = 'the past';
			} elseif ($tar - $date == 0) {
				$answer = 'Oops';
			} else {
				$answer = 'ERROR';
			}
			
			// $answer .= '***' . $tar . ' - ' . $date . ' = ' . $tar - $date . '***';
			$answer .= textFormat::lineBreak();
			
			return $answer;
		}
		
		// 4. Search for “/“ in $date and print out all positions, delimited with ' '
		static public function quesFour($date) {
			$pos    = 0;
			$answer = '';
			$fdate  = textFormat::makeSlashes($date);
			
			while ($pos < strlen($fdate)) {
				if ($fdate[$pos] == '/') {
					$answer .= $pos . ' ';
				}
				$pos++;
			}
			
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 5. Count the number of words in $date
		static public function quesFive($str) {
			$words   = explode('-', $str);
			$answer  = count($words);
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 6. Return the length of a string
		static public function quesSix($str) {
			$answer  = strlen($str);
			$answer .= ' (length of $tar string)';
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 7. Return the ASCII value of the ﬁrst character of a string
		static public function quesSeven($str) {
			$answer  = ord($str);
			$answer .= ' (ASCII value of first char in $tar)';
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 8. Return the last two characters in $date
		static public function quesEight($str) {
			$answer  = substr($str, -2);
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 9. Break $date into an array and set “separator” parameter as “/“ and print out the each array element and delimit all elements with space
		static public function quesNine($str) {
			$tmp = textFormat::makeSlashes($str);
			$answer = '';
			$tmp = explode('/', $tmp);
			foreach ($tmp as $val) {
				$answer .= $val . ' ';
			}
			
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
		// 10. Loop through the array $year and print “True” if that year is a Leap Year; otherwise, print “False”: https://www.mathsisfun.com/leap-years.html
		static public function quesTen($years) {
			$answer = '';
			foreach ($years as $year) {
				do {
					$answer .= logic::isLeapYear($year);
					$answer .= ' ';					
				} while (false);
			}
			
			$answer .= textformat::lineBreak();
			
			return $answer;
		}
		
			// A. You need to use two methods to loop through the array, which means you need to use two different statement structures to ﬁnish this job. The ﬁrst one must be foreach and the second one could be for or while or do…while. 
			// B. You need to use switch statement to identify whether a year is a leap year. 
			// C. You need to delimit each result with space in one line. 
	}
	
	class logic {
		static public function isLeapYear($year){
			$bool = 'False';
			switch ($year % 400) {
				case 0: 
					$bool = 'True';
					break;
				default:
					switch ($year % 100) {
						case 0:
							$bool = 'False';
							break;
						default:
							switch ($year % 4) {
								case 0:
									$bool = 'True';
									break;
								default:
									break;
							}
					}
			}
			
			return $bool;
		}
	}
	
	// string formats; keep this in alpha order...
	class textFormat {
		static public function lineBreak() {
			return '<br>';
		}
		
		static public function makeListItem($str) {
			return '<li>' . $str . '</li>';
		}
		
		static public function makeSlashes($str) {
			$tmp = str_replace('-', '/', $str);
			
			return $tmp;
		}
		
		static public function preformat($str) {
			return '<pre>' . $str . '</pre>';
		}
		 
		static public function valueOf($title, $str) {
			$tmp = 'The value of ' . $title . $str . textFormat::lineBreak();
			
			return $tmp;
		}
	}

?>