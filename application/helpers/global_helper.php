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
        function checkAkses($required_level)
        {
            $CI =& get_instance();
			$user_level = $CI->session->userdata('level');
			if ($user_level != $required_level) {
				redirect('404_override'); 
			}
        }
    }
?>
