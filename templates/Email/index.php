<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Email[]|\Cake\Collection\CollectionInterface $email
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Email'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('message_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('message') ?></th>
        <th scope="col"><?= $this->Paginator->sort('mailingdate') ?></th>
        <th scope="col"><?= $this->Paginator->sort('starred_status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('sender_email') ?></th>
        <th scope="col"><?= $this->Paginator->sort('reciever_email') ?></th>
        <th scope="col"><?= $this->Paginator->sort('inbox_status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('sent_status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('draft_status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('trash_status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('email_subject') ?></th>
        <th scope="col"><?= $this->Paginator->sort('read_status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('delete_status') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($email as $email) : ?>
        <tr>
            <td><?= $this->Number->format($email->message_id) ?></td>
            <td><?= h($email->message) ?></td>
            <td><?= h($email->mailingdate) ?></td>
            <td><?= $this->Number->format($email->starred_status) ?></td>
            <td><?= h($email->sender_email) ?></td>
            <td><?= h($email->reciever_email) ?></td>
            <td><?= $this->Number->format($email->inbox_status) ?></td>
            <td><?= $this->Number->format($email->sent_status) ?></td>
            <td><?= $this->Number->format($email->draft_status) ?></td>
            <td><?= $this->Number->format($email->trash_status) ?></td>
            <td><?= h($email->email_subject) ?></td>
            <td><?= $this->Number->format($email->read_status) ?></td>
            <td><?= $this->Number->format($email->delete_status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $email->message_id], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $email->message_id], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $email->message_id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->message_id), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('«', ['label' => __('First')]) ?>
        <?= $this->Paginator->prev('‹', ['label' => __('Previous')]) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('›', ['label' => __('Next')]) ?>
        <?= $this->Paginator->last('»', ['label' => __('Last')]) ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
