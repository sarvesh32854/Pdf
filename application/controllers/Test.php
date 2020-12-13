<?php
 class Test extends CI_Controller
 {
 	public function index()
 	{
 		// Custom Helper
 		// $this->load->helper('demo');
 		// test();

 		// Custome library
 		// $this->load->library('Custom');
 		// $this->custom->xyz();

 		// extends existing helper
 		// $this->load->helper('array');
 		// show();

 		// function override
 		// $arr =['ABC'=>'abc','XYZ'=>'xyz'];
 		// echo element('ABC',$arr,'Not found');
 		
 		// extending library override
 		$this->load->library('Email');
 		$this->email->show();
 		// echo "Test Controller";
 	}


 }



?>