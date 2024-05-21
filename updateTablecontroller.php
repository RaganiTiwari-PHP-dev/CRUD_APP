<?php
require_once __DIR__ .'/connect.php';
$msg=isset($_GET['msg'])?$_GET['msg']:"";
$id=isset($_POST['id'])?trim($_POST['id']):"";
$empname=isset($_POST['name'])?trim($_POST['name']):"";
$empemail=isset($_POST['email'])?trim($_POST['email']):"";
$empmobile=isset($_POST['mobile'])?trim($_POST['mobile']):"";
$dept=isset($_POST['dept'])?trim($_POST['dept']):"";
$salary=isset($_POST['salary'])?trim($_POST['salary']):"";
$msg2=isset($_GET['msg2'])?$_GET['msg2']:"";

 $sql="update emps set empname='$empname',empemail='$empemail',empmobile='$empmobile',dept='$dept',salary='$salary' where id='$id'"; 

 try{
    if (mysqli_query($conn, $sql)) {
        $affected_rows=mysqli_affected_rows($conn);
        if($affected_rows >0){
            $msg2='Record Updated Successfully';
            header('Location:SelectEmpRecord-Table-form-multiple.php?msg='.$msg2);
        }else{
            $msg='Record Not Updated ';
            header('Location:SelectEmpRecord-Table-form-multiple.php?msg='.$msg);
        }
        
    } else {
        throw new mysqli_sql_exception();
    }
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo 'Update Error ' . mysqli_error($conn);
    exit();
}


 
?>