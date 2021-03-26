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
				"usertype"=>'1',
				"password"=>$encpass2);
							
							
				$this->Mainmodel->proinsert($a,$b);
				//redirect(base_url().'Main/viewpro');
				redirect(base_url().'Main/pro');
			}	
		}
			public function viewpro()
	{
				$this->load->model('Mainmodel');
				$data['n']=$this->Mainmodel->view();
				$this->load->view('viewreg',$data);
				
	}
	public function aprovedetailss()
{
	$this->load->model('Mainmodel');
	$loginid=$this->uri->segment(3);
	$this->Mainmodel->aprovedetailss($loginid);
	redirect('Main/viewpro','refresh');			
}
	
	public function rejecteddetailss()
{
	$this->load->model('Mainmodel');
	$loginid=$this->uri->segment(3);
	$this->Mainmodel->rejecteddetailss($loginid);
	redirect('Main/viewpro','refresh');			
}
public function teach()
	{
		$this->load->view('teacher');
	}
	public function teachinsert()
		{
				$this->load->library('form_validation');
				$this->form_validation->set_rules("name","name",'required');
				$this->form_validation->set_rules("address","address",'required');
				$this->form_validation->set_rules("district","district",'required');
				$this->form_validation->set_rules("pincode","pincode",'required');
				$this->form_validation->set_rules("phonenumber","phonenumber",'required');
				$this->form_validation->set_rules("gender","gender",'required');
				$this->form_validation->set_rules("subject","subject",'required');	
				$this->form_validation->set_rules("email","email",'required');
				$this->form_validation->set_rules("password","password",'required');
				
				if($this->form_validation->run())
				{
					$this->load->model('Mainmodel');
					$pass=$this->input->post("password");
				$encpass3=$this->Mainmodel->encpass3($pass);
					$c=array("name"=>$this->input->post("name"),
								"address"=>$this->input->post("address"),
								"district"=>$this->input->post("district"),
								"pincode"=>$this->input->post("pincode"),
								"phonenumber"=>$this->input->post("phonenumber"),
								"gender"=>$this->input->post("gender"),
								"subject"=>$this->input->post("subject"));
					$d=array("email"=>$this->input->post("email"),
					"usertype"=>'0',"status"=>'1',
					"password"=>$encpass3);
					$this->Mainmodel->teachinsert($c,$d);
					redirect('Main/logview','refresh');
		
			}	
		}
	
		public function logview()
		{
			$this->load->view('teachlogin');
		}
		public function logteach()
				{
					$this->load->library('form_validation');
					$this->form_validation->set_rules("email","email",'required');
					$this->form_validation->set_rules("password","password",'required');
					if($this->form_validation->run())
					{
						$this->load->model('Mainmodel');
						$email=$this->input->post("email");
						$password=$this->input->post("password");
							$rslt=$this->Mainmodel->newpasslog($email,$password);
						if($rslt)
						{
							$id=$this->Mainmodel->getuseridd($email);
							$user=$this->Mainmodel->getuserr($id);
							$this->load->library(array('session'));
							$this->session->set_userdata(array('id'=>(int)$user->id,
							'status'=>$user->status,
							'usertype'=>$user->usertype));
						if($_SESSION['status']=='1' && $_SESSION['usertype']=='0')
						{
							redirect('Main/teacherpro','refresh');
						}
						else if($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
						{
							redirect('Main/studentpro','refresh');
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
				redirect(base_url().'Main/logview');
			}
	
		}
		public function upd()
		{
			$this->load->view('updation');
		}
		public function views()
		{
		$this->load->model('Mainmodel');
		$id=$this->session->id;
		
		$data['userdata']=$this->Mainmodel->vieww($id);
		$this->load->view("updation",$data);
	}
	public function upddetails()
{
	$a=array('name'=>$this->input->post("name"),
				'lname'=>$this->input->post("lname"),
				"address"=>$this->input->post("address"),
				'district'=>$this->input->post("district"),
				'pincode'=>$this->input->post("pincode"),
				'phonenumber'=>$this->input->post("phonenumber"),
				"gender"=>$this->input->post("gender"),
				"dob"=>$this->input->post("dob"),
				'education'=>$this->input->post("education"));
				$b=array("email"=>$this->input->post("email"));
				
				$this->load->model('Mainmodel');
				$id=$this->session->id;
				if($this->input->post("update"))
				{
					$this->Mainmodel->upview($a,$b,$id);

					redirect(base_url().'Main/views','refresh');
				}
				
}

public function noti()
		{
			$this->load->view('notification');
		}
		public function notiteach()
	{
			$this->load->library('form_validation');
			$this->load->model('Mainmodel');
			$this->form_validation->set_rules("notification","notification",'required');
			if($this->form_validation->run())
			{
				$id=$this->session->id;
			$a=array("notification"=>$this->input->post("notification"),
						"currentdate"=>date('y-m-d'),"loginid"=>$id);
			
						$this->Mainmodel->notitech($a);
						redirect(base_url().'Main/cuurent','refresh');
			}
		}
		public function viewnoti()
		{
		
		$this->load->model('Mainmodel');
 	$data['n']=$this->Mainmodel->notifun();
		$this->load->view("notiview",$data);
	}
	public function cuurent()
		{
		$id=$this->session->id;
		$this->load->model('Mainmodel');
 		$data['n']=$this->Mainmodel->currentnoti($id);
		$this->load->view("noticurrent",$data);
	}
	public function delete()
{
			$this->load->model('Mainmodel');
			$id=$this->uri->segment(3);
			$this->Mainmodel->deletee($id);
			redirect('Main/cuurent','refresh');
}	
public function homepro()
		{
			$this->load->view('home');
		}
		public function studentpro()
		{
			$this->load->view('studenthome');
		}
		public function teacherpro()
		{
			$this->load->view('teacherhome');
		}




		//LOGOGT
		public function logog()
		{
			$this->load->view('logogt');
		}
		
	}
	






