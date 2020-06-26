<!DOCTYPE html>
<html>

<head>
    <title>ANTStore</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        li {
            list-style: none;
        }
    </style>
    <link rel="stylesheet" href="css/insert.css">
</head>

<body>
    <div class="Insertbase">
        <h1>ATN Store</h1>
        <h2>INSERT DATA TO DATABASE</h2>
        <h2>Enter data into table</h2>
        
            
        <ul>
            <form name="InsertData" action="InsertData.php" method="POST">
                <li>ID:</li>
                <li><input type="text" name="id" /></li>
                <li>Name:</li>
                <li><input type="text" name="name" /></li>
                <li>Price:</li>
                <li><input type="text" name="price" /></li>
                <li><input type="submit" value="Submit" /></li>
            </form>
            <li><a href="index.php" title="Home" class="active">Home</a></li>
                <li><a href="ConnectToDB.php">View</a></li>
                <li><a href="#">Cart</a></li>
        </ul>
        
    </div>
  




</body>

</html>
