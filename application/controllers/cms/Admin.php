<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Admin_model');
  }

  public function index()
  {
    $this->dashboard();
  }

  public function dashboard()
  {
    $res = $this->Admin_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/index', $data);
  }

  public function add()
  {
  
    if($this->Admin_model->add($this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'User added successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error adding user. Email already exists.', 'color' => 'red']);
   }
   $this->admin_redirect('cms');
  }

  public function update($id)
  {
    if($this->Admin_model->update($id, $this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'User updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating user.', 'color' => 'red']);
   }
   $this->admin_redirect('cms');
  }

  public function delete()
  {
    if($this->Admin_model->delete($this->input->post('id'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'User data deleted successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error deleting user.', 'color' => 'red']);
   }
   $this->admin_redirect('cms');
  }
}
