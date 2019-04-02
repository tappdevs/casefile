<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thana[]|\Cake\Collection\CollectionInterface $thanas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Thana'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="thanas index large-9 medium-8 columns content">
    <h3><?= __('Thanas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thanas as $thana): ?>
            <tr>
                <td><?= $this->Number->format($thana->id) ?></td>
                <td><?= h($thana->name) ?></td>
                <td><?= $this->Number->format($thana->status) ?></td>
                <td><?= h($thana->created) ?></td>
                <td><?= h($thana->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $thana->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thana->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thana->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thana->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
