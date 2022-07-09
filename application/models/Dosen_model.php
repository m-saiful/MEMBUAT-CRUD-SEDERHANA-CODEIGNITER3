<?php

class Dosen_model extends CI_Model
{

    public function getAllDosen()
    {
        $this->db->order_by('id', 'desc');
        return  $this->db->get('dosen')->result_array();

    }

    public function tambahDosen($data, $tabel)
    {
        $this->db->insert($tabel, $data);
    }

    public function getDosenById($id)
    {
        return $this->db->get_where('dosen',['id' => $id])->row_array();
        
    }

    public function editDosen($id)
    {
        $data['dosen'] = $this->db->get_where('dosen',['id' => $id])->row_array();

        // cek jika ada file yang di upload
        $upload_file = $_FILES['file1'];

        if($upload_file) {

            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '1000';
            $config['upload_path'] = './assets/cv/dosen';
            $config['encrypt_name'] = TRUE;

        
            $this->load->library('upload', $config);
            
           if($this->upload->do_upload('file1')) {
               $old_file = $data['dosen']['dokumen'];
               $path = './assets/cv/dosen/';

               if($old_file != 'default.pdf') {
                   unlink(FCPATH.$path.$old_file);
               } 
               
               $new_file = $this->upload->data('file_name');
               $this->db->set('dokumen',$new_file);

            } else {
                   $this->upload->display_errors();                
                   
               }
        }

        // cek jika ada file yang di upload
        $upload_file = $_FILES['file2'];

        if($upload_file) {

            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '1000';
            $config['upload_path'] = './assets/cv/dosen';
            $config['encrypt_name'] = TRUE;

        
            $this->load->library('upload', $config);
            
           if($this->upload->do_upload('file2')) {
               $old_file = $data['dosen']['pengalaman'];
               $path = './assets/cv/dosen/';

               if($old_file != 'default.pdf') {
                   unlink(FCPATH.$path.$old_file);
               } 
               
               $new_file = $this->upload->data('file_name');
               $this->db->set('pengalaman',$new_file);

            } else {
                   $this->upload->display_errors();                
                   
               }
        }

           $data = [
                    "id" => $this->input->post('id', true),
                    "nama" => $this->input->post('nama', true),
                    "jenis_kelamin" => $this->input->post('jenis_kelamin',  true),
                    "alamat" => $this->input->post('alamat', true),
                    "email" => $this->input->post('email', true),
                    "no_hp" => $this->input->post('no_hp', true),
                    "bidang" => $this->input->post('bidang', true),
                    // "dokumen" => $this->input->post('dokumen', true),
                    // "pengalaman" => $this->input->post('pengalaman', true),
                    "jumlah_bimbingan" => $this->input->post('jumlah_bimbingan', true)
           ];
           $this->db->where('id', $this->input->post('id'));
           $this->db->update('dosen', $data);
    }

    public function deleteData($id)
    {
        //tambahin nama kolomnya
        $this->db->where('id', $id);
        return $this->db->delete('dosen');
    }
}

   
