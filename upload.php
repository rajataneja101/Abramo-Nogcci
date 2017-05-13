<?php
$conn = new PDO('mysql:host=localhost; dbname=abramo','root', 'root');
if (isset($_POST['Submit'])) {
 
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tbl_image (first_name, last_name, image_location)
VALUES ('$fname', '$lname', '$location')";
 
$conn->exec($sql);
echo "<script>alert('Successfully Added!!! You will be contacted shortly'); window.location='index.html'</script>";
}
?> 