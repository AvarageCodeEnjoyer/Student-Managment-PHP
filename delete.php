<!-- header -->
<?php include "header.php" ?>
<?php
if(isset($_GET['id']))
{
$student_id= $_GET['id'];
// SQL query to delete data from user table where id = $studentid
$query = "DELETE FROM students WHERE id = {$student_id}";
$delete_query= mysqli_query($conn, $query);
header("Location: home.php");
}
?>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
<a href="home.php" class="btn btn-warning mt-5"> Back </a>
<div>
<!-- Footer -->
<?php include "footer.php" ?>