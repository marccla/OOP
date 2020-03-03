<? 
include  'products.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?

$product1 = new ProductVat(25, 'Nike Air');
$product2 = new ProductVat(33, 'Steak');
echo $product1->vat;


?>
<? var_dump($product1); ?> <br>
<? var_dump($product2); ?>
    <h2>Product:<? echo $product1->name ?></h2>
    
    <p>Price:<? echo $product1->priceWithVat ?> (VAT:<? echo $product1->vat * 100; ?>%) </p>
    <h2>Product:<? echo $product2->name ?></h2>
    
    <p>Price:<? echo $product2->priceWithFoodVat ?> (VAT:<? echo $product2->foodVat * 100; ?>%) </p>
    
</body>
</html>