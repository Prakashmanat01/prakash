<?php
ob_start();
?>
<?php
include "../config/connection.php";
$orderid = $_GET['orderid'];
$userid = $_GET['user_id'];

?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Order</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="display:inline;">Orders</h5>

                        <div id="fetch_order_details" style="margin-top:20px">
                            <table id="table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order Quantity</th>
                                        <th>Payment Method</th>
                                        <th>Product Name</th>
                                        <th>Product_Image</th>
                                        <th>Price(per piece)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($conn, "select orders_details.*,product.* from orders_details inner join product on orders_details.product_id=product.id where orders_details.order_id=$orderid");
                                    while ($order = mysqli_fetch_assoc($query)) {
                                        ?>
                                        <tr>

                                            <td><?= $order['order_quantity']; ?></td>
                                            <td><?= $order['payment_type']; ?></td>
                                            <td><?= $order['product_name'] ?></td>
                                            <td><img src="assets/img/products/<?= $order['product_image']; ?>" width="89px" height="85px" /> </td>
                                            <td>₹<?= $order['product_price'] ?></td>



                                        <?php } ?>
                                        </tr>
                                </tbody>
                            </table>
                            <script src="assets/js/dt.js"></script>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->
<?php

$page = ob_get_clean();
include  'layout.php';

?>