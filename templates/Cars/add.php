<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var \Cake\Collection\CollectionInterface|string[] $brands
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções') ?></h4>
            <?= $this->Html->link(__('Listar Carros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars form content"> 
            <?= $this->Form->create($car) ?>
            <fieldset>
                <legend><?= __('Novo Carro') ?></legend>
                <?php
                    echo $this->Form->control('name', ['placeholder'=>'Insira o nome do veículo', 'label'=> 'Nome']);
                    echo $this->Form->control('year', ['label' => 'Ano']);
                    echo $this->Form->control('brand_id', ['options' => $brands, 'empty' => true, 'label' => 'Marca']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
