<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Badi $badi
 */
?>

<div class="card">
  <div class="card-header">
    <ul class="nav side-nav">
      <li class="nav-item"><?= $this->Html->link(__('New Badi'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $badi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $badi->id), 'class' => 'nav-link text-danger']) ?></li>
    </ul>
  </div>


  <div class="card-body">
    <?= $this->Form->create($badi) ?>
    <fieldset>
      <legend><?= __('Edit Badi') ?></legend>
      <div class="form-row">
        <div class="form-group col-md-3">
          <?= $this->Form->control('name', ['class' => 'form-control']); ?>
        </div>
        <div class="form-group col-md-9">
          <?= $this->Form->control('identity_no', ['class' => 'form-control']); ?>
        </div>
      </div>
      <div class="form-group">
        <?= $this->Form->control('address', ['class' => 'form-control']); ?>
      </div>

      <div class="form-group">
        <?= $this->Form->control('status'); ?>

        <?= $this->Form->control('status', [
          'class' => 'custom-control-input',
          'templates' => [
            'inputContainer' => '<div class="custom-control custom-checkbox input {{type}}{{required}}">{{content}}</div>',
            'nestingLabel' => '{{input}} <label{{attrs}} class="custom-control-label">{{text}}</label>'
          ],
        ]) ?>
      </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
  </div>
</div>
