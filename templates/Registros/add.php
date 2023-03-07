<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registro $registro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Lista Registros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registros form content">
            <?= $this->Form->create($registro) ?>
            <fieldset>
                <legend><?= __('Agregar Registro') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('celular');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar registro')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
