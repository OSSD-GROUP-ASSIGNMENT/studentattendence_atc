<?php 
include "inc/header.php"; 
include "classes/Student.php"; 
$stu = new Student();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_date'])) {
    $deleteDate = $_POST['delete_date'];
    $deleteAttend = $stu->deleteAttendanceByDate($deleteDate);
}

?>

<div class="container">
<?php 
    if (isset($deleteAttend)) {
        echo $deleteAttend;
    }
?>
    <a class="btn btn-info" href="index.php">Back to Attendance List</a>
</div>

<?php include("inc/footer.php"); ?>
