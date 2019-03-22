<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mamla $mamla
 */
?>
<div class="card">
  <div class="card-header">
    <ul class="nav side-nav">
      <li class="nav-item"><?= $this->Html->link(__('List Mamlas'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Badis'), ['controller' => 'Badis', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Badi'), ['controller' => 'Badis', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Ashamis'), ['controller' => 'Ashamis', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Ashami'), ['controller' => 'Ashamis', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Dharas'), ['controller' => 'Dharas', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Dhara'), ['controller' => 'Dharas', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
    </ul>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-8">
        <?= $this->Form->create($mamla) ?>
        <fieldset>
          <legend><?= __('Add Mamla') ?></legend>
          <div class="form-row">
            <div class="form-group col-md-3">
              <?= $this->Form->control('badis_id', ['options' => $badis, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group col-md-9">
              <?= $this->Form->control('location', ['class' => 'form-control', 'placeholder' => 'ঘটনার স্থান', 'autofocus']); ?>
            </div>
          </div>
          <div class="form-group">
            <?= $this->Form->control('body', ['class' => 'form-control', 'placeholder' => 'মামলার বিবরনী']) ?>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <?= $this->Form->control('as  hamis._ids', ['options' => $ashamis, 'class' => 'form-control']); ?>
            </div>
            <div class="form-group col-md-6">
              <?= $this->Form->control('dharas._ids', ['options' => $dharas, 'class' => 'form-control']); ?>
            </div>
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
          <div class="form-group">
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
          </div>

        </fieldset>

      </div>
    </div>
    <?= $this->Form->end() ?>
  </div>
</div>