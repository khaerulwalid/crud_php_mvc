<?php
    $data = $data["product"]
?>

<div class="container mt-4">
    <h1>Data Product</h1>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://fastly.picsum.photos/id/165/200/200.jpg?hmac=tQGrY9pm5ze9soSsZ5CNBt87zqnHfFwdPv_khau12Sw" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $data["name"] ?></h5>
            <p class="card-text"><?= $data["description"] ?></p>
            <p class="card-text">Harga : Rp. <?= $data["price"] ?></p>
            <p class="card-text">Stock : Rp. <?= $data["qty"] ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>