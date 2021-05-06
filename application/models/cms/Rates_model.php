<?php

class Rates_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

    $this->table = 'rates'; # Replace these properties on children
    $this->upload_dir = 'rates'; # Replace these properties on children
    $this->per_page = 15;
  }

  public function add($data)
  {
    return $this->db->insert($this->table, $data);
  }


  public function update($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update($this->table, $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete($this->table);

  }

  public function getRates()
  {
    return $this->db->get($this->table)->result();
  }

}
