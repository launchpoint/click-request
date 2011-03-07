<?

event('begin_request');
event('before_render');
ob_start();
$data = event('render');
$rendered_page = ob_get_contents();
ob_end_flush();
event('after_render');