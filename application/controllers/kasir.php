<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['hasil']="Masukan jumlah permen";
		$this->load->view('kasir/tampilanutama',$data);
    }
    public function aksi_perhitungan(){
       $jumlah=$this->input->post('jumlah');
        
        if($jumlah>0 and $jumlah<=3){
        $harga=4000;
        $hitung=$jumlah*$harga;
        } 

        elseif($jumlah>3 and $jumlah<=5){
        $harga=2000;
        $hitung=$jumlah*$harga;
        }
        elseif($jumlah>3 and $jumlah<=5){
            $harga=1000;
            $hitung=$jumlah*$harga;
            
          }  else{
                $harga=500;
                $hitung=$jumlah*$harga;

            }

           
        $data['hasil']="Total = ".$hitung;
        $this->load->view('kasir/tampilanutama',$data);
        }
}