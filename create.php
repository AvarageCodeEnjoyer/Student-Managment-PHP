<?php include "header.php" ?>

<main>
    <h1 class="text-center container mt-5 ">Add Student Details</h1>
    <div class="container">
    <form action="" method="post">
    <div class="form-group">
        <label for="id" class="form-label">Student Id</label>
        <input type="text" name="id" class="form-control">
    </div>
    <div class="form-group">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control">
    </div>
    <div class="form-group">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control">
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    
    <div class="form-group">
        <input type="submit" name="create" class="btn btn-primary mt-2" value="Submit">
    </div>
    </form>
    </div>
    
    <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
</div>

<?php 
if(isset($_POST['create']))
{
    $student_id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    $query= "INSERT INTO students(id, firstname, lastname, email) VALUES('{$student_id}','{$fname}','{$lname}','{$email}')";
    $add_student = mysqli_query($conn,$query);

    if (!$add_student){
        echo"something went wrong". mysqli_error($conn);
    } else{
        echo "<script type='text/javascript'>alert('Student added successfully!')</script>";
    }

}



?>

<?php include "footer.php" ?>