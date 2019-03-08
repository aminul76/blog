<?php
include_once '../lib/Session.php';
include '../lib/Database.php';
include '../config/config.php';
include '../helpers/Format.php';

Session::checkSession();
$db = new  Database();



if (!isset($_GET['id']) || $_GET['id'] == Null){
	echo "<script>window.location = 'postlist.php';</script>";
} else {
	$postid = $_GET['id'];
	$query = "select * from tbl_post WHERE id = '$postid'";
	$getData = $db->select($query);

	if ($getData){
		while ($delimg = $getData->fetch_assoc()){
			$dellink = $delimg['image'];
			unlink($dellink);
		}
	}

	$delQuery = "delete from tbl_post WHERE id= '$postid'";
	$delData = $db->delete($delQuery);

	if ($delData){
		echo "<script>alert('Are you sure to Delete?')</script>";
		echo "<script>window.location = 'postlist.php';</script>";
	} else {
		echo "<script>alert('Data not deleted?')</script>";
		echo "<script>window.location = 'postlist.php';</script>";
	}
}