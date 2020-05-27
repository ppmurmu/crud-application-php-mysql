<?php
    class User extends CI_controller {

        function index()
        {
            $this->load->model('user_model');
            $name = $this->user_model->all();
            $data = array();
            $data['name'] = $name;
            $this->load->view('list',$data);
        }
        function create() {
            $this->load->model('user_model');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('category','Category','required');
            $this->form_validation->set_rules('author','Author','required');
            $this->form_validation->set_rules('published','Published (date/time)');
            $this->form_validation->set_rules('status','Status','required');
            if($this->form_validation->run()==false)
            {
                $this->load->view('create');
            } else {
                // Save blog to database

                $formArray = array();
                $formArray['name']=$this->input->post('name');
                $formArray['description']=$this->input->post('description');
                $formArray['category']=$this->input->post('category');
                $formArray['author']=$this->input->post('author');
                
                $formArray['created_at']= date('Y-m-d');
                
                $formArray['status']=$this->input->post('status');
                $this->user_model->create($formArray);
                $this->session->set_flashdata('success','Record added successfully');
                redirect(base_url().'index.php/user/index');
            }
            
        }
        function edit($Name)
        {
            $this->load->model('user_model');
            $user=$this->user_model->getUser($Name);
            $data=array();
            $data['user']=$user;

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('category','Category','required');
            $this->form_validation->set_rules('author','Author','required');
            $this->form_validation->set_rules('status','Status','required');
            if($this->form_validation->run() == false) {
                $this->load->view('edit',$data);
            } else {
                $formArray=array();
                $formArray['name']=$this->input->post('name');
                
                $formArray['description']=$this->input->post('description');
                $formArray['category']=$this->input->post('category');
                $formArray['author']=$this->input->post('author');
                $formArray['status']=$this->input->post('status');
                $this->user_model->updateUser($Name,$formArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/user/index/');
            }

            
        }
        function delete($Name)
        {
            $this->load->model('user_model');
            $user=$this->user_model->getUser($Name);
            if(empty($user)) {
                $this->session->set_flashdata('failure','Record not found in database');
                redirect(base_url().'index.php/user/index');
            
            }
            $this->user_model->deleteUser($Name);
            $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/user/index');
        }
    }
?>