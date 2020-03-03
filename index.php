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

$product1 = new ProductVat(10, 'derrr');
echo $product1->vat;
var_dump($product1);

?>

    
</body>
</html>