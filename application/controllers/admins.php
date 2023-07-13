<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	var $data;
	var $model;
	public function __construct()
	 {
		parent::__construct();
        $this->data = new stdClass();
		$this->data->loginParagraf = 'Enter your email address and password to access admin panel.';
		$this->data->loginUserLabel = 'Kullanıcı Adı';
		$this->data->loginPasswordLabel = 'Şifre';
		$this->data->loginLabel ='Giriş Yap';
		$this->data->powers = [
			'Administrator/index',
			'Administrator/Exit',
			'Administrator/login'];
		$this->load->model('vt');
		$this->model = $this->vt;
		$var = $this->model->oneData('labels',1);
		$this->data->labels = [];
		$var = explode(',',$var->labels);
		foreach($var as $row){
			$elements = explode(':',$row);
			if(isset($elements[0]) && isset($elements[1])){$this->data->labels[$elements[0]] = $elements[1];}
		}
	 }

	 public function Exit()
	 {
		 $this->session->sess_destroy();
		 redirect('index.php/Administrator');
	 }

	public function index()
	{
		if($this->session->userdata('control'))
		{
			redirect('index.php/AdminPanel/adminpanel');	
		}
		$this->data->pagesFile = 'general';
		$this->data->mainContant = 'login';
		$this->load->view('Admin/template/core',$this->data);
	}

	public function login()
	{
		$this->form_validation->set_rules('username','username','required|trim');
		$this->form_validation->set_rules('password','password','required|trim');
		$this->form_validation->set_message('required','<div class="col-12">
															<div class="alert alert-danger alert-dismissible">
																<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																<b> %s </b> Alanı boş geçilemez.
															</div>
														</div>'
		);
													
		if($this->form_validation->run())
		{
           $uname = $this->input->post('username');
		   $password= $this->input->post('password');
		   $this->load->model('vt');
		   $conclusion = $this->vt->logincontrol($uname,md5($password));
		   if($conclusion->Active){
				if($conclusion)
				{
					$this->session->set_userdata('control',true);
					$this->session->set_userdata('info',$conclusion);
					redirect('index.php/AdminPanel/adminpanel');
				}
				else
				{
					$this->session->set_flashdata('hata','	<div class="col-12">
																<div class="alert alert-danger alert-dismissible">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	Kullanıcı adınız veya şifreniz hatalı
																</div>
															</div>'
					);
					redirect('index.php/Administrator');
				}
		   }
		   else{
				$this->session->set_flashdata('hata','	<div class="col-12">
																	<div class="alert alert-danger alert-dismissible">
																		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																		Hesabınız Askıya alınmıştır.
																	</div>
																</div>'
						);
						redirect('index.php/Administrator');
		   }
		}
		else
		{													  
			$this->data->pagesFile = 'general';
			$this->data->mainContant = 'login';
			$this->load->view('Admin/template/core',$this->data);
		}
	}
}