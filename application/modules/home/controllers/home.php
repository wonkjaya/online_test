<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_controller  {

	function __construct (){
		parent::__construct();
		$this->load->helper(array('oltest','url','html'));
		$this->load->model('m_oltest');
	}
 
	function set_username($user){
		$this->load->library('session');
		$this->session->set_userdata('username',$user);
	}
	
	function set_session($name,$val){
		$this->load->library('session');
		$this->session->set_userdata($name,$val);
	}
	
	function get_session($name){
		$this->load->library('session');
		return $this->session->userdata($name);
	}
	
	function get_username(){
		$this->load->library('session');
		return $this->session->userdata('username');
	}
	
	function post($str=''){
		return $this->input->post($str);
	}

# INDEX ----------------------------------------------------------------

	function index(){
		if($this->get_username() != ""){
			redirect('home/default_page');
		}
		if($_POST){
			$user=$this->post('user');
			$email=$this->post('email');
			if ($user !== "" and $email !== ""){
			 $this->m_oltest->insert_user_tes($user,$email);
			 $this->set_username($user);
			 redirect('home/default_page');
			}
		}
		$this->load->view('home');
	}
	

	function default_page(){
		$data['c']=$this;
		$this->load->view('header');
		$this->load->view('slide',$data);
		$this->load->view('footer');
	}

	function portofolio(){
		$this->load->view('header');
		$this->load->view('body_portofolio');
		$this->load->view('footer');
	}

	function blog(){
		$this->load->view('header');
		$this->load->view('blog_body');
		$this->load->view('footer');
	}

	function about(){
		$this->load->view('header');
		$this->load->view('about_body');
		$this->load->view('footer');
	}

	function contact(){
		$this->load->view('header');
		$this->load->view('contak_body');
		$this->load->view('footer');
	}

	function online_test(){
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('select_test');
		$this->load->view('footer');
	}

	function start_test(){
		$this->load->helper('form');
		 $subject=$this->get_session('subject');
		 $class=$this->get_session('class');
		 $data['c']=$this;
		 if ($subject != "" and $class != ""){
		 	$data['datas']=$this->m_oltest->select_available_exam($subject,$class);
			$this->load->view('header');
			$this->load->view('start_test',$data);
			$this->load->view('footer');		 
		 }
	}
	
# OPERATIONS ======================================================
	function check_request_exam(){
		if($_POST){
			$subject=$this->post('subject');
			$class=$this->post('class');
			if ($subject !== "" and $class !== ""){
				$q=$this->m_oltest->select_available_exam($subject,$class);
				if ($q >= 1){
					$this->set_session('subject',$subject);
					$this->set_session('class',$class);
					redirect(get_site_url('start_test'));
				}			
			}
		}
	}
	


}





?>
