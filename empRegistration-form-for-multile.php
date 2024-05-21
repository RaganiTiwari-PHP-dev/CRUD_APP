
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
        <h1>Registration Form</h1>
		
        <form action="insertEmpcontoller.php" method="POST" >
            <div class="form-group">
                <label >ID:</label>
                <input type="text" name="id" required>
            </div>
         <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" >
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text"  name="mobile" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email"  name="email" required>
            </div>
                <div>
                select Department:<select name="dept">
<option>HR</option>
<option>MANAGER</option>
<option>DEVELOPER</option>
<option>TESTER</option>
<option>BDA</option>

                </select>
</div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number"  name="salary" required>
            </div>
            <div class="form-group">
</br>
                <input type="submit" name="submit" value="Add-Employee"/>
            </div>
        </form>
    </div>
</body>

</html>