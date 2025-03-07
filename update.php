<?php include 'header.php' ?>
<?php 

if(isset($_GET['id']))
{
    $student_id = $_GET['id'];
}
$query="SELECT * FROM students WHERE id = {$student_id}";
$view_students = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($view_students))
{
    $student_id = $row['id'];
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $email = $row['email'];
}

if(isset($_POST['update']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    $query = "UPDATE students SET id = '{$student_id}', firstname = '{$fname}', lastname = '{$lname}', email = '{$email}' WHERE id = $student_id";
    $update_student = mysqli_query($conn, $query);
    echo "<script type='text/javascript'>
        alert('Student data updated successfully!');
        window.location.href='home.php'
    </script>";
}
?>

<h1 class="text-center">Update Student Details</h1>
 <div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $fname ?>">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" value="<?php echo $lname ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
        </div>

        <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary mt-2" value="Update">
        </div>
    </form>
</div>

<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
<div>
<?php include 'footer.php' ?>