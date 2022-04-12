<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Views extends CI_Controller {

    public function __construct() 
    {

        parent::__construct();
        $this->load->library('table');
        $this->load->library('image_lib');
        $this->load->library('session');
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        

	  }

      public function index()
      {
          $this->load->view('login');
      }
      public function admin_dashboard()
      {
        $this->load->view('admin/dashboard');
        
      }
      public function student_dashboard()
      {
        $this->load->view('student/dashboard');
        
      }
      public function teacher()
      {
        $this->load->view('teacher/dashboard');
        
      }
  
  }
  
  /* End of file Controllername.php */
  



?>