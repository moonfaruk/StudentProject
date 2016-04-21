<?php 

    class Teachers extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            $this->load->model('teachers_model');
        }
        
        public function create(){
            $this->load->view('teacher/add_teacher');
        }
        
        public function update($id){
            $data = array();
            $data['teacher_info'] = $this->common_model->get_info('tbl_teacher',$id);
            $this->load->view('teacher/edit_teacher',$data);
        }
        
        public function update_data(){
            $data = array();
            $data['teacher_name'] = $this->input->post('teacher_name');
            $data['teacher_email'] = $this->input->post('teacher_email');
            $data['teacher_address'] = $this->input->post('teacher_address');
            $data['phone_number'] = $this->input->post('phone_number');
            
            $id = $this->input->post('teacher_id');
            
            $this->common_model->update('tbl_teacher', $id, $data);
            redirect('teachers/view_teacher');
            
        }

        public function add(){
//            echo "<pre>";
//            print_r($_POST);
//            exit();
            $data = array();
            $data['teacher_name'] = $this->input->post('teacher_name');
            $data['teacher_email'] = $this->input->post('teacher_email');
            $data['teacher_address'] = $this->input->post('teacher_address');
            $data['phone_number'] = $this->input->post('phone_number');
            
            $this->db->insert('tbl_teacher', $data);
            
            redirect('teachers/view_teacher');
        }
        
        public function view_teacher(){
            $data = array();
            $data['teacher_info'] = $this->teachers_model->selectAll('tbl_teacher');
            $this->load->view('teacher/view_teacher',$data);
        }
        
        public function delete($id){
            $this->common_model->change_status('tbl_teacher', $id);
            redirect('teachers/view_teacher');
        }
    }
?>