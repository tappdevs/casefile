<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dhara $dhara
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dhara'), ['action' => 'edit', $dhara->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dhara'), ['action' => 'delete', $dhara->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dhara->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dharas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dhara'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dharas view large-9 medium-8 columns content">
    <h3><?= h($dhara->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($dhara->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dhara->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dhara->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($dhara->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $dhara->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($dhara->detail)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Mamlas') ?></h4>
        <?php if (!empty($dhara->mamlas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Badis Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dhara->mamlas as $mamlas): ?>
            <tr>
                <td><?= h($mamlas->id) ?></td>
                <td><?= h($mamlas->badis_id) ?></td>
                <td><?= h($mamlas->title) ?></td>
                <td><?= h($mamlas->body) ?></td>
                <td><?= h($mamlas->created) ?></td>
                <td><?= h($mamlas->updated) ?></td>
                <td><?= h($mamlas->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Mamlas', 'action' => 'view', $mamlas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Mamlas', 'action' => 'edit', $mamlas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mamlas', 'action' => 'delete', $mamlas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mamlas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
