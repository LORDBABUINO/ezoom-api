<?php
class Course_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get($id = null) {
    if($id)
      return $this->db
        ->get_where('course', ['id' => $id])
        ->row_array();
    return $this->db->get('course')->result_array();
  }

  public function create($course) {
    return $this->db->insert('course', $course);
  }

  public function update($id, $course) {
    return $this->db->update('course', $course, ['id' => $id]);
  }

  public function delete($id) {
    return $this->db->delete('course', ['id' => $id]);
  }
}
