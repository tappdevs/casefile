<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dhara $dhara
 */
?>
<div class="card">
  <div class="card-header">
    <ul class="nav side-nav">
      <li class="nav-item"><?= $this->Html->link(__('List Dharas'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
    </ul>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-8">
        <?= $this->Form->create($dhara) ?>
        <fieldset>
          <legend><?= __('Add Dhara') ?></legend>
          <div class="form-group">
            <?= $this->Form->control('number', ['class' => 'form-control']); ?>
          </div>

          <div class="form-group">
            <?= $this->Form->control('detail', ['class' => 'form-control', 'placeholder' => 'ঘটনার স্থান', 'autofocus']); ?>
          </div>
          <div class="form-group">
            <?= $this->Form->control('status', [
              'class' => 'custom-control-input',
              'templates' => [
                'inputContainer' => '<div class="custom-control custom-checkbox input {{type}}{{required}}">{{content}}</div>',
                'nestingLabel' => '{{input}} <label{{attrs}} class="custom-control-label">{{text}}</label>'
              ],
            ]) ?>

          </div>
        </fieldset>
        <div class="form-group">
          <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        </div>

      </div>
    </div>
    <?= $this->Form->end() ?>
  </div>
</div>