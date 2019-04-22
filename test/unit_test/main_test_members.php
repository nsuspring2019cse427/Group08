<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __Construct(){
		parent::__Construct();
		$this->load->model('model_users');
		$this->load->library('unit_test');
	}

	public function index()
	{
		echo "Using unit testing";
		$test= $this->members();
		$expected_result = 0;
		$test_Name = "member view Test";
		echo $this->unit->run($test,$expected_result,$test_Name);
		//$this->login();
	}
	
	private function division($a, $b){
			return $a/$b;
	}
	

						//Log In//

	public function login(){
		$this->load->view('login');
	}


	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|trim|callback_validate_credentials');
		$this->form_validation->set_rules('password','Password','required|md5');

		if ($this->form_validation->run()) {
			
			$data = array(
				'email' => $this->input->post('email'), 
				'is_logged_in'=> 1
				);

			$this->session->set_userdata($data);
			redirect('main/members');
		}else{
			$this->load->view('login');
		}
	}

	public function members(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('members');
		}else{
			//redirect('main/restricted');
			return 0;
		}
		
	}

	
	public function restricted(){
		$this->load->view('restricted');
	}

	

	public function validate_credentials(){
		$this->load->model('model_users');

		if($this->model_users->can_log_in()){
			

			return true;
		}else{
			$this->form_validation->set_message('validate_credentials','Incorrect UserName/PassWord.');
			return false;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('main/login');
	}





								//Sign UP//



	public function signup(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('signup');
		}else{
			redirect('main/restricted');
		}
	}

	public function signup_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname','FName','required');
		$this->form_validation->set_rules('lname','LName','required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|md5|trim');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|md5|trim|matches[password]');

		$this->form_validation->set_message('is_unique',"That Email already exist.");

		if ($this->form_validation->run()) {
			$this->load->model('model_users');
			if($this->model_users->add_users()){
				redirect('main/members');
			}
		} else {
			echo "Sorry. Try Again";
			$this->load->view('signup');
		}
		


	}


										//Food Provider


	public function foodprovider_list(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('foodprovider_list');
		}else{
			redirect('main/restricted');
		}
		
	}

	public function foodprovider(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('foodprovider');
		}else{
			redirect('main/restricted');
		}
		
	}

	public function food_provide_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('company_name','Company_Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[food_service_provider.email]');
		$this->form_validation->set_rules('phone_number','Phone_Number','required');
		$this->form_validation->set_rules('provided_food','Provided_Food','required');

		$this->form_validation->set_message('is_unique',"That Email already exist.");

		if ($this->form_validation->run()) {
			$this->load->model('model_users');
			if($this->model_users->add_food_provider()){
				echo "Successfully Added";
				redirect('main/foodprovider');
			}
		} else {
			echo "Sorry. Try Again";
			$this->load->view('foodprovider');
		}
	}

	public function delete_foodprovider($id){
		 $this->model_users->del_foodProvider($id);
		  redirect('main/foodprovider_view');
	} 


	function show_foodprovider_id() {
	$id = $this->uri->segment(3);
	$data['foodprovider'] = $this->model_users->show_foodprovider();

	$data['single_provider'] = $this->model_users->show_foodprovider_id($id);

	if ($this->session->userdata('is_logged_in')) {
			$this->load->view('update_foodprovider', $data);
		}else{
			redirect('main/restricted');
		}
	
	}

	function update_foodprovider_id1() {

	$id = $this->input->post('id');
	
	$data = array(
	'company_name' => $this->input->post('company_name'),
	'address' => $this->input->post('address'),
	'Email' => $this->input->post('Email'),
	'phone_number' => $this->input->post('phone_number'),
	'provided_food' => $this->input->post('provided_food')
	);

	$this->model_users->update_foodprovider_id1($id, $data);
	
	redirect('main/foodprovider_view');
	
	}




											//Department 



	public function department_list(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('department_list');
		}else{
			redirect('main/restricted');
		}
		
	}


	public function department(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('department');
		}else{
			redirect('main/restricted');
		}
	}
	public function department_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('department_name','department_name','required|is_unique[department.d_name]');
		$this->form_validation->set_rules('manager_id','manager_id','required');
		$this->form_validation->set_rules('department_phone','department_phone','required');
		$this->form_validation->set_rules('department_address','department_address','required');
		

		$this->form_validation->set_message('is_unique',"That Department already exist.");

		if ($this->form_validation->run()) {
			$this->load->model('model_users');
			if($this->model_users->add_department()){
				echo "Successfully Added";
				redirect('main/department');
			}
		} else {
			echo "Sorry. Try Again";
			$this->load->view('department');
		}
	}


	function show_department_id() {
	$did = $this->uri->segment(3);
	$data['department'] = $this->model_users->show_department();

	$data['single_department'] = $this->model_users->show_department_id($did);

	if ($this->session->userdata('is_logged_in')) {
			$this->load->view('update_department', $data);
		}else{
			redirect('main/restricted');
		}
	
	}

	function update_department_id1() {

	$did = $this->input->post('did');
	
	$data = array(
	'd_name' => $this->input->post('d_name'),
	'mid' => $this->input->post('mid'),
	'department_phone' => $this->input->post('department_phone'),
	'department_address' => $this->input->post('department_address')
	);

	$this->model_users->update_department_id1($did, $data);
	
	redirect('main/department_view');
	
	}


							//Staff//


	public function staff_list(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('staff_list');
		}else{
			redirect('main/restricted');
		}
		
	}


	public function staff_add(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('staff_add');
		}else{
			redirect('main/restricted');
		}
	}
	public function staff_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname','FName','required');
		$this->form_validation->set_rules('lname','LName','required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[staff_list.email]');
		$this->form_validation->set_rules('did','Did');
		$this->form_validation->set_rules('mid','mid');
		$this->form_validation->set_rules('position','Position');
		$this->form_validation->set_rules('join_date','Join_date','required');

		$this->form_validation->set_message('is_unique',"That Email already exist.");

		if ($this->form_validation->run()) {
			$this->load->model('model_users');
			if($this->model_users->add_staff()){
				echo "Successfully Added";
				redirect('main/staff_add');
			}
		} else {
			echo "Sorry. Try Again";
			$this->load->view('staff_add');
		}


	}

	public function delete_staff($id){
		 $this->model_users->del_staff($id);
		  redirect('main/staff_view');
	} 


	function show_staff_id() {
	$id = $this->uri->segment(3);
	$data['staff'] = $this->model_users->show_staff();

	$data['single_staff'] = $this->model_users->show_staff_id($id);

	if ($this->session->userdata('is_logged_in')) {
			$this->load->view('update_staff', $data);
		}else{
			redirect('main/restricted');
		}
	
	}

	function update_staff_id1() {

	$id = $this->input->post('id');
	
	$data = array(
		'fname' => $this->input->post('fname'),
		'lname' => $this->input->post('lname'),
		'email' => $this->input->post('email'),
		'did' => $this->input->post('did'),
		'mid' => $this->input->post('mid'),
		'position' => $this->input->post('position'),
		'join_date' => $this->input->post('join_date')
	);

	$this->model_users->update_staff_id1($id, $data);
	
	redirect('main/staff_view');
	
	}
								//Staff View//


	 public function staff_view(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_users');
			$this->data['staff'] = $this->model_users->get_staff();
			$this->load->view('staff_view',$this->data);
		}else{
			redirect('main/restricted');
		}
	}



						//.............End Staff..............//



							//Member//


	public function member_list(){

		if ($this->session->userdata('is_logged_in')) {
				
				$this->load->view('member_list');
			
			
		}else{
			redirect('main/restricted');
		}
		
	}


	public function member_add(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('member_add');
		}else{
			redirect('main/restricted');
		}
	}
	public function member_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id','iid','required|is_unique[member_list.id]');
		$this->form_validation->set_rules('fname','FName','required');
		$this->form_validation->set_rules('lname','LName','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('sex','Sex','required');
		$this->form_validation->set_rules('join_date','Join_Date','required');
		$this->form_validation->set_rules('did','Did');
		
		$this->form_validation->set_rules('health_condition','Health_Condition','required');
		$this->form_validation->set_rules('gfname','gFName','trim');
		$this->form_validation->set_rules('glname','gLName','trim');
		$this->form_validation->set_rules('gaddress','gaddress','trim');
		$this->form_validation->set_rules('gemail','gemail','trim');
		$this->form_validation->set_rules('gphone_number','gphone_number');
		$this->form_validation->set_rules('grelationship','grelationship','trim');


		

		if ($this->form_validation->run()) {
			$this->load->model('model_users');
			if($this->model_users->add_member()){
				echo "Successfully Added";
				redirect('main/member_add');
			}
		} else {
			echo "Sorry. Try Again";
			$this->load->view('member_add');
		}


	}	

	public function delete_member($id){
		 
		 $this->model_users->del_guardian($id);
		 $this->model_users->del_member($id);
		  redirect('main/member_view');
	} 


	function show_member_id() {
	$id = $this->uri->segment(3);
	$data1['member'] = $this->model_users->show_member();
	$data1['single_member'] = $this->model_users->show_member_id($id);
	if ($this->session->userdata('is_logged_in')) {
			$this->load->view('update_member',$data1);
		}else{
			redirect('main/restricted');
		}
	
	}

	

	function update_member_id1() {

	$id = $this->input->post('id');
	
	$data1 = array(
	'fname' => $this->input->post('fname'),
	'lname' => $this->input->post('lname'),
	'age' => $this->input->post('age'),
	'sex' => $this->input->post('sex'),
	'join_date' => $this->input->post('join_date'),
	'did' => $this->input->post('did'),
	'health_condition' => $this->input->post('health_condition')
	);

	$data2 = array(
	'fname' => $this->input->post('gfname'),
	'lname' => $this->input->post('glname'),
	'address' => $this->input->post('gaddress'),
	'email' => $this->input->post('gemail'),
	'phone_number' => $this->input->post('gphone_number'),
	'relationship' => $this->input->post('grelationship')
	);

	$this->model_users->update_member_id1($id, $data1);
	$this->model_users->update_guardian_id1($id, $data2);
	
	redirect('main/member_view');
	}

									//member View//


	 public function member_view(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_users');
			$this->data['member'] = $this->model_users->get_member();
			$this->load->view('member_view',$this->data);
		}else{
			redirect('main/restricted');
		}
	}

								//Guardian View//

	public function guardian_view(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_users');
			$this->data['guardian'] = $this->model_users->get_guardian();
			$this->load->view('guardian_view', $this->data);
		}else{
			redirect('main/restricted');
		}
	}
			






									//............Start Donor...........//


	public function donor_list(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('donor_list');
		}else{
			redirect('main/restricted');
		}
		
	}


	public function donor_add(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('donor_add');
		}else{
			redirect('main/restricted');
		}
	}
	public function donor_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('donate_type','Donate_Type','required|trim');
		$this->form_validation->set_rules('donate_date','Donate_Date','required|trim');
		

		

		if ($this->form_validation->run()) {
			$this->load->model('model_users');
			if($this->model_users->add_donor()){
				echo "Successfully Added";
				redirect('main/donor_add');
			}
		} else {
			echo "Sorry. Try Again";
			$this->load->view('donor_add');
		}


	}

	public function delete_donor($id){
		 $this->model_users->del_donor($id);
		  redirect('main/donor_view');
	} 


	function show_donor_id() {
	$id = $this->uri->segment(3);
	$data['donor'] = $this->model_users->show_donor();

	$data['single_donor'] = $this->model_users->show_donor_id($id);

	if ($this->session->userdata('is_logged_in')) {
			$this->load->view('update_donor', $data);
		}else{
			redirect('main/restricted');
		}
	
	}

	function update_donor_id1() {

	$id = $this->input->post('id');
	
	$data = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'donate_type' => $this->input->post('donate_type'),
		'donate_date' => $this->input->post('donate_date')
	);

	$this->model_users->update_donor_id1($id, $data);
	
	redirect('main/donor_view');
	
	}


								//Donor View//

	public function donor_view(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_users');
			$this->data['donor_list'] = $this->model_users->get_donor();
			$this->load->view('donor_view',$this->data);
		}else{
			redirect('main/restricted');
		}
	}


						//........End Donar.......//


				//show Information on table//

			


				//Department View//
	
	public function department_view(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_users');
			$this->data['department'] = $this->model_users->get_department();
			$this->load->view('department_view',$this->data);
		}else{
			redirect('main/restricted');
		}
	}

					//Food Provider View//

	public function foodprovider_view(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_users');
			$this->data['foodprovider'] = $this->model_users->get_foodprovider();
			$this->load->view('foodprovider_view',$this->data);
		}else{
			redirect('main/restricted');
		}
	}

	
		


}
