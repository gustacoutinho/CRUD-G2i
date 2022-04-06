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
            <?= $this->Html->link(__('Editar Marca'), ['action' => 'edit', $brand->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Marca'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="brands view content">
            <h3><?= h($brand->descricao) ?></h3>
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
            </div>
        </div>
    </div>
</div>
