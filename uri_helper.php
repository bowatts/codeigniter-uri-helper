<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('uri'))
{
	function uri($segment = '1')
	{
		$ci =& get_instance();
		return $ci->uri->segment($segment);
	}
}

/* End of file uri_helper.php */
/* Location: ./application/helpers/uri_helper.php */