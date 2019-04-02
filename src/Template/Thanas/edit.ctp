<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thana $thana
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thana->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thana->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Thanas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="thanas form large-9 medium-8 columns content">
    <?= $this->Form->create($thana) ?>
    <fieldset>
        <legend><?= __('Edit Thana') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
