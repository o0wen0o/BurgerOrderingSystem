<?php
if ($i % 4 == 0) {
    if ($i > 0) {
        echo "</tr>";
    }
    echo "<tr>";
}

$id = $row["id"];
$image_name = $row["image_name"];
$item_name = $row["item_name"];
$unit_price = $row["unit_price"];

?>
<!-- set item_id to all table data for data echo -->
<!-- click on table data will pop addToCartModal -->
<td id="<?php echo $id ?>" class="p-2" data-bs-toggle="modal" data-bs-target="#addToCartModal"
    data-bs-image="<?php echo $image_name ?>"
    data-bs-item_name="<?php echo $item_name ?>"
    data-bs-unit_price="<?php echo $unit_price ?>">

    <img src="../images/item/<?php echo $image_name ?>" alt="item_image" class="rounded" width="200" height="160">
    <div>
        <?php echo $item_name; ?>
    </div>
    <div class="fw-bold pb-5">
        RM<?php echo $unit_price; ?>
    </div>
</td>

