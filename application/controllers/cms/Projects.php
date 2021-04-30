<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Project_model');
  }

  public function index()
  {
    $this->dashboard();
  }

  public function dashboard()
  {
    $res = $this->Project_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/projects', $data);
  }

  public function add()
  {
  
    if($this->Project_model->add(array_merge($this->input->post(null, true),$this->Project_model->upload('project_image')))){
     $this->session->set_flashdata('flash_msg', ['message' => 'New Project added successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error Saving Project', 'color' => 'red']);
   }
   $this->admin_redirect('cms/projects');
  }

  public function update($id)
  {
    if($this->Project_model->update($id, array_merge($this->input->post(null, true),$this->Project_model->upload('project_image')))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Project updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Project.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/projects');
  }

  public function delete()
  {
    if($this->Project_model->delete($this->input->post('id'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Project deleted successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error deleting Project.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/projects');
  }
  
}
