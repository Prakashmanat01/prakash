<?php
include "../config/connection.php";
?>

<table id="table" class="table table-striped">
    <thead>
        <tr>
            <th>Order Id</th>
            <th>User Id</th>
            <th>Order Date</th>
            <th>Order Price</th>
            <th>Status</th>
            <th>More Detials</th>
        </tr>
    </thead>
    <tbody id="status">
        <?php
        $sel = "select * from orders";
        $query = mysqli_query($conn, $sel);

        while ($order = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td class="order_id"><?= $order['id']; ?></td>
                <td><?= $order['user_id']; ?></td>
                <td><?= date('d-m-Y', strtotime($order['dt_created'])) ?></td>
                <td>₹<?= $order['order_price'] ?></td>
                <td>
                    <select class="form-select orderstatus" aria-label="Default select example" id="orderstatus" name="orderstatus" style="width:140px;">
                        <option value="0" <?php if ($order['status'] == "0") echo 'selected="selected"'; ?>>Pending</option>
                        <option value="1" <?php if ($order['status'] == "1") echo 'selected="selected"'; ?>>Dispatched</option>
                        <option value="2" <?php if ($order['status'] == "2") echo 'selected="selected"'; ?>>Delivered</option>
                    </select>
                </td>

                <td>
                    <a href="order_details.php?orderid=<?= $order['id'] ?>"><button type=" button" id="details" data-id="<?= $order['id'] ?>" class="btn btn-success">More Detials</button></a>

                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>
<script src="assets/js/dt.js"></script>