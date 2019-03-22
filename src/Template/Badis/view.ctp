<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Badi $badi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Badi'), ['action' => 'edit', $badi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Badi'), ['action' => 'delete', $badi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Badis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="badis view large-9 medium-8 columns content">
    <h3><?= h($badi->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($badi->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identity No') ?></th>
            <td><?= h($badi->identity_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($badi->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($badi->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($badi->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($badi->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $badi->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
