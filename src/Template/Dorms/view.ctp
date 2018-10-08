<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dorm $dorm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dorm'), ['action' => 'edit', $dorm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dorm'), ['action' => 'delete', $dorm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dorm->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dorms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dorm'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dorms view large-9 medium-8 columns content">
    <h3><?= h($dorm->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dorm Name') ?></th>
            <td><?= h($dorm->dorm_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dorm Type') ?></th>
            <td><?= h($dorm->dorm_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dorm->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dorm Latitude') ?></th>
            <td><?= $this->Number->format($dorm->dorm_latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dorm Longitude') ?></th>
            <td><?= $this->Number->format($dorm->dorm_longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dorm->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dorm->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $dorm->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
