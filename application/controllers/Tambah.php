<?php 
		class Tambah extends CI_Controller{
			function proses(){
				$submit=$this->input->post('submit');
				$nama=$this->input->post('nm_pemesan');
				$jml=$this->input->post('jml_barang');
				$tgl=date('Y-m-d');
				$tanggal=$this->input->post('tanggal');

				if($submit){	
				echo"<script>alert('".$tgl."')</script>";
					$data=array(
						'nama_pemesan'=>$nama,
						'jumlah'=>$jml,
						'tanggal'=>$tanggal
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

		public function edit($id){
			$data['query']=$this->db->get_where('mugtabel',['pemesan_id'=>$id])->row();
			$data['content']= "edit_data";
			$this->load->view("dashboard_view",$data);	
			}

		public function update(){
				$id=$this->input->post('id');
				$submit=$this->input->post('submit');
				$nama=$this->input->post('nm_pemesan');
				$jml=$this->input->post('jml_barang');
				$tgl=date('Y-m-d');
				$tanggal=$this->input->post('tanggal');

					$data=array(
						'nama_pemesan'=>$nama,
						'jumlah'=>$jml,
						'tanggal'=>$tanggal	
						);
					$this->db->where('pemesan_id',$id);
					$insert=$this->db->update('mugtabel',$data);
					if($insert){
						echo"<script>alert('data berhasil disimpan')</script>";
						redirect('tampil');
					}else{
					echo"<script>alert('data gagal disimpan')</script>";
				}

		}
		public function hapus($id){
			$this->db->delete('mugtabel',['pemesan_id'=>$id]);
			redirect('tampil');
		}
	}
?>