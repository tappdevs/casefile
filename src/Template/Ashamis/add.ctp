<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ashami $ashami
 */
?>
<div class="card">
  <div class="card-header">
    <ul class="nav side-nav">
      <li class="nav-item"><?= $this->Html->link(__('List Ashamis'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
    </ul>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-8">
        <?= $this->Form->create($ashami) ?>
        <fieldset>
          <legend><?= __('আসামী সংরক্ষন করুন') ?></legend>

          <div class="form-group">
            <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'আসামীর নাম লিখুন']) ?>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <?= $this->Form->control('father', ['class' => 'form-control', 'placeholder' => 'পিতার নাম']); ?>
            </div>
            <div class="form-group col-md-6">
              <?= $this->Form->control('mother', ['class' => 'form-control', 'placeholder' => 'মাতার নাম']); ?>
            </div>
          </div>

          <div class="form-group">
            <?= $this->Form->control('address', ['class' => 'form-control', 'placeholder' => 'মাতার নাম']); ?>
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
          <?= $this->Form->button(__('সংরক্ষন করুন'), ['class' => 'btn btn-primary']) ?>
        </div>

      </div>
    </div>
    <?= $this->Form->end() ?>
  </div>
</div>