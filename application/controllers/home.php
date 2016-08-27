<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	const CLIENT_ID = 'f1906760-023b-47d7-bebe-8731269ab57d';
	const CLIENT_SECRET = 'C7cH6gX7qM7oH4bB4fT8xE1hR5gM6iW2rQ6kS6uU7yA1yK4dB0';
	const CHANNEL_ID = 'UHACK_0026';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('health_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function transaction()
	{
		$source_account = $this->input->post('source_account');
		$source_currency = $this->input->post('source_currency');
		$transaction_id = uniqid();
		$amount = $this->input->post('amount');

		// print_r($this->input->post());

		$input = array(
				'channel_id' => 'BLUEMIX',
				'transaction_id' => $transaction_id,
				'source_account' => $source_account,
				'source_currency' => $source_currency,
				'target_account' => '000000013710',
				'target_currency' => 'php',
				'amount' => $amount,
			);
		// print_r($input);
		// exit();

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.us.apiconnect.ibmcloud.com/ubpapi-dev/sb/api/RESTs/transfer",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  // CURLOPT_POSTFIELDS => "{\"channel_id\":\"BLUEMIX\",\"transaction_id\":\"1234567890\",\"source_account\":\"000000020000\",\"source_currency\":\"php\",\"target_account\":\"000000020001\",\"target_currency\":\"php\",\"amount\":1500.5}",
		  CURLOPT_POSTFIELDS => json_encode($input),
		  CURLOPT_HTTPHEADER => array(
		    "accept: application/json",
		    "content-type: application/json",
		    "x-ibm-client-id: ". self::CLIENT_ID,
		    "x-ibm-client-secret: ". self::CLIENT_SECRET
		  ),
		));

		
		// echo self::CLIENT_ID;
		$response = curl_exec($curl);
		// print_r(CURLOPT_HTTPHEADER);
		// die();
		$err = curl_error($curl);

		curl_close($curl);

		// if ($err) {
		//   echo "cURL Error #:" . $err;
		// } else {
		//   print_r(json_decode($response));
		// }
		$data = array (
				
			);

		$this->health_model->add_donors($data);
		return json_decode($response);

		// $this->load->view('header');
		// $this->load->view('success', );
		// $this->load->view('footer');
	}

	public function home2()
	{
		if (empty($this->input->post())) {
			redirect('home', 'refresh');
		}

		$data = (array)$this->transaction();
		// print_r($data);
		// exit();
		$this->load->view('header');
		$this->load->view('success', $data);
		$this->load->view('footer');
	}

	public function registration()
	{
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
	}

	public function register()
	{
		if (empty($this->input->post())) {
			redirect('home/registration', 'refresh');
		}
		$data['register'] = $this->health_model->add_user($this->input->post());
		$this->load->view('header');
		$this->load->view('registerSuccess', $data);
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function logout()
	{
		session_destroy();
		redirect('home', 'refresh');
	}

	public function login_process()
	{
		$input = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		//verify username and password
		$log = $this->health_model->get_user_by_username_password($input);
		
		if ($log->num_rows() > 0)
		{
			$res = $log->row();
			$this->session->set_userdata($res);
			$session = $this->session->all_userdata(); 
			// print_r($session);
			// exit();
			switch ($session['user_type']) {
				case 1:
					redirect('home/dashboard_doctor', 'refresh');
					break;
				
				case 2:
					redirect('home/dashboard_donor', 'refresh');
					break;
			}
		}
		// print_r($this->session->all_userdata());
		// exit();
		$data['login'] = false;
		$this->load->view('header');
		$this->load->view('loginFailed', $data);
		$this->load->view('footer');
	}

	public function dashboard()
	{
		$session = $this->session->all_userdata();

		switch ($session['user_type']) {
			case 1:
				$this->load->view('header_doctor');
				break;
			
			case 2:
				$this->load->view('header_user');
				break;
		} 
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function patient()
	{
		$this->load->view('header');
		$this->load->view('patient');
		$this->load->view('footer');
	}

	public function add_patient()
	{
		$input = $this->input->post();
		$input['upload_by'] = $this->session->userdata('id');
		$data['add'] = $this->health_model->add_patient($input);
		$this->load->view('header');
		$this->load->view('patientSuccess', $data);
		$this->load->view('footer');
	}
}
