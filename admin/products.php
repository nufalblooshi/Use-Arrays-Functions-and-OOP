<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>
<body>
<div class="row align-items-center bg-dark py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">multi</span>
                    <span class="h1 text-uppercase text-primary bg-dark px-2">shop</span>
                    
                </a>
            </div>
            <div class="col-lg-4 ">
            <span class=" py-3 h1 text-uppercase text-primary bg-dark px-2">Products page</span>
            </div>
            <div class="col-lg-4 col-6 text-right">
            <span class="h1 text-uppercase text-primary bg-dark px-2">Admin panel</span>
            </div>
        </div>
    </div>

<?php
define('BASE_PATH', '../');
require_once('../logic/products.php');
$products = getProducts();
foreach ($products as $product){?>
<table class="table table-striped table-dark">
  <thead>
  <a href="./add_product.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add</a>
  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
      <th scope="col">Color</th>
      <th scope="col">Is recent ?</th>
      <th scope="col">Is featured ?</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?=$product['id']?></th>
      <td rowspan="3"><img src="<?="/../" .$product['image_url']?>" width="30px"></td>
      <td><?=$product['name']?></td>
      <td><?=$product['price']?></td>
      <td><?=$product['discount']?></td>
      <td><?=$product['description']?></td>
      <td><?=$product['size_name']?></td>
      <td><?=$product['color_name']?></td>
      <td><?=$product['is_recent']?'Yes':'No'?></td>
      <td><?=$product['is_featured']?'Yes':'No'?></td>
    </tr>
   
  </tbody>
</table>
<?php
}

?>
</body>
</html>