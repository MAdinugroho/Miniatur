<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/berhasil';
$route['pendaftaranseminar'] = 'home/pendaftaranseminar';
$route['f1f062f2fd3a8d30d0cda11d0e7ad678b207a976'] = 'home/berhasil_seminar';

$route['f1f062f2fd3a8d30d0cda11d0e7ad678b200f07a'] = 'home/berhasil';
$route['login'] = 'home/login_admin';
$route['daftar'] = 'home/tambahketua';
$route['lomba'] = 'home/hal_admin';
$route['seminar'] = 'home/seminar';
$route['ee37972869ce2f950182a9300df04995'] = 'home/logout_admin';
$route['pesertalomba/(:any)'] = 'home/getAnggota/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
