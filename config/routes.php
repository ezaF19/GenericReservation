<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#branch_controller
$route['home_branch'] = 'branch_controller/home_branch';
$route['reservations_branch'] = 'branch_controller/read_res';
$route['services_branch'] = 'branch_controller/read_ser';
$route['search_reservation_branch'] = 'branch_controller/search_res';
$route['search_service_branch'] = 'branch_controller/search_ser';
$route['manage_btn'] = 'branch_controller/read_update_sub';
$route['manage_services'] = 'branch_controller/manage_ser';

$route['search_reservation'] = 'client_controller/search_res';
#client_controller
$route['home_client'] = 'client_controller/home_client';
$route['reservations'] = 'client_controller/read_res';
$route['branches_client'] = 'client_controller/read_bra';
$route['services_client'] = 'client_controller/read_sub';
$route['create_subservice_client'] = 'client_controller/create_sub';
$route['create_branch_client'] = 'client_controller/create_bra';
$route['search_subservices'] = 'client_controller/search_sub';
$route['search_reservation'] = 'client_controller/search_res';
$route['search_branch'] = 'client_controller/search_bra';

#admin_controller
$route['search_location'] = 'admin_controller/search_loc';
$route['search_service'] = 'admin_controller/search_ser';
$route['search_client'] = 'admin_controller/search_cli';
#$route['search_branch'] = 'admin_controller/search_bra';
$route['create_service'] = 'admin_controller/create_ser';
$route['create_location'] = 'admin_controller/create_loc';
$route['userlogin'] = 'admin_controller/index';
$route['clientlogin'] = 'admin_controller/client_log';
$route['home'] = 'admin_controller/home';
$route['reservations_admin'] = 'admin_controller/read_res';
$route['clients'] = 'admin_controller/read_cli';
$route['branches'] = 'admin_controller/read_bra';
$route['branches_all'] = 'admin_controller/read_bra_all';
$route['services'] = 'admin_controller/read_ser';
$route['locations'] = 'admin_controller/read_loc';
$route['login'] = 'admin_controller/login';
$route['logout'] = 'admin_controller/logout';
$route['default_controller'] = 'admin_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
