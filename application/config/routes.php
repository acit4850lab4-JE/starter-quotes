<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

#feature 2
$route['last'] = 'last/welcome';
#feature 3
$route['sleep'] = 'First/zzz';
#feature 4
$route['lock/(:any)/(:any)'] = 'welcome/shucks';
#feature 5
$route['show/(\d+)'] = 'First/gimme/$1';
#feature 6 
$route['dunno'] = function() {
    $source = './data/cat.jpg'; // an image you provide
    // set the mime type for that image
    header("Content-type: image/jpeg"); 
    header('Content-Disposition: inline');
    readfile($source); // dish it
    die(); // and we don't have to go any further
};
#feature 7
$route['(^[a-zA-Z]{4})/bingo'] = 'Bingo';
#feature 8
$route['comp(\d{4})/wisdom'] = 'Wise/bingo';



/* End of file routes.php */
/* Location: ./application/config/routes.php */