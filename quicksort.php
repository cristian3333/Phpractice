<?php
$unsorted = array(43,21,199,2,1,9,222,24,2,99,23,8,7,333,114,92,5);

function quick_sort($array)
{
	// find array size
    $length = count($array);
    echo '$length: '.$length.'<br> ';
	
	// base case test, if array of length 0 then just return array to caller
	if($length <= 1){
		return $array;
	}
	else{
	
	// 	// select an item to act as our pivot point, since list is unsorted first position is easiest
        $pivot = $array[0];
        echo '$pivot: '.$pivot.'<br> ';
		
	// 	// declare our two arrays to act as partitions
        $left = $right = array();
        // echo '$left: '.$left.'<br> ';
        // echo '$right: '.$right.'<br> ';
		
	// 	// loop and compare each item in the array to the pivot value, place item in appropriate partition
		for($i = 1; $i < count($array); $i++)
		{
			if($array[$i] < $pivot){

                array_push($left, "$array[$i]");

                echo '$left[]: '.$left.'<br> ';
			}
			else{
            array_push($right, "$array[$i]");
	// 			$right[] = $array[$i];
			}
        }
        
        // foreach ($array as $a) {
        //     echo ' Array contains: '.$a;
        // }
        foreach ($left as $a) {
            echo ' left contains: '.$a.'<br> ';
        }
        foreach ($right as $a) {
            echo ' right contains: '.$a.'<br> ';
        }
		
	// 	// use recursion to now sort the left and right lists
    return array_merge(quick_sort($left),array($pivot),quick_sort($right));
    echo ' array($pivot) contains: '.array($pivot);
	}
}

$sorted = quick_sort($unsorted);
print_r($sorted);

?>