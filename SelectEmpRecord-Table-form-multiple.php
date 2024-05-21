<?php

require_once __DIR__.'/connect.php';
$msg = isset($_GET['msg'])?$_GET['msg']:"";



?>
<html>

<head>
<style>
table,h1{
background-image:url(img24.jfif);
color:white;
font-weight:bold;
font-size:30px;
border-radius:10px;
margin:0 auto;
text-align:center;
}

th:hover
{
    background-color:pink;
}
td:hover
{
    background-color:yellow;
}
body
{
    background:rgba(125,125,112,1);

    background-size:cover;
}


</style>

</head>	
<body>
	
<h1 style="font-size:25px;">Employee Record Table</h1>
<span style="color:green; font-size:40px;"><?php echo $msg; ?></span>

<table border="3" >
<thead >
<tr>
<th>Sr No.</th>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>MOBILE</th>
<th>DEPARTEMENT</th>
<th>SALARY</th>
<th>Delete</th>
<th>Update</th>
</tr>
<tbody>
    <?php
    $sql="select * from emps";
    $result=mysqli_query($conn,$sql);
    $row_count=mysqli_num_rows($result);

    ?>
    <?php if($row_count>0):?>
        <?php $i=1;?>
        <?php while($row=mysqli_fetch_assoc($result)): ?>
    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['id']?></td>
    <td> <?php echo $row['empname'];?></td>
    <td><?php echo $row['empemail'];?></td>
    <td><?php echo $row['empmobile'];?></td>
    <td><?php echo $row['dept'];?></td>
    <td><?php echo $row['salary'];?>.00.INR</td>
    <td><a href="deletecontroller.php?id=<?php echo $row['id'];?>" style="color:yellow;">Delete</a></td>
        </br>
    <td><a href="updateEmptableformulti.php?id=<?php echo $row['id'];?>" style="color:yellow;">Update</a></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile;?>
<?php else:?>
    <tr>
                    <td colspan="9" style="text-align:center;">
                        <b>Record Not Found</b>
                    </td>
                </tr>
    
    <?php endif; ?>
</tbody>
</table>
    </body>
    </html>