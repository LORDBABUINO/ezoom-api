<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function index($id = null) {
    return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($this->course_model->get($id)))
                ->set_status_header(200);
	}

	public function store() {
    $course = json_decode($this->security->xss_clean($this->input->raw_input_stream));
    return $this->output
                ->set_content_type('application/json')
                ->set_output($this->course_model->create($course))
                ->set_status_header(201);
	}

	public function update($id) {
    $course = json_decode($this->security->xss_clean($this->input->raw_input_stream));
    return $this->output
                ->set_content_type('application/json')
                ->set_output($this->course_model->update($id, $course))
                ->set_status_header(200);
	}

	public function remove($id) {
    return $this->output
                ->set_content_type('application/json')
                ->set_output($this->course_model->delete($id))
                ->set_status_header(200);
	}
}
