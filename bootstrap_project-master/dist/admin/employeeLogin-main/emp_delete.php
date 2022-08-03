<?php
require_once '../php/config.php';
$sql = "DELETE FROM employee_login WHERE emp_id='" . $_GET["emp_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>




<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h5>Are you sure you want to remove this employee from the database!!!</h5>
                </div>
                <div class="panel-body">
                    <center>
                        <div class="form-group">
                            <form method="post" action="delete.php">
                                <input type="hidden" name="id" value="<?= $emp_id; ?>" />
                                <button class="btn btn-danger btn-lg" type="submit" name="yesBtn">YES</button>
                                <button class="btn btn-success btn-lg" type="submit" name="noBtn">NO</button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>