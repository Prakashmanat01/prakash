<?php
ob_start();
?>

<main id="main" class="main">
    <?php
    // session_start();
    // if (isset($_SESSION['product'])) {
    ?>
    <!-- <div class="alert alert-primary alert-dismissible fade show" id="alert" role="alert"> -->
    <?php //echo $_SESSION['product']; 
    ?>
    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
    <!-- </div> -->
    <?php
    // unset($_SESSION['product']);
    // } 
    ?>
    <div class="pagetitle">
        <h1>Order</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="display:inline;">Orders</h5>

                        <div id="fetch_orders" style="margin-top:20px">
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