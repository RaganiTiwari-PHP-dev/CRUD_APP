<?php
require_once __DIR__.'/connect.php';
$id=isset($_GET['id'])?$_GET['id']:"";
$sql="select * from emps where id='$id'";
$result=mysqli_query($conn,$sql);
$row_count=mysqli_num_rows($result);
echo $row_count;
$msg = isset($_GET['msg'])?$_GET['msg']:"";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Update Form</h1>
        
        <?php if($row_count>0):?>
            <?php if($row=mysqli_fetch_assoc($result)):?>
         <form action ="updateTablecontroller.php" method="POST"> 
        <!-- <form action ="deletetablecontroller.php" method="POST"> -->

            <div class="form-group">
                <label >ID:</label>
                <input type="text" name="id" required value="<?php echo $row['id'];?>"/>
            </div>
         <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $row['empname'];?>"/>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email"  name="email" required value="<?php echo $row['empemail'];?>"/>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text"  name="mobile" required value="<?php echo $row['empmobile'];?>"/>
            </div>
            
            <!-- <div class="form-group">
            
                <label for="department">Select Department: 
                </label>
                <input type="text"  name="dept" required value=">
            </div> -->
            <p>select department :
<?php
$department =array(
    ""=>'select',
    "hr"=>'Hr',
    "developer"=>'Developer',
    "manager"=>'Manager',
    "tester"=>'Tester'
);
?>

            <select name="dept">
            <?php foreach ($department  as $key =>$value):?>
                    <option value="<?php echo $key; ?>"
                    <?php if ($key == $row['dept']): echo "selected"; endif; ?>>
                    <?php echo $value;?>
                    </option>
                    <?php endforeach;?>
            </select>
        </p>
    
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number"  name="salary" required value="<?php echo $row['salary'];?>"/>
            </div>
            <div class="form-group">
</br>
                <button type="submit" name="submit" value="Update Emp" >Submit</button>
            </div>
        </form>
    </div>
    <?php endif;?>
    <?php else:?>
        <h1 style="color:red;text-align:center;">ORE BABA KUCHH TO GADBAD HAI 
    </br>
    <a href="empRegistration-form-for-multile.php"  style="color:maroon;text-align:center;">Go Back</a>
    </h1>
        <?php endif;?>
        
</body>

</html>