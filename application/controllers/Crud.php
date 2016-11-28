<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    
      function __construct(){
       parent::__construct();
        
       $this->load->model('modelapp'); 
       //$this->load->library('pagination');
       $this->load->helper(array('url','text','form')); //load helper url 
   }
	
	public function index()
	{
         $data=array(
            'title'=>'admin page',
            'active_crud'=>'active',
            'ambil_info'=>$this->modelapp->TampilData('tbl_nasabah'),
        );
        
        $this->load->view('element/header',$data);
		$this->load->view('v_crud');
        $this->load->view('element/footer');
	}
    
    public function tambahdata()
	{
         $data=array(
            'title'=>'admin page',
            'active_crud'=>'active',
            'id_nsbh'=>$this->modelapp->getKodeInfo(),
            
        );
        
        $this->load->view('element/header',$data);
		$this->load->view('v_formcrud');
        $this->load->view('element/footer');
	}
    
    public function prosestambah(){
        
        $data = array (
           
            'id_nsbh' => $this->input->post('id_nsbh'),
            'nama_nsbh' => $this->input->post('nama_nsbh'),
             'tgl_dftr' => $this->input->post('tgl_dftr'),
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'agama' => $this->input->post('agama'),
            'almt_nsbh' => $this->input->post('almt_nsbh'),
        );
        
        $this->modelapp->insertData('tbl_nasabah',$data); //akses model untuk menyimpan ke database   
       
        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Ditambahkan </div></div>");
                redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Tambah coba lagi !</div></div>");
                redirect('crud'); //jika gagal maka akan ditampilkan form upload
            }
         
                
    }
    
    
    public function editdata(){


            $data = array(
                'title' => 'Edit' , 
                'active_crud' => 'active',
                'edit_info'=>$this->modelapp->getEditData(),
                
                );
            $this->load->view('element/header',$data);
            $this->load->view('v_formeditcrud');
            $this->load->view('element/footer');

    }

    public function prosesedit(){

        $id['id_nsbh'] = $this->input->post('id_nsbh');
        $data = array(                
          
          'id_nsbh' => $this->input->post('id_nsbh'),
            'nama_nsbh' => $this->input->post('nama_nsbh'),
             'tgl_dftr' => $this->input->post('tgl_dftr'),
            'tempat_lhr' => $this->input->post('tempat_lhr'),
            'agama' => $this->input->post('agama'),
            'almt_nsbh' => $this->input->post('almt_nsbh'),

        );

        $this->modelapp->updateData('tbl_nasabah',$data,$id); //akses model untuk menyimpan ke database

        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Diupdate </div></div>");
                redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            }else{

                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Update coba lagi !</div></div>");
                redirect('crud'); //jika gagal maka akan ditampilkan form upload
            }
    }
    
     public function hapusinfo(){
        
        $id['id_nsbh'] = $this->uri->segment(3);
        $this->modelapp->deleteData('tbl_nasabah',$id);

        redirect('crud'); //jika berhasil maka akan ditampilkan view vupload
            
       
    }
    
}
