<?php
session_start();
include 'connection.php';
$name = $_GET['t'];
//$name = date('YmdHis');
$newname = "images/" . $name . ".jpg";
$file = file_put_contents($newname, file_get_contents('php://input'));
if (!$file) {
    print "ERROR: Failed to write data to $filename, check permissions\n";
    exit();
} else {
    $sql = "Insert into entry(images) values('$newname')";
    $sql = "UPDATE entry SET images='$newname' WHERE nik='$name'";
    $result = mysqli_query($con, $sql)
    or die("Error in query");
    $value = mysqli_insert_id($con);
    $_SESSION["myvalue"] = $value;
}

$schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$url = $schema . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$path = explode("/", $url);

$alamat = $path[0] . '//' . $path[1] . $path[2] . '/' . $path[3] . '/' . $path[4] . '/';

$url = $alamat . $newname;
print "$url\n";

?>
