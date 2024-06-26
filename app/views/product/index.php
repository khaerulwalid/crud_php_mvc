<div class="container mt-4">
    <h1>Data Product</h1>
    <!-- Button trigger modal -->

    <div class="row">
        <div class="col-lg-6">
            <?php Flaser::flash() ?>
        </div>
    </div>

    <a href="<?= BASE_URL ?>product/create"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Input data
    </button></a>

    <div class="mt-3" style="width: 30%;">
        <ul class="list-group">
            
            <?php $no = 1; ?>
                <?php foreach ($data["product"] as $product) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $product->name ?>
                            <div class="d-flex justify-content-between align-items-center gap-2">
                                <a href="<?= BASE_URL ?>product/detail/<?= $product->id ?>" class="badge bg-primary">detail</a>

                                <a href="<?= BASE_URL ?>product/delete/<?= $product->id ?>" class="badge bg-danger" onclick="return confirm('Yakin mau dihapus ?')">delete</a>

                                <a href="<?= BASE_URL ?>product/edit/<?= $product->id ?>" class="badge bg-warning">edit</a>
                            </div>
                        </li>
            <?php $no++; endforeach; ?>
    
        </ul>
    </div>

</div>