<?php 
/**
 * 
 */
 class Tampil extends CI_Controller
 {
 	public function index()
 	{
 		$data ['content']= "tampil_view";
 		$this->load->view('dashboard_view',$data);
 	}
 	
 	
 } ?>