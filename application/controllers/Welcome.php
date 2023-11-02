<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('logon_model'); //Load the Model here   

	}
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $result['schools'] = $this->logon_model->get_data();
		// $data['data'] = $this->logon_model->get_scholl_data_ByID(1);
		// $this->session->set_userdata('schoolId', '1');
		
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}

	public function login() {
    
        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');

        // if ($this->form_validation->run() === false) {
        //     $this->load->view('login');
        // } else {
		
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);//$this->input->post('password');

            $user = $this->logon_model->login($username, $password);

            if ($user) {
                $user_data = array(
                    'user_id' => $user['id'],
                    'username' => $user['username'],
					'user_role' => $user['role_id'],
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                $this->home();
            } else {
                $this->session->set_flashdata('login_failed', 'Login failed. Please check your username and password.');
				$this->index();
            }
        //}
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->index();
    }


	public function home()
	{
		$result['user_lists'] = $this->logon_model->get_alldata('users', null);
		// $result['schools'] = $this->logon_model->get_data();
		// $data['data'] = $this->logon_model->get_scholl_data_ByID(1);
		// $this->session->set_userdata('schoolId', '1');
		
		$this->load->view('common/header');
		$this->load->view('welcome_message',$result);
		$this->load->view('common/footer');
	}

	public function get_flterdata(){

		// $data = array (
		// 	'username' => $this->input->post('username', TRUE) 
		// 	//TRUE identifies you're passing your data through XSS filter,
		//    //all other elements
		// );
		// $result['schools'] = $this->logon_model->get_data();
		// $data['data'] = $this->logon_model->get_scholl_data_ByID($_REQUEST['school_id']);

		// $this->session->set_userdata('schoolId', $data['data']['school_id']);

		// $this->load->view('common/header', $result);
		// $this->load->view('welcome_message',$data);
		// $this->load->view('common/footer');

	}

	public function registration(){
		$response = array();
		if ($this->input->post()) {
			$data = array(
				'username' => $this->input->post('txtusername'),
				'password' => password_hash($this->input->post('txtpassword'), PASSWORD_BCRYPT),
				'email' => $this->input->post('txtemail'),
				'role_id' => $this->input->post('user_role'),
			);
			$response['response'] = $this->logon_model->register_user($data);
		}
		
		// Load the registration view
		$this->load->view('common/header');
		$this->load->view('registeration', $response);
		$this->load->view('common/footer');

	}

	public function license(){
		$result['component_list'] = $this->logon_model->get_data('manage_license', null);
		
		// Load the manage license list view
		$this->load->view('common/header');
		$this->load->view('manage_licenses', $result);
		$this->load->view('common/footer');
	}

	public function add_license(){
		$response = array();
		// get data from database
		$response['lab_technitians'] = $this->logon_model->get_data('users',3);
		// $data['data'] = $this->logon_model->get_scholl_data_ByID(1);

		if ($this->input->post()) {
			$data = array(
				'tool_type' => $this->input->post('txtproductType'),
				'license_key' => $this->input->post('txtlicenseKey'),
				'expiry_date' => $this->input->post('txtexpiryDate'),
				'assigned_to' => $this->input->post('user_role'),
			);
			
			$response['response'] = $this->logon_model->generate_license($data);
			
			// Load the add license view
			$this->license();
		}else{

			// Load the add license view
			$this->load->view('common/header');
			$this->load->view('add_licenses', $response);
			$this->load->view('common/footer');
		}

	}
}
