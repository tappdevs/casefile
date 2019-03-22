<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ashami[]|\Cake\Collection\CollectionInterface $ashamis
 */
?>
<div class="card">
  <div class="card-header">
    <ul class="nav side-nav">
        <li class="nav-item"><?= $this->Html->link(__('New Ashami'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Mamlas'), ['controller' => 'Mamlas', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('New Mamla'), ['controller' => 'Mamlas', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
    </ul>
  </div>

  <div class="card-body">

  <h3><?= __('Ashamis') ?></h3>
    <table class="table table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col" class="text-center"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('father') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mother') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="text-center"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ashamis as $ashami): ?>
            <tr>
                <td class="text-center"><?= $this->Number->format($ashami->id) ?></td>
                <td><?= h($ashami->name) ?></td>
                <td><?= h($ashami->father) ?></td>
                <td><?= h($ashami->mother) ?></td>
                <td><?= h($ashami->address) ?></td>
                <td><?= h($ashami->created) ?></td>
                <td><?= h($ashami->updated) ?></td>
              <td class="text-center"><?= $ashami->status == 1 ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-close text-danger"></i>'; ?></td>
                <td class="actions text-center">
                  <div class="btn-group" role="group">
                    <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $ashami->id], ['escape' => false, 'class' => 'btn btn-success btn-sm']) ?>
                    <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $ashami->id], ['escape' => false, 'class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $ashami->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ashami->id), 'escape' => false, 'class' => 'btn btn-danger btn-sm']) ?>
                  </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
