<?php
$pivo;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </body>
  
    <div class="brands index content">
    <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao', ['label'=>"Descrição"]) ?></th>
                    <th class="actions"><?= __('Opções') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($brands as $brand): ?>
                <tr>
                    <td><?= $this->Number->format($brand->id) ?></td>
                    <td><?= h($brand->descricao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $brand->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $brand->id]) ?>
                        <?= $this->Html->link(__('Remover'), 'javascript:void(0)',["data-target" => "#getBrandId", "data-toggle" => "modal", "onclick" => "coletarDados('brands', ".$brand->id.")", "class" => "adicionar"]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  

    <div class="paginator">
        <p><?= $this->Paginator->counter(__('Listando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>
