<?php 
$idx = $_GET["index"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>022 Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #CCA885;">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php" style="color: white"><b>022 Store</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="order.php?index=-1">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Payment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Order -->
        <form action="payment.php" method="POST" style="padding: 50px">
            <!-- Buyer Info -->
            <center>
                <h2>Order Form</h2>
                <hr style="margin: 20px 30px; width: 65%">    
            </center>
            <div class="container" style="margin: 30px; padding: 10px 250px">
                <div class="mb-3">
                    <label for="custname" class="form-label"><b>Full Name</b></label>
                    <input type="text" class="form-control" id="custname" name="custname" style="color: white; background-color: #CCA885; border-color: #CCA885; border-width: 3px">
                </div>
                <div class="mb-3">
                    <label for="custemail" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" id="custemail" name="custemail" style="border-color: #97714A; border-width: 3px" placeholder="123220022_Store@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="custtelp" class="form-label"><b>Phone Number</b></label>
                    <input type="text" class="form-control" id="custtelp" name="custtelp" style="color: white; background-color: #CCA885; border-color: #CCA885; border-width: 3px">
                </div>
                <div class="mb-3">
                    <label for="custaddress" class="form-label"><b>Address</b></label>
                    <textarea class="form-control" id="custaddress" name="custaddress" rows="3" style="border-color: #97714A; border-width: 3px"></textarea>
                </div>
            </div>
            <!-- Order -->
            <center>
                <hr style="margin: 20px 30px; width: 65%">    
            </center>
            <div class="container" style="margin: 30px; padding: 10px 250px">
                <div class="mb-3">
                    <label for="product" class="form-label"><b>Product</b></label>
                    <select class="form-select" aria-label="Default select example" name="product">
                        <?php
                            $nameproduct = array("Bucket Hat", "Polo Shirt", "Knit Sweater", "Plaid Dress", "Highwaist Jeans", "Casual Sneakers"); 
                            if($idx>-1){
                        ?>
                            <option selected value="<?= $idx ?>"><?= $nameproduct[$idx] ?></option>
                        <?php
                            }
                            else{
                        ?>
                            <option selected value="-1">-- Select 022 Store Product --</option>
                            <option value="0">Bucket Hat</option>
                            <option value="1">Polo Shirt</option>
                            <option value="2">Knit Sweater</option>
                            <option value="3">Plaid Dress</option>
                            <option value="4">Highwaist Jeans</option>
                            <option value="5">Casual Sneakers</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label"><b>Quantity</b></label>
                    <input type="number" class="form-control" id="quantity" name="quantity" style="color: white; background-color: #CCA885; border-color: #CCA885; border-width: 3px" min=1 max= 10>
                </div>
            </div>
            <center>
                <hr style="margin: 20px 30px; width: 65%">    
            </center>
            <div class="container" style="margin: 30px; padding: 10px 250px">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-outline-dark" type="submit">Order</button>
                    <button class="btn btn-light" type="reset">Reset</button>
                </div>
            </div>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="text p-3" style="background-color: #CCA885;">
    <center>© 2023</center>
  </div>
</footer>
</html>