<?php
    class user_model extends CI_model{
        function create()
        {
            $data=array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'category' => $this->input->post('category'),
                'author' => $this->input->post('author'),                
                'status' => $this->input->post('status')
            );

            $this->db->set($data);
            $this->db->insert($this->db->dbprefix .'name');
        }
        function All()
        {
           return $this->db->get('name')->result_array();  //select from name
        }
        function getUser($Name) {
            $this->db->where('Name',$Name);
            return $user = $this->db->get('name')->row_array();
        }
        function updateUser($Name,$formArray) {
            $this->db->where('Name',$Name);
            $this->db->update('name',$formArray);
            
            
        }
        function deleteUser($Name) {
            $this->db->where('Name',$Name);
            $this->db->delete('name');  //delete from name table where Name is the key
        }
    }
?>
