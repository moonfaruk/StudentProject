<?php

    class Courses extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
        
        public function add(){
            $data = array();
            $data['course_code'] = "";
            $data['course_name'] = "";
            $data['value'] = "Save";
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_code', 'Course Code', 'required');
            $this->form_validation->set_rules('course_name', 'Course Name', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('course/add_course', $data);
            }
            else{
                $datas['course_code'] = $this->input->post('course_code');
                $datas['course_name'] = $this->input->post('course_name');
                $this->db->insert('tbl_course', $datas);
                
                redirect('courses/index');
            }
        }
        
        public function edit($id){
            $data = array();
            $course_info = $this->common_model->get_info('tbl_course', $id);
            $data['course_code'] = $course_info->course_code;
            $data['course_name'] = $course_info->course_name;
            $data['value'] = "Update";
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_code', 'Course Code', 'required');
            $this->form_validation->set_rules('course_name', 'Course Name', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('course/add_course', $data);
            }
            else{
                $datas['course_code'] = $this->input->post('course_code');
                $datas['course_name'] = $this->input->post('course_name');
                $this->common_model->update('tbl_course', $id, $datas);
                
                redirect('courses/index');
            }
        }
        
        public function index(){
            $data = array();
            $data['course_info'] = $this->common_model->selectAll('tbl_course');
            $this->load->view('course/view_courses', $data);
        }
    }
?>