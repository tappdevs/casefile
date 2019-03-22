<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ashami $ashami
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ashami->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ashami->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ashamis'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ashamis form large-9 medium-8 columns content">
    <?= $this->Form->create($ashami) ?>
    <fieldset>
        <legend><?= __('Edit Ashami') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('father');
            echo $this->Form->control('mother');
            echo $this->Form->control('address');
            echo $this->Form->control('status');
            echo $this->Form->control('mamlas._ids', ['options' => $mamlas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
