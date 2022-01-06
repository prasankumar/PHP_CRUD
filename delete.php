<?php
include 'db.php';
$id = $_POST['id'];
$query = "delete from users WHERE id='" . $id . "'";
$res = mysqli_query($dbCon, $query);
if($res) {
echo json_encode($res);
} else {
echo "Error: " . $sql . "" . mysqli_error($dbCon);
}
?>