<?php
    $data = $data["product"];
?>

<div class="container mt-4">
    <h1>Edit Product</h1>

    <div class="row">
        <div class="col-6">
            <form action="<?= BASE_URL ?>product/update" method="post">

                <input type="hidden" name="id" value="<?= $data->id ?>">
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $data->name ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="<?= $data->description ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="<?= $data->price ?>">
                </div>

                <div class="form-group mb-2">
                    <label for="qty">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter qty" value="<?= $data->qty ?>">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>