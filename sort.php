<?php

$arr = [10,5,4,7,1,3,6];

for ($i=0; $i < count($arr); $i++) { 
	
	for ($j=0; $j < count($arr)-1; $j++) { 
		if($arr[$j] > $arr[$j+1]){
			$sequance = $arr[$j+1];
			$arr[$j+1] = $arr[$j];
			$arr[$j] = $sequance;
		}
	}

}
echo '<pre>';print_r($arr);

for ($y=0; $y < ; $y++) { 
	$a = 0;
	switch ($y) {
		case '0':
			# code...
			break;
		case '1':
				# code...
				break;	
		
		default:
			# code...
			break;
	}

}
>