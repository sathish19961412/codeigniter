<?php
#[AllowDynamicProperties]
class Crud extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('crud_model');
		$this->load->helper('url');
	}

	public function savedata(){
		$this->load->view('insert');
		if($this->input->post('save')){
			 $data['first_name']=$this->input->post('first_name');
			 $data['last_name']=$this->input->post('last_name');
			 $data['email']=$this->input->post('email');
			 $response=$this->crud_model->saverecords($data);
			 if($response==true)
			{
				echo "Inserted Successfully";
			}
			else{
				echo "Inserted Failed";
			}
		}
	}
}

?>
