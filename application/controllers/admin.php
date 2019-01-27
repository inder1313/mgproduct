<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	 public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->library("pagination");
    }

	public function index()
	{
		$this->load->view('admin/index');
	}
	public function imgset()
	{
		$this->load->view('admin/imagesetting');
	}
	public function log()
	{
		$this->load->view("admin/login");
	}
	/*public function query_manager()
	{
		$this->load->view("admin/query_manager");
	}*/
	public function frontend()
	{
		session_destroy();
		redirect('main');
	}
	public function backend()
	{
		session_destroy();
		redirect('admin');

	}
	/*frontend slider settings*/
	public function addSlider()
	{
		$file=$_FILES['image']['name'];
		$file=rand(111111,999999)."_".time()."_".$file;
		move_uploaded_file($_FILES['image']['tmp_name'],"slider/".$file);
		$arr = array("image_name" => $file);
		$this->adminmod->upload($arr);
		redirect("admin/imgset",'refresh');
	}
	public function delete_slider_image($id)
	{
		$this->db->where('id',$id)->delete('slider_images');
		redirect('admin/imgset','refresh');
	}
	public function no_of_slide()
	{
		$sql = $this->db->get("slider_images");
		return 	$sql->num_rows();
	}
	/*frontend slider settings*/

	/*admin login*/
	public function login()
	{
		$arr=array('username'=>$this->input->post('username'),'password'=>sha1($this->input->post('password')));
		$ch=$this->adminmod->login_check($arr);
		if($ch==1)
		{
			$this->session->set_userdata('log',"abcd");
			$this->session->set_userdata('username',$arr['usrname']);
			redirect("admin/");
		}
		else
		{
			$this->session->set_flashdata('error',"Wrong Credentials");
			redirect("admin/log");
		}
	}
	public function logout()
	{
		session_destroy();
		redirect("admin/");
	}

	/*admin login*/

	/*portfolio image settings*/
	public function insert_portfolio_image()
	{
		$file=$_FILES['portfolio_image']['name'];
		$file=rand(111111,999999)."_".time()."_".$file;
		move_uploaded_file($_FILES['portfolio_image']['tmp_name'],"portfolio/".$file);
		$arr = array("description" => $this->input->post('description'),
					 "image_name" => $file);
		$this->adminmod->upload_portfolio($arr);
		redirect("admin/imgset",'refresh');
	}
	public function delete_portfolio_image($id)
	{
		$this->db->where('id',$id)->delete("portfolio_images");
		redirect('admin/imgset','refresh');
	}
	/*portfolio image settings*/

	/*admin settings*/


	public function account()
	{
		$data['r']=$this->adminmod->get_admin_data();
		$this->load->view("admin/account",$data);
	}
	
	/*admin settings*/

	/*query manager*/

	
	public function update_read($rec)
	{
		$arr = array('read_status'=>'1');
		$this->db->where('id',$rec)->update("queries_table",$arr);
		redirect('admin/query_manager','refresh');
	}
	public function delete_query($id)
	{
		$ch=$this->db->where('id',$id)->delete("queries_table");
		if($ch==1)
		{
			$this->session->set_flashdata('querydelete', "success");
			redirect('admin/query_manager','refresh');
		}
		else
		{
			$this->session->set_flashdata('querydelete', "error");
		}
	}
	public function query_manager() {
        $config = array();
        $config["base_url"] = base_url() . "admin/query_manager";
        $config["total_rows"] = $this->adminmod->get_total_queries();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["next_link"] = '&raquo;';
        $config["prev_link"] = '&laquo;';
        $config['cur_tag_open'] = "<a class='active'>";
        $config['cur_tag_close'] = "</a>";
        //$config['next_tag_open'] = "<a>";
        //$config['next_tag_close'] = '</a>';
       // $config['prev_tag_open'] = "<a>";
       // $config['prev_tag_close'] = '</a>';
       // $config['num_tag_open'] = "<a>";
       // $config['num_tag_close'] = '</a>';


        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->adminmod->fetch_queries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("admin/query_manager", $data);
    }
	/*query manager*/

	/*admin setting*/

	public function admin_setting($id)
	{
		$arr = array('name'=>$this->input->post('name'),
					 'email'=>$this->input->post('email'),
					 'username'=>$this->input->post('username'),
					 'password'=>sha1($this->input->post('password')));
		$ch = $this->db->where('id',$id)->update("admin",$arr);
		if($ch==1)
		{
			$this->session->set_flashdata('adminupdate',"success");
			redirect('admin/log','refresh');
		}
		else{
			$this->session->set_flashdata('adminupdate', "error");
			redirect('admin/account','refresh');
		}
	}

	/*admin setting*/

	/*dashboard*/



	/*dashboard*/
}