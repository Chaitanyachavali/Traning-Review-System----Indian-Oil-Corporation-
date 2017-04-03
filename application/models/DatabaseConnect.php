<?php
 class DatabaseConnect extends CI_Model
{

   public function __construct()
   {
          parent::__construct();
   }

   //checking if user Exists
   public function checkUserExit($username, $password)
   {
   	$u = "select count(*) as count from login where username = '$username' and password = '$password'";
     $query = $this->db->query($u);
     return $query->result()[0]->count;
   }

   //Getting User details
   public function getUserDetails($username)
   {
   	$u = "select * from login where username = '$username'";
   	$query = $this->db->query($u);
   	return $query->result()[0];
   }

   //Add Item
   public function NewSession($date, $name, $title, $username)
    {
          $data = array(
                'date' => $date,
                'title' => $title,
                'faculty' => $name,
                'username' => $username
                );
                $this->db->insert('session_master', $data);
    }

   public function findSession($date, $name, $title, $username)
   {
    $u = "select * from session_master where date = '$date' and faculty = '$name' and title = '$title' and username = '$username'";
    $query = $this->db->query($u);
    return $query->result()[0];
   }

   public function addToSession($q1, $q2, $q3, $q4, $id, $username, $employeename)
    {
          $data = array(
                'employee_name' => $employeename,
                'Q1' => $q1,
                'Q2' => $q2,
                'Q3' => $q3,
                'Q4' => $q4,
                'id' => $id,
                'username' => $username
                );
                $this->db->insert('session_slave', $data);
    }

    public function getNumber($id, $q, $val)
   {
    $u = "select count(*) as count from session_slave where id = $id and $q = $val";
    $query = $this->db->query($u);
    return $query->result()[0];
   }

   public function NewProgramme($fdate, $tdate, $title, $place, $username)
    {
          $data = array(
                'from_date' => $fdate,
                'to_date' => $tdate,
                'program_title' => $title,
                'place' => $place,
                'username' => $username
                );
                $this->db->insert('program_master', $data);
    }

    public function findProgramme($fdate, $tdate, $title, $place, $username)
   {
    $u = "select * from program_master where from_date = '$fdate' and to_date = '$tdate' and program_title = '$title' and username = '$username' and place = '$place'";
    $query = $this->db->query($u);
    return $query->result()[0];
   }

   public function addToProgramme($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $id, $username, $employeename)
    {
          $data = array(
                'employee_name' => $employeename,
                'Q1' => $q1,
                'Q2' => $q2,
                'Q3' => $q3,
                'Q4' => $q4,
                'id' => $id,
                'Q5' => $q5,
                'Q6' => $q6,
                'Q7' => $q7,
                'Q8' => $q8,
                'id' => $id,
                'username' => $username
                );
                $this->db->insert('program_slave', $data);
    }

    public function getNumberP($id, $q, $val)
   {
    $u = "select count(*) as count from program_slave where id = $id and $q = $val";
    $query = $this->db->query($u);
    return $query->result()[0];
   }
}



?>
