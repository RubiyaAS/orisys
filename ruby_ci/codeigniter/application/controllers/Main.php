<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
public function index()
	{
		$this->load->view('Myself');
    }
public function form()
	{
		$this->load->view('Registerr');
	}
	
public function regist()
	{
			$this->load->library('form_validation');
			$this->load->model('Mainmodel');
			$this->form_validation->set_rules("name","name",'required');
			$this->form_validation->set_rules("address","address",'required');
			$this->form_validation->set_rules("gender","gender",'required');
			$this->form_validation->set_rules("age","age",'required');
			$this->form_validation->set_rules("email","email",'required');
			$this->form_validation->set_rules("password","password",'required');
if($this->form_validation->run())
		{
			$pass=$this->input->post("password");
			$encpass=$this->Mainmodel->encpass($pass);
			$a=array("name"=>$this->input->post("name"),
						"address"=>$this->input->post("address"),
						"gender"=>$this->input->post("gender"),
						"age"=>$this->input->post("age"),
						"email"=>$this->input->post("email"),
						"password"=>$encpass);
			$this->Mainmodel->regist($a);
			redirect(base_url().'Main/registerr');
			

		
		
		}
	}
public function tab()
	{
				$this->load->model('Mainmodel');
				$data['n']=$this->Mainmodel->view1();
				$this->load->view('table',$data);
	}
public function updatedetails()
{
	$a=array('name'=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"email"=>$this->input->post("email"));
				$id=$this->uri->Segment(3);
				$this->load->model('Mainmodel');
				$data['user_data']=$this->Mainmodel->singledetails($id);
				$this->Mainmodel->Singledata();
				$this->load->view('table',$data);
				if($this->input->post("update"))
				{
					$this->Mainmodel->updatedetails($a,$this->input->post("id"));
					redirect('Main/tab','refresh');
				}
				
}
public function deletedetails()
{
			$this->load->model('Mainmodel');
			$id=$this->uri->segment(3);
			$this->Mainmodel->deletedetails($id);
			redirect('Main/tab','refresh');
}	


	public function aprovedetails()
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->aprovedetails($id);
	redirect('Main/tab','refresh');			
				}
				

public function rejecteddetails()
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->rejecteddetails($id);
	redirect('Main/tab','refresh');			
				}
				
				public function log()
				{
					$this->load->view('login');
				}
				public function login()
				{
					$this->load->library('form_validation');
					$this->form_validation->set_rules("email","email",'required');
					$this->form_validation->set_rules("password","password",'required');
					if($this->form_validation->run())
					{
						$this->load->model('Mainmodel');
						$email=$this->input->post("email");
						$password=$this->input->post("password");
						$rslt=$this->Mainmodel->selectpass($email,$password);
						if($rslt)
						{
							$id=$this->Mainmodel->getuserid($email);
							$user=$this->Mainmodel->getuser($id);
							$this->load->Library(array('session'));
							$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status));
						if($_SESSION['status']=='1')
					{
						redirect(base_url().'Main/tab');
					}
					else
					{								
					echo "Waitting for approval";
				}
			}
			else{
				echo "invalid user";
			}
		}
		else{
			redirect(base_url().'Main/log');
		}

	}

	public function pro()
	{
		$this->load->view('registproject');
	}
	public function proinsert()
		{
				$this->load->library('form_validation');
				$this->form_validation->set_rules("name","name",'required');
				$this->form_validation->set_rules("lname","lname",'required');
				$this->form_validation->set_rules("address","address",'required');
				$this->form_validation->set_rules("district","district",'required');
				$this->form_validation->set_rules("pincode","pincode",'required');
				$this->form_validation->set_rules("phonenumber","phonenumber",'required');
				$this->form_validation->set_rules("dob","dob",'required');
				$this->form_validation->set_rules("gender","gender",'required');
				$this->form_validation->set_rules("education","education",'required');	
				$this->form_validation->set_rules("email","email",'required');
				$this->form_validation->set_rules("password","password",'required');		
	        if($this->form_validation->run())
			{
				$this->load->model('Mainmodel');
				$pass=$this->input->post("password");
			$encpass2=$this->Mainmodel->encpass2($pass);
				$a=array("name"=>$this->input->post("name"),
							"lname"=>$this->input->post("lname"),
							"address"=>$this->input->post("address"),
							"district"=>$this->input->post("district"),
							"pincode"=>$this->input->post("pincode"),
							"phonenumber"=>$this->input->post("phonenumber"),
							"dob"=>$this->input->post("dob"),
							"gender"=>$this->input->post("gender"),
							"education"=>$this->input->post("education"));
				$b=array("email"=>$this->input->post("email"),
				"password"=>$encpass2);
							
							
				$this->Mainmodel->proinsert($a,$b);
				redirect(base_url().'Main/pro');
				
	
			
			
			}	
	}
	
	}



