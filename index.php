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

$product1 = new ProductVat(25, 'derrr');
$product2 = new ProductVat(33, 'brypp');
echo $product1->vat;


?>
<? var_dump($product1); ?> <br>
<? var_dump($product2); ?>
    
</body>
</html>