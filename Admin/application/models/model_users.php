<?php

class Model_users extends CI_Model
{
	 				//logIn Information//


	public function can_log_in()
	{
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));

		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}

					//.....END logIn Information.........//




					//Sign Up Admin//
	public function add_users(){
		$data = array(
			'fname' =>$this->input->post('fname'),
			'lname' =>$this->input->post('lname'),
			'email' =>$this->input->post('email'),
			'password' =>$this->input->post('password')
			);
		$query = $this->db->insert('users', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}


					//.........End Sign Up Admin...........//

						



						//Food Service Provider//



	public function add_food_provider(){
		$data = array(
			'company_name' =>$this->input->post('company_name'),
			'address' =>$this->input->post('address'),
			'email' =>$this->input->post('email'),
			'phone_number' =>$this->input->post('phone_number'),
			'provided_food' =>$this->input->post('provided_food')
			
			);
		$query = $this->db->insert('food_service_provider', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
		
	}


	public function del_foodprovider($id){
		 $this->db->where('id', $id);
		  $this->db->delete('food_service_provider'); 
	}

	public function show_foodprovider(){
		$query = $this->db->get('food_service_provider');
		$query_result = $query->result();
		return $query_result;
	}

	function show_foodprovider_id($data){
	$this->db->select('*');
	$this->db->from('food_service_provider');
	$this->db->where('id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}

	function update_foodprovider_id1($id, $data){
	$this->db->where('id', $id);
	$this->db->update('food_service_provider', $data);
	}

	public function get_foodprovider()
    {
            $query = $this->db->get('food_service_provider');
            return $query->result_array();
    }




    			//.......End Food Service Provider...........//



					//...............Department..............//




	public function add_department(){
		$data = array(
			'd_name' =>$this->input->post('department_name'),
			'mid' =>$this->input->post('manager_id'),
			'department_phone' =>$this->input->post('department_phone'),
			'department_address' =>$this->input->post('department_address')
			
			);
		$query = $this->db->insert('department', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
		
	}


	public function show_department(){
		$query = $this->db->get('department');
		$query_result = $query->result();
		return $query_result;
	}

	public function show_department_id($data){
		$this->db->select('*');
		$this->db->from('department');
		$this->db->where('did', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function update_department_id1($did, $data){
		$this->db->where('did', $did);
		$this->db->update('department', $data);
	}

	public function get_department()
    {
            $query = $this->db->get('department');
            return $query->result_array();
    }


    				//...............End Department..............//





					//...............Staff.....................//




	public function add_staff(){
		$data = array(
			'fname' =>$this->input->post('fname'),
			'lname' =>$this->input->post('lname'),
			'email' =>$this->input->post('email'),
			'did' =>$this->input->post('did'),
			'mid' =>$this->input->post('mid'),
			'position' =>$this->input->post('position'),
			'join_date' =>$this->input->post('join_date')
			
			);
		$query = $this->db->insert('staff_list', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function get_staff()
    {
            $query = $this->db->get('staff_list');
            return $query->result_array();
    }


	public function del_staff($id){
		 $this->db->where('id', $id);
		  $this->db->delete('staff_list'); 
	}

	public function show_staff(){
		$query = $this->db->get('staff_list');
		$query_result = $query->result();
		return $query_result;
	}

	function show_staff_id($data){
	$this->db->select('*');
	$this->db->from('staff_list');
	$this->db->where('id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}

	function update_staff_id1($id, $data){
	$this->db->where('id', $id);
	$this->db->update('staff_list', $data);
	}


							//...............End Staff................//


							//..............Members...................//



	public function add_member(){
		
			
			$data1 = array(
			'id'=> $this->input->post('id'),
			'fname' =>$this->input->post('fname'),
			'lname' =>$this->input->post('lname'),
			'age' =>$this->input->post('age'),
			'sex' =>$this->input->post('sex'),
			'join_date' =>$this->input->post('join_date'),
			'did' =>$this->input->post('did'),
			'gid' => $this->input->post('id'),
			'health_condition'=>$this->input->post('health_condition')
			);

		$query1 = $this->db->insert('member_list', $data1);
		$data2 = array(
			'id'=> $this->input->post('id'),
			'fname' =>$this->input->post('gfname'),
			'lname' =>$this->input->post('glname'),
			'address' =>$this->input->post('gaddress'),
			'email' =>$this->input->post('gemail'),
			'phone_number' =>$this->input->post('gphone_number'),
			'relationship' =>$this->input->post('grelationship')
			);
		
		
			$query2 = $this->db->insert('guardian_list', $data2);
		if ($query1) {
			return true;
		} else {
			return false;
		}
	}

	public function get_member()
    {
        $query = $this->db->get('member_list');
        return $query->result_array();
    }

    public function show_member(){
		$query = $this->db->get('member_list');
		$query_result = $query->result();
		return $query_result;
	}


	function show_member_id($data){
		$this->db->select('m.fname AS mfname, m.lname AS mlname, m.age AS mage,m.sex AS msex, m.join_date AS mjdate, 
								m.did AS mdid, m.health_condition AS mhealth_condition, g.id, g.fname AS gfname, g.lname AS glname,
    							 g.address AS gaddress,g.email AS gemail,g.phone_number AS gphone_number,
    							 g.relationship AS grelationship')
        	            ->from('guardian_list AS g')
        	            ->join('member_list AS m','m.id = g.id')
        	            ->where('m.id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function update_member_id1($id, $data1){
		$this->db->where('id', $id);
		$this->db->update('member_list', $data1);
	}



	public function del_member($id){
		 $this->db->where('id', $id);
		  $this->db->delete('member_list');
	}

	public function del_guardian($id){
		 $this->db->where('id', $id);
		  $this->db->delete('guardian_list'); 
	}


		//Guardian//
	public function get_guardian()
    {
    	return $this->db->select('m.fname AS mfname, m.lname AS mlname,m.id AS mid, g.id , g.fname AS gfname, g.lname AS glname,
    							 g.address AS gaddress,g.email AS gemail,g.phone_number AS gphone_number,
    							 g.relationship AS grelationship')
        	            ->from('guardian_list AS g')
        	            ->join('member_list AS m','m.id = g.id')
        	            ->get()->result_array();
    }

	function update_guardian_id1($id, $data2){
		$this->db->where('id', $id);
		$this->db->update('guardian_list', $data2);
	}



	



						//..............End Members...................//


						//..............Donor.....................//


	public function add_donor(){
		$data = array(
			'name' =>$this->input->post('name'),
			'email' =>$this->input->post('email'),
			'donate_type' =>$this->input->post('donate_type'),
			'donate_date' =>$this->input->post('donate_date')
			);
		$query = $this->db->insert('donor_list', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

 	public function get_donor()
    {
        $query = $this->db->get('donor_list');
        return $query->result_array();
    }

    public function show_donor(){
		$query = $this->db->get('donor_list');
		$query_result = $query->result();
		return $query_result;
	}

	function show_donor_id($data){
		$this->db->select('*');
		$this->db->from('donor_list');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function update_donor_id1($id, $data){
		$this->db->where('id', $id);
		$this->db->update('donor_list', $data);
	}



	public function del_donor($id){
		 $this->db->where('id', $id);
		  $this->db->delete('donor_list'); 
	}
    

   				 //..............End Donor.....................//


}

?>