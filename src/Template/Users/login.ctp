<form method="post">
<?= $this->Form->create() ?>
  

  <div class="container">
    <?= $this->Form->control('email') ?>

    
    <?= $this->Form->control('password') ?>
        
    <?= $this->Form->button('Login') ?>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
  <?= $this->Form->end() ?>
</form>
