codeigniter-uri-helper
======================

A CodeIgniter helper to use uri segments easier

Instead of having to access URI segments by:
  $this->uri->segment(1)

With this helper, you can access the same segments by:
  uri(1)

To install, simply add this file to your application/helpers folder, 
then either use:

  $this->load->helper('uri_helper');

in your code, or edit the config/autoload.php and add:

'uri_helper'

to the helpers array being autoloaded.

I hope this saves you as much time as it will for me.
