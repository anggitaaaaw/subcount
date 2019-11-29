<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function menus(){
		$this->load->helper('url');
		$this->load->view('menus');
	}

	//MODUL DASHBOARD
	public function link_dashboard(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	//MODUL MASTER USER
	public function adm_master_user(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/administrator/master_user');
		$this->load->view('footer');
	}

	public function adm_historical_akses(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/administrator/historical_akses');
		$this->load->view('footer');
	}

	//MODUL MAKING LABEL
	public function create_label_batch(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/create_label_batch');
		$this->load->view('footer');
	}

	public function receiving_disubcount(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/receiving_disubcount');
		$this->load->view('footer');
	}

	public function delivery_note(){
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('page/making_label/delivery_note');
		$this->load->view('footer');
	}

	public function print_sj(){
		$this->load->helper('url');
		$this->load->view('page/making_label/print_sj');
	}

	public function print_label(){
		$this->load->helper('url');
		$this->load->view('page/making_label/print_label');
	}

}
