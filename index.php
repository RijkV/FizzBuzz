<?php 

class FizzBuzzy
{
	public $numbers;
	public $words;
	function __construct()
	{
		$this->numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
		$this->words = [
			'Fizz' => 3,
			'Buzz'	=>	5,
			'Rijk'	=>	6,
		];
	}

	public function checkWords($number){
		$returnValue = "";
		foreach ($this->words as $key => $value) {
			if(is_int($number / $value)){
				$returnValue .= $key;
			}
		}
		return $returnValue;	
	}

	public function fizzBuzz(){
		foreach ($this->numbers as $number) {
			$value = "";

			$value .= $this->checkWords($number);

			echo 'current number:' . $number . ' is value: ' . $value . '</br>';	
		}
	}
}

$rijk = new FizzBuzzy;
$rijk->fizzBuzz();
