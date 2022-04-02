<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car[]|\Cake\Collection\CollectionInterface $cars
 */
 
?>
<div class="cars index content">
    <?= $this->Html->link(__('Novo carro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Ano de Fabricação') ?></th>
                    <th><?= $this->Paginator->sort('brand_id', ['label' => 'Marca']) ?></th>
                    <th class="actions"><?= __('Opções') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car): ?>
                <tr>
                    <td><?= $this->Number->format($car->id) ?></td>
                    <td><?= h($car->name) ?></td>
                    <td><?= h($car->year) ?></td>
                    <td><?= $car->has('brand') ? $this->Html->link($car->brand->descricao, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $car->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $car->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, listando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>
