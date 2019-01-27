<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminmod extends CI_Model {
	public function upload($a)
	{
		$sql=$this->db->insert("slider_images",$a);
		return $sql;
	}	
	public function get_slider_image()
	{
		$sql=$this->db->get("slider_images");
		return $sql->result();
	}
	public function login_check($arr)
	{
		$sql=$this->db->query("select * from `admin` where `username`='$arr[username]' and `password`='$arr[password]'");
		return $sql->num_rows();
	}
	public function upload_portfolio($a)
	{
		$sql=$this->db->insert("portfolio_images",$a);
		return $sql;
	}
	public function get_portfolio_image()
	{
		$sql=$this->db->get("portfolio_images");
		return $sql->result();
	}
	public function get_admin_data()
	{
		$sql = $this->db->where('id',1)->get("admin");
		return $sql->row();

	}
	public function upload_query($arr)
	{
		$sql = $this->db->insert("queries_table",$arr);
		return $sql;
	}
	public function get_queries()
	{
		$sql = $this->db->get("queries_table");
		return $sql->result();
	}
	public function update_admin($arr)
	{
		$sql = $this->db->where('id',$arr->id)->update("admin");
		return $sql;
	}
	public function get_unread_query()
	{
		$sql = $this->db->where('read_status','0')->get("queries_table");
		return $sql->num_rows();
	}
	public function get_total_queries()
	{
		$sql = $this->db->get("queries_table");
		return $sql->num_rows();

	}
	public function get_total_slider()
	{
		$sql = $this->db->get("slider_images");
		return $sql->num_rows();

	}
	public function get_total_portfolio()
	{
		$sql = $this->db->get("portfolio_images");
		return $sql->num_rows();

	}
	public function fetch_queries($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("queries_table");

        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   public function upload_feedback($arr)
   {
   		$sql = $this->db->insert("feedback",$arr);
		return $sql;
   }

}