
<?php
include_once '../lib/Session.php';
include '../lib/Database.php';
include '../config/config.php';
include '../helpers/Format.php';

Session::checkSession();
$db = new  Database();



if (!isset($_GET['pageid']) || $_GET['pageid'] == Null){
	echo "<script>window.location = 'postlist.php';</script>";
} else {
	$id = $_GET['pageid'];
	$delQuery = "delete from tbl_page WHERE id= '$id'";
	$delData = $db->delete($delQuery);

	if ($delData){
		echo "<script>alert('Are you sure to Delete?')</script>";
		echo "<script>window.location = 'index.php';</script>";
	} else {
		echo "<script>alert('Data not deleted?')</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
}