<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Email $email
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->message_id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->message_id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->message_id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Email'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Email'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="email view large-9 medium-8 columns content">
    <h3><?= h($email->message_id) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Message') ?></th>
                <td><?= h($email->message) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Mailingdate') ?></th>
                <td><?= h($email->mailingdate) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Sender Email') ?></th>
                <td><?= h($email->sender_email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Reciever Email') ?></th>
                <td><?= h($email->reciever_email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email Subject') ?></th>
                <td><?= h($email->email_subject) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Message Id') ?></th>
                <td><?= $this->Number->format($email->message_id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Starred Status') ?></th>
                <td><?= $this->Number->format($email->starred_status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Inbox Status') ?></th>
                <td><?= $this->Number->format($email->inbox_status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Sent Status') ?></th>
                <td><?= $this->Number->format($email->sent_status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Draft Status') ?></th>
                <td><?= $this->Number->format($email->draft_status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Trash Status') ?></th>
                <td><?= $this->Number->format($email->trash_status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Read Status') ?></th>
                <td><?= $this->Number->format($email->read_status) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Delete Status') ?></th>
                <td><?= $this->Number->format($email->delete_status) ?></td>
            </tr>
        </table>
    </div>
</div>
