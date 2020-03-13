<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
require 'connect.php';
//List product dari database
$result = $conn->query("SELECT * FROM product");?>
<h2> List Order </h2>
 <table id="t01">
 <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Datecreation</th>
    <th>Status</th>
    <th>Username</th>
 </tr>
    <?php while($product = $result->fetch(PDO::FETCH_OBJ)) { ?> 
    <tr>
        <td><?php echo $product->id; ?></td>
        <td><?php echo $product->name; ?></td>
        <td>13-03-2020</td>
        <td>0</td>
        <td>Acc</td>
    </tr>
    <?php } ?>
 </table>
<a href="index.php">Continue To Menu Order</a> 
</body>

 </html>