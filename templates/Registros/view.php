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
            <?= $this->Html->link(__('Editar Registro'), ['action' => 'edit', $registro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Registro'), ['action' => 'delete', $registro->id], ['confirm' => __('¿Estas seguro de eliminar el registro # {0}?', $registro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista Registros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Registro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registros view content">
            <h3><?= h($registro->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($registro->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($registro->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($registro->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($registro->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registro->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
