<?php
include('db.php');

$product_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $product['name']; ?> - E-commerce</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1><?php echo $product['name']; ?></h1>
    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
    <p><?php echo $product['description']; ?></p>
    <p>Price: $<?php echo $product['price']; ?></p>
    <form method="post" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
        <input type="number" name="quantity" value="1">
        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>
