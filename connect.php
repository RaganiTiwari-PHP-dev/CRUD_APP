<?php
//step:Make connection to the database
define('DB_HOST','127.0.0.1:3306');
define('DB_PASS','');
define('DB_USER','root');
define('DB_NAME','company');//if db is wrong then connection will be wrong if it is empty 
#then no issue
//define('SHOW_CONN', TRUE);
define('SHOW_CONN',FALSE);

try{
    //echo 'Try Block....</br>';
mysqli_report(MYSQLI_REPORT_STRICT|MYSQLI_REPORT_ERROR);//for error reporting
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn)
{
    if(SHOW_CONN==TRUE)
    {

        echo 'connection sucess';

    }

}else
{
    throw new mysqli_sql_exception();
}
}
catch(mysqli_sql_exception $e)
{

echo  'connection Error';
echo $e->mysqli_connect_errno();
 exit();

}
?>