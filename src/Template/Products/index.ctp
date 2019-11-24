<!-- File: src/Template/Articles/index.ctp -->

<h1>Products</h1>

<div class="row">
    <?php foreach ($products as $product):?>
    <div class="col-sm-6 col-md-4">
        <div class="">
        <?= $this->Html->image($product->image,[
                    'url' => ['controller' => 'Products', 'action' => 'view', $product->slug]
                ]);?>

            <div class="caption">
                <h5>
                <small><?= $product->name ?></small>
                </h5>
                <h5>
                    Price: $
                    <small><?= $product->price ?></small>
                </h5>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>