<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mamla $mamla
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mamla'), ['action' => 'edit', $mamla->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mamla'), ['action' => 'delete', $mamla->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mamla->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mamlas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mamla'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Badis'), ['controller' => 'Badis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Badi'), ['controller' => 'Badis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ashamis'), ['controller' => 'Ashamis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ashami'), ['controller' => 'Ashamis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dharas'), ['controller' => 'Dharas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dhara'), ['controller' => 'Dharas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mamlas view large-9 medium-8 columns content">
    <h3><?= h($mamla->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Badi') ?></th>
            <td><?= $mamla->has('badi') ? $this->Html->link($mamla->badi->name, ['controller' => 'Badis', 'action' => 'view', $mamla->badi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($mamla->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mamla->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mamla->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($mamla->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $mamla->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($mamla->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ashamis') ?></h4>
        <?php if (!empty($mamla->ashamis)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Father') ?></th>
                <th scope="col"><?= __('Mother') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mamla->ashamis as $ashamis): ?>
            <tr>
                <td><?= h($ashamis->id) ?></td>
                <td><?= h($ashamis->name) ?></td>
                <td><?= h($ashamis->father) ?></td>
                <td><?= h($ashamis->mother) ?></td>
                <td><?= h($ashamis->address) ?></td>
                <td><?= h($ashamis->created) ?></td>
                <td><?= h($ashamis->updated) ?></td>
                <td><?= h($ashamis->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ashamis', 'action' => 'view', $ashamis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ashamis', 'action' => 'edit', $ashamis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ashamis', 'action' => 'delete', $ashamis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ashamis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Dharas') ?></h4>
        <?php if (!empty($mamla->dharas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mamla->dharas as $dharas): ?>
            <tr>
                <td><?= h($dharas->id) ?></td>
                <td><?= h($dharas->number) ?></td>
                <td><?= h($dharas->detail) ?></td>
                <td><?= h($dharas->created) ?></td>
                <td><?= h($dharas->updated) ?></td>
                <td><?= h($dharas->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dharas', 'action' => 'view', $dharas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dharas', 'action' => 'edit', $dharas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dharas', 'action' => 'delete', $dharas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dharas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
