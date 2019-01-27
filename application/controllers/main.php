<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function index()
	{
		$this->load->view('index.php');
	}

	//feedback manager
	public function feedback_submit()
	{
		$arr = array(
						"name"=>$this->input->post('name'),
						"email"=>$this->input->post('email'),
						"feedback_text"=>$this->input->post('feedback_text')
					);
		$res = $this->adminmod->upload_feedback($arr);
		if($res==1)
		{
			$this->session->set_flashdata('feedback_msg',"success");
		}
		else
		{
			$this->session->set_flashdata('feedback_msg',"error");
		}
		redirect("main/");
	}
	/*query manager*/
	public function send_query()
	{
		$arr = array("name"=>$this->input->post('name'),
					 "email"=>$this->input->post('email'),
					 "contact"=>$this->input->post('contact'),
					 "query_text"=>$this->input->post('query'));
		$res = $this->adminmod->upload_query($arr);
		if($res==1)
		{
			$this->session->set_flashdata('msg',"success");
		}
		else
		{
			$this->session->set_flashdata('msg',"error");
		}
		redirect("main/");
	}

}
