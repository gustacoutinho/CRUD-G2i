<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand $brand
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções') ?></h4>
            <?= $this->Html->link(__('Editar Marcas'), ['action' => 'edit', $brand->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Marcas'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="brands view content">
            <h3><?= h($brand->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($brand->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($brand->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cars') ?></h4>
                <?php if (empty($brand->cars)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Brand Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($brand->cars as $cars) : ?>
                        <tr>
                            <td><?= h($cars->id) ?></td>
                            <td><?= h($cars->name) ?></td>
                            <td><?= h($cars->year) ?></td>
                            <td><?= h($cars->brand_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
