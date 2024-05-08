<div class="container mt-4">
    <h1>Data Product</h1>

    <div style="width: 30%;">
        <ul class="list-group">
            
            <?php $no = 1; ?>
                <?php foreach ($data["product"] as $product) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $product["name"] ?>
                            <a href="<?= BASE_URL ?>product/detail/<?= $product['id'] ?>" class="badge badge-primary bg-primary">detail</a>
                        </li>
            <?php $no++; endforeach; ?>
    
        </ul>
    </div>
</div>