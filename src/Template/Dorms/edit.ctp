<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dorm $dorm
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dorm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dorm->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dorms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dorms form large-9 medium-8 columns content">
    <?= $this->Form->create($dorm) ?>
    <fieldset>
        <legend><?= __('Edit Dorm') ?></legend>
        <?php
            echo $this->Form->control('dorm_name');
            echo $this->Form->control('dorm_type');
            echo $this->Form->control('dorm_latitude');
            echo $this->Form->control('dorm_longitude');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
