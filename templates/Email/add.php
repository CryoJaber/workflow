<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Email $email
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('List Email'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="email form content">
    <?= $this->Form->create($email) ?>
    <fieldset>
        <legend><?= __('Add Email') ?></legend>
        <?php
            echo $this->Form->control('message');
            echo $this->Form->control('file');
            echo $this->Form->control('mailingdate');
            echo $this->Form->control('starred_status');
            echo $this->Form->control('sender_email');
            echo $this->Form->control('reciever_email');
            echo $this->Form->control('inbox_status');
            echo $this->Form->control('sent_status');
            echo $this->Form->control('draft_status');
            echo $this->Form->control('trash_status');
            echo $this->Form->control('email_subject');
            echo $this->Form->control('read_status');
            echo $this->Form->control('delete_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
