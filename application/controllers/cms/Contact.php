<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Contact_model');
  }

  public function index()
  {
    $this->dashboard();
  }

  public function dashboard()
  {
    $res = $this->Contact_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/contact', $data);
  }

  public function add()
  {
  
    if($this->Contact_model->add($this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Contact added successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error adding Contact', 'color' => 'red']);
   }
   $this->admin_redirect('cms/contact');
  }

  public function update($id)
  {
    if($this->Contact_model->update($id, $this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Contact updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Contact.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/contact');
  }

  public function delete()
  {
    if($this->Contact_model->delete($this->input->post('id'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Contact data deleted successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error deleting Contact.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/contact');
  }
}
