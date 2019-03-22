<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ashami $ashami
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ashami'), ['action' => 'edit', $ashami->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ashami'), ['action' => 'delete', $ashami->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ashami->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ashamis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ashami'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ashamis view large-9 medium-8 columns content">
    <h3><?= h($ashami->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ashami->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Father') ?></th>
            <td><?= h($ashami->father) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mother') ?></th>
            <td><?= h($ashami->mother) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($ashami->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ashami->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ashami->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($ashami->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $ashami->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Mamlas') ?></h4>
        <?php if (!empty($ashami->mamlas)): ?>
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
            <?php foreach ($ashami->mamlas as $mamlas): ?>
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
