<?php 
		class Dashboard extends CI_Controller{
			function index(){
				$data['content']= "home_view";
				$this->load->view("dashboard_view",$data);
		}
	}
?>