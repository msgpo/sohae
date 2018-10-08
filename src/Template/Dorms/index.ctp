<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dorm[]|\Cake\Collection\CollectionInterface $dorms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dorm'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dorms index large-9 medium-8 columns content">
    <h3><?= __('Dorms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dorm_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dorm_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dorm_latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dorm_longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dorms as $dorm): ?>
            <tr>
                <td><?= $this->Number->format($dorm->id) ?></td>
                <td><?= h($dorm->dorm_name) ?></td>
                <td><?= h($dorm->dorm_type) ?></td>
                <td><?= $this->Number->format($dorm->dorm_latitude) ?></td>
                <td><?= $this->Number->format($dorm->dorm_longitude) ?></td>
                <td><?= h($dorm->active) ?></td>
                <td><?= h($dorm->created) ?></td>
                <td><?= h($dorm->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dorm->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dorm->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dorm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dorm->id)]) ?>
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
