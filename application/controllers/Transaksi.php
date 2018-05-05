<?php 

/**
* 
*/
class Transaksi extends CI_Controller
{
	public function tambah()
	{
		$data['content']='tambah_data';
		$this->load->view('dashboard_view',$data);
	}
}

 ?>