<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dhara $dhara
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dhara->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dhara->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dharas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dharas form large-9 medium-8 columns content">
    <?= $this->Form->create($dhara) ?>
    <fieldset>
        <legend><?= __('Edit Dhara') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('detail');
            echo $this->Form->control('status');
            echo $this->Form->control('mamlas._ids', ['options' => $mamlas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
