<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
 
		function show($view, $data=array()){
 
			$CI = & get_instance();
 
			// carrega header
			$CI->load->view('Template/header.php',$data);
 
			// carrega content
			$CI->load->view($view,$data);
 
			// carrega footer
			$CI->load->view('Template/footer',$data);
 
			// Scripts
			$CI->load->view('Template/script',$data);
		}
}
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
?>
 
