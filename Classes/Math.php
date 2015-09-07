<?php 

class Math {

	public function sum($num1, $num2) 
	{
		if ($num1 + $num2 == 5) {
			return 5;
		}

		if ($num1 > $num2 && $num1 > 5) {
			return $this->sum($num1 - 1, $num2);
		} 

		if ($num2 >= $num1) {
			return $this->sum($num1, $num2 - 1);	
		}
	}

	public function isTrue() {
		return false;
	}

}