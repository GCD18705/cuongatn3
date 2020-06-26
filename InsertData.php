<!DOCTYPE html>
<html>
<head>
	<title>Insert product</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
<body>
    <form class="box" action="InsertData.php" method="post">
		<h1>Insert Product</h1>
		<input class="signup" type="text" name="id" placeholder="Product id">
		<input class="signup" type="text" name="name" placeholder="Product name">
		<input class="signup" type="text" name="price" placeholder="Price">
		<input class="signup" type="submit" name="" value="Submit">
	        <div class= "home">    <li> <a href="index.php" >Home</a></li> </div>
	
    </div>
	</form> 
	

</body>
</html>


<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
          "host=
ec2-50-17-90-177.compute-1.amazonaws.com
;port=5432;user=ykfihlfzgugghi;password=3b76c3670154e3ecfacf9e72b205d2500238e846d334fb47dcc475e698d10947;dbname=dbamj2mjg2grs5",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}


$sql = "INSERT INTO product(productid, productname,price)"
        . " VALUES('$_POST[id]','$_POST[name]','$_POST[price]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[id])) {
   echo "productid must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
</body>
</html>
