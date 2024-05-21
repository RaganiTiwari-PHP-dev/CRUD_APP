<?php
require_once __DIR__.'/connect.php';
$msg=isset($_GET['msg'])?$_GET['msg']:"";
$msg2=isset($_GET['msg2'])?$_GET['msg2']:"";
$id=isset($_GET['id'])?$_GET['id']:"";
 $sql="delete from emps where id='$id'"; 

 try{
    if(mysqli_query($conn,$sql))
    {
    $affected_rows= mysqli_affected_rows($conn);
    if($affected_rows>0)
    {
        $msg= "Record delected sucessfully";
        header('Location:SelectEmpRecord-Table-form-multiple.php?msg= '.$msg);
    }
else
    {

        $msg="Record not deleted";
        header('Location:SelectEmpRecord-Table-form-multiple.php?msg='.$msg);
    }
}
 
 else
 {
    throw new mysqli_sql_exception();
 }
}
 catch(mysqli_sql_exception $e)
 {
$e->getMessage();
echo PHP_EOL;
echo 'delete error'.mysqli_error($conn);
exit();
 }

 
?>