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
$descp = array(
    "Made from the best quality. Nothing goes with a sunny afternoon golf round better than a bucket hat. This one from adidas provides plenty of shade with its all-around brim. XXXXX absorbs moisture to keep you dry from first tee to final putt. Made with a series of recycled materials, and at least 40% recycled content, this product represents just one of our solutions to help end plastic waste.",
    "Step up the tee box feeling relaxed. This adidas golf polo shirt is made of heathered fabric for a laid-back look. AEROREADY manages sweat to keep you dry so you can concentrate on your drives and putts. Made with 100% recycled materials, this product represents just one of our solutions to help end plastic waste.",
    "High Quality Soft Cotton organic cotton, super soft and cozy, The solid pullover sweaters are a must-have closet staple to your wardrobe. It's a versatile piece that looks great with leggings, jeans, or sweatpants. Can also be worn outside with a jacket or coat; Combine a classic look with the cream comfort of fleece, so you can possess both warmth and beauty in winter!",
    "55% Cotton, 45% Viscose Rayon. Imported. Pull On closure. Machine Wash. CRAFTED FOR COMFORT: Dress-easy in the all-day comfort of this dress. MACHINE WASHABLE: Easy to care for; this tee can be washed with like colors on the gentle cycle. MEET THE NEW ESSENTIALS: Made from responsibly sourced materials and with the Gap ethos in mind; these everyday essentials come in a wide range of fits; sizes; cuts; colors; and prints.",
    "SKINNY FIT: Snug fit through hip, thigh, and leg. Mid rise, sits below the natural waist. ESSENTIAL SKINNY JEAN: These high-rise skinny jeans will be your go-to wardrobe essential. The slim and flattering silhouette allows for endless styling options. High rise waist allows for easy pairing with cropped silhouettes. DETAILS: Authentic five-pocket styling, zip fly, shank button closure, and skinny leg. Available in short, regular, and tall inseam lengths. All denim is unique and will vary in color due to wash, finish, and dye.",
    "The entire outsole is made of highly elastic and soft non-slip EVA material. The outsole has good anti-slip performance, which can ensure your safety and comfort when walking. Moreover, the excellent wear resistance also makes this men's mesh shoes more durable. You can wear these men's sneakers for walking, parties, etc. It is a pair of casual shoes that a man is worth choosing, and it is also a great gift for him."
);
$i = $_GET["index"];
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
        <br>
        <br>
        <br>
        <div class="container" style="margin: 20px; height: 400px; ">
            <div class="card mb-3" style="max-width: auto; box-shadow:7px 7px #CCA885">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $pictproduct[$i] ?>" class="img-fluid rounded-start" alt="..." style="aspect-ratio:7/6; object-fit: cove;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $nameproduct[$i] ?></b></h5>
                            <p class="card-text"><?= $descp[$i] ?></p>
                            <p class="card-text"><small class="text-body-secondary">Order It NOW!</small></p>
                            <a href="order.php?index=<?= $i ?>" class="btn" style="background-color: #97714A; color: white">Order</a>

                        </div>
                    </div>
                </div>
            </div>
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