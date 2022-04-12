<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Database extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->library('image_lib');
        $this->load->library('session');
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');

	  }
  
      public function login()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $queryLogin = $this->db->query("SELECT * FROM users where username= '{$username}' and password='{$password}'");

           if ($queryLogin->num_rows() > 0) {

                $row = $queryLogin->row();
                $userdata = array('userID' => $row->userID,'fname' => $row->fname,'mname' => $row->mname,'lname' => $row->lname, 'usertype' => $row->usertype, 'logged_in' => TRUE);
                $this->session->set_userdata($userdata);

               if(($row->usertype) == "ADMIN")
                {
                    redirect("views/admin_dashboard");
                }
                else if(($row->usertype) == "STUDENT")
                {
                    redirect("views/student_dashboard");
                }
                else if(($row->usertype) == "TEACHER")
                {
                    redirect("views/teacher_dashboard");
                }
            }else{
                
                    $_SESSION['wrongLogIn'] = "Invalid Username Or Password!!";
                    redirect('views/index');
                
            }

        
        
  
  }
  
  /* End of file Controllername.php */
  


  }
?>