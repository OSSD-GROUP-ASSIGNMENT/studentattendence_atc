<?php 
include "inc/header.php"; 
include "classes/Student.php";
$stu = new Student();
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $level = $_POST['level']; // New field for level
    $course = $_POST['course']; // New field for course
    $academicYear = $_POST['academicYear']; // New field for academic year

    // Assuming insertStudent now also handles inserting level, course, and academicYear
    $insertdata = $stu->insertStudent($name, $roll, $level, $course, $academicYear);
}
?>

<div class="container">
<?php
if (isset($insertdata)) {
    echo $insertdata;
}
?>
    <div class="card">
        <div class="card-header">
            <h2>
                <a class="btn btn-success" href="add.php">Add Student</a>
                <a class="btn btn-info float-right" href="index.php">Back</a>
            </h2>
        </div>

        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" class="form-control" name="name" id="name" required="">
                </div>

                <div class="form-group">
                    <label for="roll">Student Roll</label>
                    <input type="text" class="form-control" name="roll" id="roll" required="">
                </div>

                <!-- New fields for level, course, and academic year -->
                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" name="level" id="level" required="">
                </div>

                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" name="course" id="course" required="">
                </div>

                <div class="form-group">
                    <label for="academicYear">Academic Year</label>
                    <input type="text" class="form-control" name="academicYear" id="academicYear" required="">
                </div>

                <div class="form-group text-center">
                    <input type="submit" name="submit" class="btn btn-primary px-5" id="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("inc/footer.php");?>
