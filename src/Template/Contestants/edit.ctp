<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contestant $contestant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contestant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contestant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contestants'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contestants form large-9 medium-8 columns content">
    <?= $this->Form->create($contestant) ?>
    <fieldset>
        <legend><?= __('Edit Contestant') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('school', ['empty' => true]);
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
