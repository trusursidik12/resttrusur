<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['api/aqm_data']				= 'api/aqm_data_get';
$route['api/aqm_ispu']				= 'api/aqm_ispu_get';

$route['api/pos/aqm_data']			= 'aqmdata_post/index_post';

$route['default_controller']		= 'api';
$route['404_override']				= '';
$route['translate_uri_dashes']		= FALSE;
