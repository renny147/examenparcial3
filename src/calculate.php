<?php

class Calculate{

	function add($a,$b){
		return $a+$b;
	}
	function rest($a,$b){
		return $a-$b;
	}
	function multiplicate($a,$b){
		return $a*$b;
	}
	function divide($a,$b){
		if($b!=0) return $a/$b;
		else return "Denominador incorrecto";
	}
	function igv18($a){
		return $a=$a*(0.18);
	}
	function igv19($a){
		return $a=$a*(0.19);
	}

	function arrayAdded($array){
		$result=0;
		if($array !=null )
		foreach($array as $item){
			if( is_numeric($item) )
				$result+=$item;
		}
		return $result;
	}
}

?>