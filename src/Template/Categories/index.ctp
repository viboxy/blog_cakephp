<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actions large-2 medium-3 columns">
    <h3><?= __('Categories') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="categories index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Parent Id</th>
                <th>Lft</th>
                <th>Rght</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created</th>
                <th class="actions"><?= __('Action') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category->id ?></td>
                <td><?= $category->parent_id ?></td>
                <td><?= $category->lft ?></td>
                <td><?= $category->rght ?></td>
                <td><?= h($category->name) ?></td>
                <td><?= h($category->description) ?></td>
                <td><?= h($category->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure want to delete #{0}', $category->id)]) ?>
                    <?= $this->Form->postLink(__('Move up'), ['action' => 'moveUp', $category->id], ['confirm' => __('Are you sure want to move up #{0}', $category->id)]) ?>
                    <?= $this->Form->postLink(__('Move Down'), ['action' => 'moveDown', $category->id], ['confirm' => __('Are you sure want to move down #{0}', $category->id)]) ?>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>