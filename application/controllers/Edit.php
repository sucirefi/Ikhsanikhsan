<?php 
class Edit extends CI_Controller{
		
		public function edit($id){
			$data['query']=$this->db->get_where('mugtabel',['pemesan_id'=>$id])-row();
			$data['content']= "home_view";
			$this->load->view("dashboard_view",$data);	
			}

		public function proses(){
				$submit=$this->input->post('submit');
				$nama=$this->input->post('nm_pemesan');
				$jml=$this->input->post('jml_barang');
					$data=array(
						'nama_pemesan'=>$nama,
						'jumlah'=>$jml,
						'tanggal'=>now()
						);
					$insert=$this->db->insert('mugtabel',$data);
					if($insert){
						echo"<script>alert('data berhasil disimpan')</script>";
						redirect('tampil');
					}else{
					echo"<script>alert('data gagal disimpan')</script>";
				}

		}
	}
?>