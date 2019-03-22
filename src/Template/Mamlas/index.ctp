<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mamla[]|\Cake\Collection\CollectionInterface $mamlas
 */
?>
<div class="card">
  <div class="card-header">
    <ul class="nav side-nav">
      <li class="nav-item"><?= $this->Html->link(__('New Mamla'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Badis'), ['controller' => 'Badis', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Badi'), ['controller' => 'Badis', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Ashamis'), ['controller' => 'Ashamis', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Ashami'), ['controller' => 'Ashamis', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('List Dharas'), ['controller' => 'Dharas', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
      <li class="nav-item"><?= $this->Html->link(__('New Dhara'), ['controller' => 'Dharas', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
    </ul>
  </div>

  <div class="card-body">
    <h3><?= __('Mamlas') ?></h3>
    <table class="table table-striped table-bordered table-sm">
      <thead>
      <tr>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('mamla_no') ?></th>
        <th scope="col"><?= $this->Paginator->sort('badis_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('location') ?></th>
        <th scope="col" class="text-center"><?= $this->Paginator->sort('status') ?></th>
        <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($mamlas as $mamla): ?>
        <tr>
          <td class="text-center"><?= $this->Number->format($mamla->id) ?></td>
          <td><?= $this->Number->format($mamla->mamla_no) ?></td>
          <td class="text-truncate"><?= $mamla->has('badi') ? $this->Html->link($mamla->badi->name, ['controller' => 'Badis', 'action' => 'view', $mamla->badi->id]) : '' ?></td>
          <td><?= h($mamla->location) ?></td>
          <td class="text-center"><?= $mamla->status == 1 ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-close text-danger"></i>'; ?></td>
          <td class="actions text-center">
            <div class="btn-group" role="group">
              <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $mamla->id], ['escape' => false, 'class' => 'btn btn-success btn-sm']) ?>
              <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $mamla->id], ['escape' => false, 'class' => 'btn btn-primary btn-sm']) ?>
              <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $mamla->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mamla->id), 'escape' => false, 'class' => 'btn btn-danger btn-sm']) ?>

            </div>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

    <!--<nav>
      <ul class="pagination">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
  <span class="page-link">
    2
    <span class="sr-only">(current)</span>
  </span>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>-->


    <nav>
      <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous'), ['class' => 'page-item']) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </nav>
  </div>
</div>
