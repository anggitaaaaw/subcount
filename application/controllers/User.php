<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();

       $this->load->library('session');
		}

 
/*	public function login_cuti(){
          $username = $this->input->post('username', 'true');
          $password = $this->input->post('password', 'true');
          // check account
          $this->form_validation->set_rules('username', 'username', 'required');
          $this->form_validation->set_rules('password', 'password', 'required');
          $temp_account = $this->cuti_model->check_account($username, $password)->row();
          $num_account = count($temp_account);

          
          if ($this->form_validation->run() == FALSE){
            $this->load->view('penjualan/login');
          }else{
              if ($num_account > 0){
                  // kalau ada set session
                  $array_items = array(
                      'id' => $temp_account->id,
                      'username' => $temp_account->username,
                      'logged_in' => true
                  );
                  $this->session->set_userdata($array_items);
                     redirect(site_url('Cuti/permohonan/'));
              }else{
                  // kalau ga ada diredirect lagi ke halaman login
                  $this->session->set_flashdata('notification', 'username dan password tidak sesuai, coba lagi');
               //  $this->load->view('penjualan/login');
              }   
          }

  }*/

  public function new_user(){
    $data['fullname'] = $this->input->post('fullname');
    $data['username'] = $this->input->post('username');
    $data['password'] = $this->input->post('password');
    $data['hak_akses'] = $this->input->post('hak_akses');
    $data['status'] = $this->input->post('status');
    $this->mongo_db->insert('db_test', $data);
    echo "1";
  }

}
