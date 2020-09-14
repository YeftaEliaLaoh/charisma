<?php
$arr = json_decode(file_get_contents("php://input"));
if (empty($arr)){ 
	exit("Data empty.");
} 
else 
{
		for ($x = 1; $x <= $arr->input; $x++) 
	{
 		if ($x % 9 == 0)
		{
		   print ($x." CHPN") ;
		print("\n");
		}
		else if ($x % 3 == 0)
		{
		   print ($x." PN") ;
		print("\n");
		}
		else if ($x % 2 == 0)
		{
		   print ($x." CH") ;
		print("\n");
		}
		else
		{
		   print ($x) ;
		print("\n");
		}
	} 
}
?>

