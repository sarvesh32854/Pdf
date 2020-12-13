<?php

// if you not to be used Email function you want to used own function then you used...
// class CI_Email instead of class MY_Email extends CI_Email and file name should be same as class name file name CI_Email instead of MY_Email
class MY_Email extends CI_Email
{
	public function show()
	{
		echo"Extending Library";
	}
}
// class CI_Email
// {
// 	public function show()
// 	{
// 		echo"Extending Library";
// 	}
// }

?>