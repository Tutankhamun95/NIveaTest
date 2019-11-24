<div class="row">
    <div class="col-lg-12">
        
    </div>
</div>
 
<div class="row">
    <div class="col-lg-4 col-md-4">
    <?= $this->Html->image($product->image);?>
    </div>
 
    <div class="col-lg-8 col-md-8">
        <h1>
        <?= $product->name ?>
        </h1>
        <h2>
            Price: $
            <?= $product->price ?>
        </h2>
        <p>
            <?= $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?>
            <?= $this->Form->hidden('product_id',array('value'=>$product['Product']['id']))?>
            <?= $this->Form->submit('Add to cart',array('class'=>'btn-success btn btn-lg'));?>
            <?= $this->Form->end();?>
        </p>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#add-form').submit(function(e){
        e.preventDefault();
        var tis = $(this);
        $.post(tis.attr('action'),tis.serialize(),function(data){
            $('#cart-counter').text(data);
        });
    });
});
</script>