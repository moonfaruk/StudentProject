<?php 
	class Departments extends CI_Controller
	{
		
//		public function create(){
//			
//		}
		

		public function add(){
                    $data = array();
                    $data['department_code'] = "";
                    $data['department_name'] = "";
                    $data['value'] = 'Save';
                    
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('department_code', 'Department Code', 'required');
                    $this->form_validation->set_rules('department_name', 'Department Name', 'required');
                    
                    if ($this->form_validation->run() == FALSE)
                    {
                        $this->load->view('department/add_department', $data);
                    }
                    else{
                        $datas = array();
                        $datas['department_code'] = $this->input->post('department_code');
                        $datas['department_name'] = $this->input->post('department_name');
                        $this->db->insert('tbl_department', $datas);
                        
                        
                        redirect('departments/view_department');
                    }
                    

		}
                
             
                
                public function edit($id){
                    $data = array();
                    $department_info = $this->common_model->get_info('tbl_department', $id);
                    $data['department_code'] = $department_info->department_code;
                    $data['department_name'] = $department_info->department_name;
                    $data['value'] =  'Update';
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('department_code', 'Department Code', 'required');
                    $this->form_validation->set_rules('department_name', 'Department Name', 'required');
                    
                    if ($this->form_validation->run() == FALSE)
                    {
                        $this->load->view('department/add_department', $data);
                    }
                    else{
                        $datas = array();
                        $datas['department_code'] = $this->input->post('department_code');
                        $datas['department_name'] = $this->input->post('department_name');
                        $this->common_model->update('tbl_department', $id, $datas);
                        
                        
                        redirect('departments/view_department');
                    }
                    

		}
                public function view_department(){
			$this->load->model('students_model');
			$data = array();
			$data['department_info'] = $this->students_model->selectAll('tbl_department');
			$this->load->view('department/view_department',$data);

		}
                
//                public function update_department($id){
//                    $data = array();
//                    $data['department_info'] = $this->common_model->get_info('tbl_department', $id);
//                    $this->load->view('department/edit_department', $data);
//                }
//                
//                public function update_data(){
//                    $data = array();
//                    $data['department_code']=$this->input->post('department_code');
//                    $data['department_name']=$this->input->post('department_name');
//                    $id = $this->input->post('department_id');
//                    
//                    $this->common_model->update('tbl_department', $id, $data);
//                    redirect('departments/view_department');
//                }
                
                public function delete_department($id){
                    $this->common_model->change_status('tbl_department',$id);
                    redirect('departments/view_department');
                }
		
	}
?>