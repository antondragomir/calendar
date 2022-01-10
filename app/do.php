<?php 
/*
* Calendar
* Copyright Anton Dragomir
*/

class do_action
{
	public function __construct($module, $action)
	{
		require '/var/www/datery/data/autoloader.php';

		// Auth::createSession();
		if (file_exists('data/func/'.$module.'/'.$action.'.php')) {
			require_once 'data/func/'.$module.'/'.$action.'.php';
			new $action();
		}

	}
}

if (isset($_GET['module']) AND $_GET['module'] !='') {
	if (isset($_GET['action']) AND $_GET['action'] !='') {
		new do_action($_GET['module'], $_GET['action']);
	}
}
if (isset($_POST['location']['module']) AND $_POST['location']['module'] !='') {
	if (isset($_POST['location']['action']) AND $_POST['location']['action'] !='') {
		new do_action($_POST['location']['module'], $_POST['location']['action']);
	}
}
 ?>