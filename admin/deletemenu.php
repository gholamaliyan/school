<?php
if (!isset($_COOKIE['login'])) {
	header('location:index.php');
}
?>
<?php
if (isset($_GET['id'])) {
	include('../config.php');
	$delete="DELETE FROM `menu` WHERE `id` = ".$_GET['id']."";
	$query=mysqli_query($con,$delete);

	if ($query) {
		header("location:lastmenu.php?okdelete");
	}
}
?>