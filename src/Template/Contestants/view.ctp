<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contestant $contestant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contestant'), ['action' => 'edit', $contestant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contestant'), ['action' => 'delete', $contestant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contestant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contestants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contestant'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contestants view large-9 medium-8 columns content">
    <h3><?= h($contestant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contestant->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($contestant->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contestant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($contestant->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= h($contestant->school) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($contestant->image)); ?>
    </div>
</div>
