<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['barang/pinjam/(:any)'] = 'barang/pinjam/$1';
$route['barang/delete/(:any)'] = 'barang/delete/$1';
$route['barang/update/(:any)'] = 'barang/update/$1';
$route['barang/create'] = 'barang/create';
$route['barang'] = 'barang';

$route['default_controller'] = 'barang';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
