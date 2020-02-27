<?php

class Aqmmaster_m extends CI_Model
{

	public function get_aqm_data($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('aqm_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_aqm_ispu($id = FALSE)
	{
		if($id === FALSE){
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('aqm_ispu');
			return $query->result_array();
		}
		$query = $this->db->get_where('aqm_ispu', array('id' => $id));
		return $query->row_array();
	}

	public function add_aqm_data()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_stasiun' 		=> $this->input->post('id_stasiun'),
			'waktu' 			=> $this->input->post('waktu'),
			'pm10' 				=> $this->input->post('pm10'),
			'pm25' 				=> $this->input->post('pm25'),
			'so2' 				=> $this->input->post('so2'),
			'co' 				=> $this->input->post('co'),
			'o3' 				=> $this->input->post('o3'),
			'no2' 				=> $this->input->post('no2'),
			'hc' 				=> $this->input->post('hc'),
			'voc' 				=> $this->input->post('voc'),
			'nh3' 				=> $this->input->post('nh3'),
			'no' 				=> $this->input->post('no'),
			'h2s' 				=> $this->input->post('h2s'),
			'cs2' 				=> $this->input->post('cs2'),
			'ws' 				=> $this->input->post('ws'),
			'wd' 				=> $this->input->post('wd'),
			'humidity' 			=> $this->input->post('humidity'),
			'temperature' 		=> $this->input->post('temperature'),
			'pressure' 			=> $this->input->post('pressure'),
			'sr' 				=> $this->input->post('sr'),
			'stat_pm10' 		=> $this->input->post('stat_pm10'),
			'stat_so2' 			=> $this->input->post('stat_so2'),
			'stat_co' 			=> $this->input->post('stat_co'),
			'stat_o3' 			=> $this->input->post('stat_o3'),
			'stat_no2' 			=> $this->input->post('stat_no2'),
			'stat_hc' 			=> $this->input->post('stat_hc'),
			'stat_pm25' 		=> $this->input->post('stat_pm25'),
			'gen' 				=> $this->input->post('gen'),
			'is_sent' 			=> '0',
			'rain_intensity' 	=> $this->input->post('rain_intensity'),
			'xtimetimes' 		=> $this->input->post('xtimetimes', array('type' => 'timestamp'))
		);
		return $this->db->insert('aqm_data', $data);
	}
}