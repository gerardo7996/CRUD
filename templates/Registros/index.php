<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Registro> $registros
 */
?>
<div class="registros index content">
    <?= $this->Html->link(__('Nuevo Registro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro): ?>
                <tr>
                    <td><?= $this->Number->format($registro->id) ?></td>
                    <td><?= h($registro->nombre) ?></td>
                    <td><?= h($registro->apellidos) ?></td>
                    <td><?= h($registro->correo) ?></td>
                    <td><?= h($registro->celular) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $registro->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $registro->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $registro->id], ['confirm' => __('¿Estas seguro de eliminar el registro # {0}?', $registro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de {{count}} en total')) ?></p>
    </div>
</div>
