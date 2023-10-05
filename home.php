<?php  
$pictproduct = array(
    "https://www.footlocker.id/media/catalog/product/cache/e81e4f913a1cad058ef66fea8e95c839/0/1/01-NIKE-E04HPNIK5-NIKDC3967010-Black.jpg",
    "https://img.ws.mms.shopee.co.id/0d1cb4ce6d616197e7f8b8ded3b046c0",
    "https://i.etsystatic.com/10665528/r/il/18711e/3489291821/il_fullxfull.3489291821_naz2.jpg",
    "https://di2ponv0v5otw.cloudfront.net/posts/2023/05/19/646827e456b2f8c1bf933cbd/m_646827e456b2f8c1bf933cbe.jpg",
    "https://lzd-img-global.slatic.net/g/p/4232aba9e0ab118161d63529e24bd943.jpg_960x960q80.jpg_.webp",
    "https://img.adidas.com.hk/resources/2022/11/22/16691120604576788.jpg?x-oss-process=image/resize,m_pad,w_2000,h_2000,limit_0,color_ffffff/quality,q_80"
);
$nameproduct = array("Bucket Hat", "Polo Shirt", "Knit Sweater", "Plaid Dress", "Highwaist Jeans", "Casual Sneakers");
$priceproduct = array(199800, 89000, 369500, 124200, 105600, 259900);
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
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php?index=-1">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Payment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- product -->
    <center>
        <div class="container" style="margin: 20px; padding: 90px">
            <table>
                <?php  
                    $idx=0;
                    for($i=0; $i<2; $i++){
                ?>
                    <tr class="grid gap-3">
                        <?php  
                            for($j=0; $j<3; $j++){
                        ?>
                            <td class="p-3 g-col-6">
                                <div class="card" style="width: 18rem; box-shadow:7px 7px #CCA885">
                                    <img src="<?= $pictproduct[$idx] ?>" class="card-img-top" alt="..." style="aspect-ratio:7/6; object-fit: cove;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $nameproduct[$idx] ?></h5>
                                        <p class="card-text">Rp<?=number_format($priceproduct[$idx],2, ",", ".")?></p>
                                        <a href="detail.php?index=<?= $idx ?>" class="btn" style="background-color: #F5D3B3; color: #97714A">Detail</a>
                                        <a href="order.php?index=<?= $idx ?>" class="btn" style="background-color: #97714A; color: white">Order</a>
                                    </div>
                                </div>
                            </td>
                        <?php $idx++; }
                        ?>
                    </tr>
                <?php } 
                ?>
            </table>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="text p-3" style="background-color: #CCA885;">
    <center>© 2023</center>
  </div>
</footer>
</html>