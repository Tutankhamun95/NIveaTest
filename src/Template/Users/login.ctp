<h2 style="text-align: center;">Login</h2>
<h2 style="text-align: center;"><?= $this->Html->link(__('Sign Up'), ['controller' => 'Users', 'action' => 'add']) ?></h2>
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
