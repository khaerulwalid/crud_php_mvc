<div class="container mt-4">
    <h1>Create Product</h1>

    <div class="row">
        <div class="col-6">
            <form action="<?= BASE_URL ?>product/posting" method="post">
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>

                <div class="form-group mb-2">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                </div>

                <div class="form-group mb-2">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                </div>

                <div class="form-group mb-2">
                    <label for="qty">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter qty">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>