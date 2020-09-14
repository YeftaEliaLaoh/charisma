<?php
$arr = json_decode(file_get_contents("php://input"));
if (empty($arr)){ 
	exit("Data empty.");
} else {
		print_r((count_chars($arr->input1, 1) == count_chars($arr->input2, 1))?"true":"false");
}
?>

