<!-- Header -->
<?php include "header.php" ?>
<div class="container mt-5">
<h1 class="text-center">Data To Perform CRUD Operations</h1>
<a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New
Student</a>
<table class="table table-striped table-bordered table-hover">
<thead class="table-dark">
<tr>
<th scope="col">ID</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">Email</th>
<th scope="col" colspan="3" class="text-center">CRUD Operations</th>
</tr>
</thead>
<tbody>
<tr>
<?php
$query = "SELECT * FROM students";// SQL query to fetch all table data
$view_students = mysqli_query($conn, $query);// sending the query to the database
// displaying all the data retrieved from the database using while loop
while ($row = mysqli_fetch_assoc($view_students)) {
$student_id = $row['id'];
$fname = $row['firstname'];
$lname = $row['lastname'];
$email = $row['email'];
echo "<tr >";
echo " <th scope='row' >{$student_id}</th>";


echo " <td > {$fname}</td>";
echo " <td > {$lname}</td>";
echo " <td >{$email} </td>";
// Buttons to view, update and delete record
echo " <td class='text-center'> <a href='view.php?&id={$student_id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
echo " <td class='text-center' > <a href='update.php?edit&id={$student_id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
echo " <td class='text-center'> <a href='delete.php?&delete&id={$student_id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
echo " </tr> ";
}
?>
</tr>
</tbody>
</table>
</div>
<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
<a href="index.php" class="btn btn-warning mt-5"> Back </a>
<div>
<!-- Footer -->
<?php include "footer.php" ?>