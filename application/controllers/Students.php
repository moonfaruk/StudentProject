<?php 

	class Students extends CI_Controller{

            public function __construct() {
                parent::__construct();
                $this->load->model('students_model');
            }

            public function create(){
			$this->load->view('student/add_student');
		}

		public function view_data(){
			$data=array();
			$data['student_info'] = $this->students_model->selectAll('tbl_student');
			$this->load->view('student/view_student',$data);
		}

		public function add(){
			// echo "<pre>";
			// print_r($_POST);
			// exit();
			
			$data = array();
			$data['student_name'] = $this->input->post('student_name');
			$data['student_email'] = $this->input->post('student_email');
			$data['student_address'] = $this->input->post('student_address');
			$data['student_phone'] = $this->input->post('student_phone');

			$this->db->insert('tbl_student', $data);

			redirect('students/view_data');
		}
                
                public function update_student($id){
                    $data = array();
                    $data['student_info'] = $this->common_model->get_info('tbl_student', $id);
                    $this->load->view('student/edit_student', $data);
                }
                public function update_data(){
                        $data = array();
			$data['student_name'] = $this->input->post('student_name');
			$data['student_email'] = $this->input->post('student_email');
			$data['student_address'] = $this->input->post('student_address');
			$data['student_phone'] = $this->input->post('student_phone');
                        
                        $id = $this->input->post('student_id');
                        $this->common_model->update('tbl_student', $id, $data);
                        
                        redirect('students/view_data');
                }
                
                public function delete($id){
                   
                    $this->common_model->change_status('tbl_student', $id);
                    redirect('students/view_data');
                }
	}
?>