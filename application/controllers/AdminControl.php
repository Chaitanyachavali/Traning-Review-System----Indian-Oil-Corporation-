<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminControl extends CI_Controller {

	public function __construct()
	{
				 parent::__construct();
				 if(!isset($_SESSION)) 
				    { 
				        session_start(); 
				    } 
				 date_default_timezone_set("Asia/Kolkata");
			
	}

	//Login Page
	public function index()
	{
		$this->load->view('login');
	}

	//Login Check
	public function loginForm()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$this->load->model("DatabaseConnect");
		$check = $this->DatabaseConnect->checkUserExit($username, $password);
		if($check == 1)
		{
			$datavals = $this->DatabaseConnect->getUserDetails($username);
			$_SESSION['username'] = $datavals->username;
			$_SESSION['name'] = $datavals->name;
			$data["row"] = $datavals;
			$this->load->view('header', $data);
			$this->load->view('main', $data);
			//redirect("AdminControl/pagename");
		}
		else
		{
			session_unset();
			session_destroy();
			$data["wrong"] = true;
			$this->load->view('login',$data);
			//redirect(base_url());
		}
	}

	//Main Page
	public function main()
	{
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		$this->load->view('header', $data);
		$this->load->view('main', $data);
	}

	//New Session
	public function newSession()
	{
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		$this->load->view('header', $data);
		$this->load->view('newSession', $data);
	}

	public function createNewSession()
	{
		$this->load->model("DatabaseConnect");
		$date = $this->input->post("date");
		$name = $this->input->post("name");
		$title = $this->input->post("title");
		$username = $_SESSION['username'];
		$this->DatabaseConnect->NewSession($date, $name, $title, $username);
		$row = $this->DatabaseConnect->findSession($date, $name, $title, $username);
		$_SESSION['date'] = $date;
		$_SESSION['name'] = $name;
		$_SESSION['title'] = $title;
		$_SESSION['sessid'] = $row->id;
		redirect('AdminControl/extendSession');
	}

	public function extendSession()
	{
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		$this->load->view('header', $data);
		$this->load->view('extendSession', $data);
	}

	public function finishSession()
	{
		$id = $_SESSION['sessid'];
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		
		$qes = 'Q1';
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 4);
		$q = $row1->count;
		$data["q14"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 3);
		$q = $row1->count;
		$data["q13"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 2);
		$q = $row1->count;
		$data["q12"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 1);
		$q = $row1->count;
		$data["q11"] = $q;

		$qes = 'Q2';
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 4);
		$q = $row1->count;
		$data["q24"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 3);
		$q = $row1->count;
		$data["q23"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 2);
		$q = $row1->count;
		$data["q22"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 1);
		$q = $row1->count;
		$data["q21"] = $q;

		$qes = 'Q3';
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 4);
		$q = $row1->count;
		$data["q34"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 3);
		$q = $row1->count;
		$data["q33"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 2);
		$q = $row1->count;
		$data["q32"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 1);
		$q = $row1->count;
		$data["q31"] = $q;

		$qes = 'Q4';
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 4);
		$q = $row1->count;
		$data["q44"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 3);
		$q = $row1->count;
		$data["q43"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 2);
		$q = $row1->count;
		$data["q42"] = $q;
		$row1 = $this->DatabaseConnect->getNumber($id, $qes, 1);
		$q = $row1->count;
		$data["q41"] = $q;

		$_SESSION['date'] = 'NULL';
		$_SESSION['name'] = 'NULL';
		$_SESSION['title'] = 'NULL';
		$_SESSION['sessid'] = 'NULL';

		$this->load->view('header', $data);
		$this->load->view('endSession', $data);
	}

	public function addToSession()
	{
		$id = $_SESSION['sessid'];
		$username = $_SESSION['username'];
		$employeename = $this->input->post("employeename");
		$q1 = $this->input->post("q1");
		$q2 = $this->input->post("q2");
		$q3 = $this->input->post("q3");
		$q4 = $this->input->post("q4");
		$this->load->model("DatabaseConnect");
		$this->DatabaseConnect->addToSession($q1, $q2, $q3, $q4, $id, $username, $employeename);
		redirect('AdminControl/extendSession');
	}

	public function newProgramme()
	{
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		$this->load->view('header', $data);
		$this->load->view('newProgramme', $data);
	}

	public function createNewProgramme()
	{
		$this->load->model("DatabaseConnect");
		$fdate = $this->input->post("fdate");
		$tdate = $this->input->post("tdate");
		$title = $this->input->post("title");
		$place = $this->input->post("place");
		$username = $_SESSION['username'];
		$this->DatabaseConnect->NewProgramme($fdate, $tdate, $title, $place, $username);
		$row = $this->DatabaseConnect->findProgramme($fdate, $tdate, $title, $place, $username);
		$_SESSION['fdate'] = $fdate;
		$_SESSION['tdate'] = $tdate;
		$_SESSION['place'] = $place;
		$_SESSION['program_title'] = $title;
		$_SESSION['progid'] = $row->id;
		redirect('AdminControl/extendProgramme');
	}

	public function extendProgramme()
	{
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		$this->load->view('header', $data);
		$this->load->view('extendProgramme', $data);
	}

	public function addToProgramme()
	{
		$id = $_SESSION['progid'];
		$username = $_SESSION['username'];
		$employeename = $this->input->post("employeename");
		$q1 = $this->input->post("q1");
		$q2 = $this->input->post("q2");
		$q3 = $this->input->post("q3");
		$q4 = $this->input->post("q4");
		$q5 = $this->input->post("q5");
		$q6 = $this->input->post("q6");
		$q7 = $this->input->post("q7");
		$q8 = $this->input->post("q8");
		$this->load->model("DatabaseConnect");
		$this->DatabaseConnect->addToProgramme($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $id, $username, $employeename);
		redirect('AdminControl/extendProgramme');
	}

	public function finishProgramme()
	{
		$id = $_SESSION['progid'];
		$this->load->model("DatabaseConnect");
		$username = $_SESSION['username'];
		$datavals = $this->DatabaseConnect->getUserDetails($username);
		$data["row"] = $datavals;
		
		$qes = 'Q1';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q14"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q13"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q12"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q11"] = $q;

		$qes = 'Q2';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q24"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q23"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q22"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q21"] = $q;

		$qes = 'Q3';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q34"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q33"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q32"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q31"] = $q;

		$qes = 'Q4';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q44"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q43"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q42"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q41"] = $q;

		$qes = 'Q5';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q54"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q53"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q52"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q51"] = $q;

		$qes = 'Q6';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q64"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q63"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q62"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q61"] = $q;

		$qes = 'Q7';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q74"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q73"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q72"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q71"] = $q;

		$qes = 'Q8';
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 4);
		$q = $row1->count;
		$data["q84"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 3);
		$q = $row1->count;
		$data["q83"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 2);
		$q = $row1->count;
		$data["q82"] = $q;
		$row1 = $this->DatabaseConnect->getNumberP($id, $qes, 1);
		$q = $row1->count;
		$data["q81"] = $q;

		$_SESSION['fdate'] = 'NULL';
		$_SESSION['tdate'] = 'NULL';
		$_SESSION['place'] = 'NULL';
		$_SESSION['program_title'] = 'NULL';
		$_SESSION['progid'] = 'NULL';

		$this->load->view('header', $data);
		$this->load->view('endProgramme', $data);
	}

	// signing out the user
	public function logout()
	{
		session_unset();
		session_destroy();
		redirect(base_url());
	}
}
