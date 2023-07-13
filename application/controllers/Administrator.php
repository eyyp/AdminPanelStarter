<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$data = new stdClass();
		$data->pagesFile = 'dashboard';
		$data->mainContant = 'index'; 
		$this->load->view('admin/template/template',$data);
	}

	public function inbox(){
		$data = new stdClass();
		$data->pagesFile = 'email';
		$data->mainContant = 'inbox';
		$this->load->view('admin/template/template',$data);
	}

	public function emailRead(){
		$data = new stdClass();
		$data->pagesFile = 'email';
		$data->mainContant = 'emailRead';
		$this->load->view('admin/template/template',$data);
	}

	public function emailCompose(){
		$data = new stdClass();
		$data->pagesFile = 'email';
		$data->mainContant = 'emailCompose';
		$this->load->view('admin/template/template',$data);
	}

	public function calendar(){
		$data = new stdClass();
		$data->pagesFile = 'calendar';
		$data->mainContant = 'calendar';
		$this->load->view('admin/template/template',$data);
	}

	public function pricing(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'pricing';
		$this->load->view('admin/template/template',$data);
	}

	public function invoice() {
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'invoice';
		$this->load->view('admin/template/template',$data);
	}

	public function timeline(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'timeLine';
		$this->load->view('admin/template/template',$data);
	}

	public function faqs(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'faqs';
		$this->load->view('admin/template/template',$data);
	}

	public function maintenance(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'maintenance';
		$this->load->view('admin/template/template',$data);
	}

	public function commingSoon(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'commingSoon';
		$this->load->view('admin/template/template',$data);
	}

	public function login(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'login';
		$this->load->view('admin/template/core',$data);
	}

	public function register(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'register';
		$this->load->view('admin/template/core',$data);
	}

	public function recoveryPassword(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'recoveryPassword';
		$this->load->view('admin/template/core',$data);
	}

	public function lockScreen(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = 'lockScreen';
		$this->load->view('admin/template/core',$data);
	}

	public function error404(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = '404';
		$this->load->view('admin/template/core',$data);
	}

	public function error500(){
		$data = new stdClass();
		$data->pagesFile = 'general';
		$data->mainContant = '500';
		$this->load->view('admin/template/core',$data);
	}

	public function formElements(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formElements';
		$this->load->view('admin/template/template',$data);
	}

	public function formValidator(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formValidator';
		$this->load->view('admin/template/template',$data);
	}

	public function formAdvenced(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formAdvenced';
		$this->load->view('admin/template/template',$data);
	}

	public function formEditors(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formEditors';
		$this->load->view('admin/template/template',$data);
	}

	public function formFileUpload(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formFileUpload';
		$this->load->view('admin/template/template',$data);
	}

	public function uiAlerts(){
		$data = new stdClass();
		$data->pagesFile = 'uiElements';
		$data->mainContant = 'uiAlerts';
		$this->load->view('admin/template/template',$data);
	}

	public function formMask(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formMask';
		$this->load->view('admin/template/template',$data);
	}

	public function formXEditTable(){
		$data = new stdClass();
		$data->pagesFile = 'form';
		$data->mainContant = 'formXEditTable';
		$this->load->view('admin/template/template',$data);
	} 
}
