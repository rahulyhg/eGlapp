<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>
<body>

<form method="POST" enctype="multipart/form-data">
<?php
if(isset($_POST['reg']))
{
$fname=$_FILES['a']['name'];
$fsize=$_FILES['a']['size'];
$ftype=$_FILES['a']['type'];
$ftmp=$_FILES['a']['tmp_name'];
$randno=rand();
$storage_path="../img/".$_GET['id'].$randno.".jpg";
if(move_uploaded_file($ftmp,$storage_path))
{
//echo "file uploaded";
echo "<img src=".$storage_path." width='50px'>";
}
}
?>

<input type="file" name="a"/><?php ?>
<input type="submit" class="btn btn-info" name="reg" value="Save Image"/>
</form>

</body>
</html>
