<?php
require_once __DIR__ . '/connect.php';
$submitBtn = isset($_POST['submit']) ? $_POST['submit']: "";
if (isset($submitBtn) and !empty($submitBtn)) {
    $empname = trim($_POST['name']);
    //echo $emp_name;
    $empemail = trim($_POST['email']);
    //echo $emp_email;
    //$emp_pass = trim($_POST['password']);
    //echo $emp_pass;

    // echo $emp_cnf_pass;
    $empmobile = trim($_POST['mobile']);
    //echo $emp_mobile;
    $dept = trim($_POST['dept']);
    //echo $emp_dpt;
    $salary = trim($_POST['salary']);
    //echo $emp_salary;
    //Password Check match with confirm password
    // if ($emp_pass == $emp_cnf_pass) {
    //     //echo 'matched';
    // } else {
    //     echo 'Password does not matched';
    //     exit;
    // }
    // $enc_pass = md5($emp_pass); //encrypted Password.
    $insertSQL = "insert into emps (empname,empemail,empmobile,dept,salary) values('$empname','$empemail','$empmobile','$dept','$salary')";
    try {
        if (mysqli_query($conn, $insertSQL)) {
            $inserted_id = mysqli_insert_id($conn);
            if ($inserted_id > 0) {
                echo'Record Inserted Successfully';
                header("Location:SelectEmpRecord-Table-form-multiple.php?msg= ".$msg); //Redirect to show Record

            } else {
                echo 'Cannot Insert the Record';
            }
        } else {
            throw new mysqli_sql_exception();
        }
    } 
	catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
        echo 'Query Error';
    }

} else {
    header("Location:empRegistration-form-for-multile.php");
}
?>