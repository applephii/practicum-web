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
                        <a class="nav-link" aria-current="page" href="order.php?index=-1">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active disabled" aria-current="page" aria-disabled="true">Payment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Check if already choose the product -->
    <?php
        $nameproduct = array("Bucket Hat", "Polo Shirt", "Knit Sweater", "Plaid Dress", "Highwaist Jeans", "Casual Sneakers");
        $priceproduct = array(199800, 89000, 369500, 124200, 105600, 259900);
        $name=$_POST["custname"];
        $address=$_POST["custaddress"];
        $email=$_POST["custemail"];
        $telp=$_POST["custtelp"];
        $qty=$_POST["quantity"];
        $cek=$_POST["product"];
        $sum=$qty*$priceproduct[$cek];
        $tax=10/100*$sum;
        $total=$sum+$tax;
        if($cek==-1){ 
    ?>
        <div class="container"  style="padding: 182px 0; display: fixed; text-align: center;">
            <h2>Product is Invalid!</h2>
            <p>Please return to Order Form and check again your order!</p>
        </div>  
    <?php }
        else{ 
    ?>
        <!-- Confirm Payment -->
        <div style="margin: 30px 70px; text-align: center;">
            <h2>Confirm Payment</h2>
        </div>
        <div style="margin: 0 270px; margin-bottom: 50px; padding: 15px 34px; box-shadow:0 4px 10px 0 #CCA885, 0 6px 13px 0 #CCA885; border-radius: 7px">
            <div>
                <h5 style="text-align: center; margin: 15px 0;"><b>Receipt Information</b></h5>
                <div class="container" style="margin: 10px; padding: 40px 15px;">
                    <div class="row">
                        <div class="col-3"><b>Name</b></div>
                        <div class="col-1">:</div>
                        <div class="col"><?= $name ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Email</b></div>
                        <div class="col-1">:</div>
                        <div class="col"><?= $email ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Phone Number</b></div>
                        <div class="col-1">:</div>
                        <div class="col"><?= $telp ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Address</b></div>
                        <div class="col-1">:</div>
                        <div class="col"><?= $address ?></div>
                    </div>
                </div>
            </div>
            <hr style="margin: 35px">
            <div>
                <h5 style="text-align: center; margin: 15px 0;"><b>Order Detail</b></h5>
                <div class="container" style="margin: 10px; padding: 40px 15px;">
                    <div class="row">
                        <div class="col-3"><b>Product</b></div>
                        <div class="col-1">:</div>
                        <div class="col"><?= $nameproduct[$cek] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Price</b></div>
                        <div class="col-1">:</div>
                        <div class="col">Rp<?= number_format($priceproduct[$cek],2,",",".") ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3"><b>Quantity</b></div>
                        <div class="col-1">:</div>
                        <div class="col"><?= $qty ?></div>
                    </div>
                </div>
            </div>
            <div style="background-color: #97714A; text-align:center; color: white; padding: 20px; margin: 0 20px; border-radius: 10px">
                <p style="margin: 0">Total Payment (include tax 10%)</p>
                <p style="font-size: 40px; margin: 0"><b>Rp<?=number_format($total,2, ",", ".") ?></b></p>
            </div>
            <div style="margin: 40px 20px;">
                <form action="payment_status.php" method="POST">
                    <div class="mb-3">
                        <label for="payment" class="form-label"><b>Pay Amount</b></label>
                        <input type="text" class="form-control" id="payment" name="payment" style="border-color: #97714A; border-width: 3px">
                        <input type="hidden" name="tpay" value="<?php echo "$total" ?>">
                    </div>
                    <div class="d-grid gap-2" style="margin: 50px 0">
                        <button class="btn btn-danger" type="submit">Confirm</button>
                        <button class="btn btn-primary" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="text p-3" style="background-color: #CCA885;">
    <center>© 2023</center>
  </div>
</footer>
</html>