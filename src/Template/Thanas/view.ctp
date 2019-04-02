<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thana $thana
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Thana'), ['action' => 'edit', $thana->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thana'), ['action' => 'delete', $thana->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thana->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Thanas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thana'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="thanas view large-9 medium-8 columns content">
    <h3><?= h($thana->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($thana->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($thana->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($thana->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($thana->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($thana->updated) ?></td>
        </tr>
    </table>
</div>
