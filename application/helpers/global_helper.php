<?php
    if (!function_exists('checkLogin')) {
        function checkLogin()
        {
            $ci = &get_instance();

            if (!$ci->session->userdata('id')) {
				redirect('auth');
			}
        }
    }

    if (!function_exists('doneLogin')) {
        function doneLogin()
        {
            $ci = &get_instance();

            if ($ci->session->userdata('id')) {
				redirect('dashboard');
			}
        }
    }

    if (!function_exists('checkAkses')) {
        function checkAkses($required_levels)
		{
			$CI =& get_instance();
			$user_level = $CI->session->userdata('role');
			
			if (!is_array($required_levels)) {
				$required_levels = array($required_levels);
			}
			
			if (!in_array($user_level, $required_levels)) {
				redirect('404_override');
			}
		}
    }

	if (!function_exists('checkEmptyBiodata')) {
		function checkEmptyBiodata($nik)
		{
			$ci = &get_instance();
			$ci->load->database();
	
			$ci->db->where('nik', $nik);
			$query = $ci->db->get('tbl_biodata');
	
			if ($query->num_rows() > 0) {
				$row = $query->row();
				foreach ($row as $key => $value) {
					if (empty($value)) {
						redirect('biodata'); // Terdapat nilai kosong, arahkan ke route 'biodata'
					}
				}
			}
		}
	}

	// if (!function_exists('checkVerifikasi')) {
	// 	function checkVerifikasi($nik)
	// 	{
	// 		$ci = &get_instance();
	// 		$ci->load->database();
	
	// 		$ci->db->where('nik', $nik);
	// 		$ci->db->where('status', 0);
	// 		$verifikasi_query = $ci->db->get('tbl_verifikasi');
	
	// 		if ($verifikasi_query->num_rows() == 0) {
	// 			redirect('data-dukung');
	// 		} else {
	// 			$verifikasi = $verifikasi_query->row();
	// 			$id_verifikasi = $verifikasi->id_verifikasi;
	
	// 			$ci->db->where('id_verifikasi_detail', $id_verifikasi);
	// 			$detail_query = $ci->db->get('tbl_verifikasi_detail')->row();
	
	// 			if ($detail_query->id_data_pendukung == null) {
	// 				redirect('data-dukung');
	// 			} else {
	// 				redirect('data-pak');
	// 			}
	// 		}
	// 	}
	// }
?>
