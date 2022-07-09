<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model','dosen');
        
    }

    public function index()
    {

          $data['title'] = 'Dosen';
          $data['dosen'] = $this->dosen->getAllDosen();
    
          $this->load->view('templates/header', $data);
          //$this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('dosen/index', $data);
          $this->load->view('templates/downbar');
          //$this->load->view('templates/footer');
      }

      public function tambah()
      {
          $data['title'] = 'Tambah Dosen';
          $data['dosen'] = $this->dosen->getAllDosen();

          $this->form_validation->set_rules('id','ID', 'required');
          $this->form_validation->set_rules('nama','Nama', 'required');
          $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin', 'required');
          $this->form_validation->set_rules('alamat','Alamat', 'required');
          $this->form_validation->set_rules('email','Email', 'required');
          $this->form_validation->set_rules('no_hp','Nomor Hp', 'required');
          $this->form_validation->set_rules('bidang','Bidang', 'required');
        // $this->form_validation->set_rules('pengalaman','Pengalaman', 'required');
        // $this->form_validation->set_rules('dokumen','Sertifikat', 'required');
          $this->form_validation->set_rules('jumlah_bimbingan','jumlah_bimbingan', 'required');
         

          if($this->form_validation->run() == false) {
              $this->load->view('templates/header', $data);
              //$this->load->view('templates/sidebar', $data);
              $this->load->view('templates/topbar', $data);
              $this->load->view('dosen/tambah', $data);
              $this->load->view('templates/downbar');
              //$this->load->view('templates/footer');

          } else {
            $file = $_FILES['file1']['name'];

            if ($file == '') {
            } else {
                $config['allowed_types'] = 'pdf';
                $config['max_size']     = '1000';
                $config['upload_path'] = './assets/cv/dosen/';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file2')) {
                    $this->session->set_flashdata('message', '
                        <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> cek file anda di view.
                        </div>
                        ');
                    redirect('dosen');
                } else {
                    $file1 = $this->upload->data('file_name', true);
                    if(!$this->upload->do_upload('file1')){
                        $this->session->set_flashdata('message', '
                        <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Failed!</strong> cek kembali type dan ukuran file anda..
                        </div>
                        ');
                    redirect('dosen');
                    } else {
                        $file2 = $this->upload->data('file_name', true);
                        $data = [
                            "id" => $this->input->post('id', true),
                            "nama" => $this->input->post('nama', true),
                            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
                            "alamat" => $this->input->post('alamat', true),
                            "email" => $this->input->post('email', true),                        
                            "no_hp" => $this->input->post('no_hp', true),
                            "bidang" => $this->input->post('bidang', true),
                            "dokumen" => $file1,
                            "pengalaman" => $file2,
                            "jumlah_bimbingan" => $this->input->post('jumlah_bimbingan', true)
                        ];
                    }
                }
                $this->dosen->tambahDosen($data, 'dosen');
                $this->session->set_flashdata('message', '
                <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Dosen berhasil di tambahkan.
                </div>
                ');
                redirect('dosen');

          }
      }
    }

    public function view($id)
    {
        $data['title'] = 'View';
        $data['dosen'] = $this->dosen->getDosenById($id);

        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dosen/view', $data);
        //$this->load->view('templates/footer');
        $this->load->view('templates/downbar');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Dosen';
        $data['dosen'] = $this->dosen->getDosenById($id);
        $data['jenis_kelamin'] =  ['pria','wanita'];

        $this->form_validation->set_rules('id','ID','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('no_hp','Nomor Hp','required');
        $this->form_validation->set_rules('bidang','Bidang Atau Keahlian','required');
        // $this->form_validation->set_rules('dokumen','Dokumen','required');
        // $this->form_validation->set_rules('pengalaman','Pengalaman Atau Project','required');
        $this->form_validation->set_rules('jumlah_bimbingan','Jumlah_bimbingan','required');
        
        if($this->form_validation->run()== false) {
            $this->load->view('templates/header', $data);
            //$this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dosen/edit', $data);
            //$this->load->view('templates/footer');
            $this->load->view('templates/downbar');
        } else {
            $this->dosen->editDosen($id);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Dosen berhasil di Edit.
            </div>
            ');
            redirect('dosen');


        }

    }

    public function delete($id, $file)
    {
        $path = '/assets/cv/dosen/';
        if($file != 'default.pdf') {
            unlink(FCPATH.$path.$file);
        }

        $this->dosen->deleteData($id);
        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Dosen berhasil di Hapus.
        </div>
        ');
    redirect('dosen');
    }
}
