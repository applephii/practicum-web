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

    <!-- Check Payment -->
    <?php
    $pay = $_POST["payment"];
    $total = $_POST["tpay"];
    $change = floor($pay - $total);

    if ($pay < $total) {
    ?>
        <div class="container" style="padding: 182px 0; display: fixed; text-align: center;">
            <h2>Your payment is decline!</h2>
            <p>Please return to confirmation page and pay the correct amount.</p>
        </div>
    <?php } else {
    ?>
        <div>
            <div style="margin: 30px; padding: 20px; text-align: center;">
                <h2>Payment Successful!</h2>
                <p>Here is your change.</p>
            </div>
            <div class="container" style="margin: 0 70px; margin-top: 7px; margin-bottom: 50px">
                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <tr>
                                <td><b>Total Price (include tax 10%)</b></td>
                                <td>Rp<?= number_format($total, 2, ",", ".") ?></td>
                            </tr>
                            <tr>
                                <td><b>Total Payment</b></td>
                                <td>Rp<?= number_format($pay, 2, ",", ".") ?></td>
                            </tr>
                            <tr>
                                <td><b>Change</b></td>
                                <td>Rp<?= number_format(($change), 2, ",", ".") ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col" style="margin-right: 40px">
                        <table class="table table-striped">
                            <tr>
                                <td><b>Nominal</b></td>
                                <td><b>Amount</b></td>
                            </tr>
                            <tr>
                                <td>100.000</td>
                                <td>
                                    <?php
                                    $a = 0;
                                    while ($change >= 100000) {
                                        $a++;
                                        $change -= 100000;
                                    }
                                    echo $a;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>50.000</td>
                                <td>
                                    <?php
                                    $b = 0;
                                    while ($change >= 50000) {
                                        $b++;
                                        $change -= 50000;
                                    }
                                    echo $b;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>20.000</td>
                                <td>
                                    <?php
                                    $c = 0;
                                    while ($change >= 20000) {
                                        $b++;
                                        $change -= 20000;
                                    }
                                    echo $c;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>10.000</td>
                                <td>
                                    <?php
                                   $d = 0;
                                   while ($change >= 10000) {
                                       $d++;
                                       $change -= 10000;
                                   }
                                   echo $d;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>5.000</td>
                                <td>
                                    <?php
                                    $e = 0;
                                    while ($change >= 5000) {
                                        $e++;
                                        $change -= 5000;
                                    }
                                    echo $e;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>2.000</td>
                                <td>
                                    <?php
                                        $f = 0;
                                        while ($change >= 2000) {
                                            $f++;
                                            $change -= 2000;
                                        }
                                        echo $f;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>1.000</td>
                                <td>
                                    <?php
                                    $g = 0;
                                    while ($change >=  1000) {
                                        $g++;
                                        $change -= 1000;
                                    }
                                    echo $g;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>500</td>
                                <td>
                                    <?php
                                    $h = 0;
                                    while ($change >= 500) {
                                        $h++;
                                        $change -= 500;
                                    }
                                    echo $h;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>200</td>
                                <td>
                                    <?php
                                    $i = 0;
                                    while ($change >= 200) {
                                        $i++;
                                        $change -= 200;
                                    }
                                    echo $i;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>100</td>
                                <td>
                                    <?php
                                    $j = 0;
                                    while ($change >= 100) {
                                        $j++;
                                        $change -= 100;
                                    }
                                    echo $j;
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
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