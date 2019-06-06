<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'general';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inicio'] = 'General/inicio';
$route['comidas'] = 'General/comidas';
$route['bebidas'] = 'General/bebidas';
$route['sopas'] = 'General/sopas';
$route['pagos'] = 'General/pagos';
$route['nosotros'] = 'General/nosotros';
$route['addventa'] = 'General/addventa';
$route['bebidas/(:any)'] = 'General/bebidas/$1';

