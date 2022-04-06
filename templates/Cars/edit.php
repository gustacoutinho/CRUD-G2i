<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var string[]|\Cake\Collection\CollectionInterface $brands
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções') ?></h4>
            <?= $this->Html->link(__('Remover'), 'javascript:void(0)',["data-target" => "#getDelete", "data-toggle" => "modal", "onclick" => "coletarDados('cars', ".$car->id.")", "class" => "adicionar"]) ?>
            <?= $this->Html->link(__('Listar Carros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars form content">
            <?= $this->Form->create($car) ?>
            <fieldset>
                <legend><?= __('Editar Carros') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label' => 'Nome']);
                    echo $this->Form->control('year', ['label' => 'Ano de Fabricação']);
                    echo $this->Form->control('brand_id', ['options' => $brands, 'empty' => true, 'label' => 'Marca']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar Alterações')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
