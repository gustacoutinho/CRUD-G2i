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
            <?= $this->Html->link(__('Remover'), 'javascript:void(0)',["data-target" => "#getDelete", "data-toggle" => "modal", "onclick" => "coletarDados('brands', ".$brand->id.")", "class" => "adicionar"], ) ?>
            <?= $this->Html->link(__('Listar Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="brands form content">
            <?= $this->Form->create($brand) ?>
            <fieldset>
                <legend><?= __('Editar Marca') ?></legend>
                <?php
                    echo $this->Form->control('descricao', ['label'=>"Descrição"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
