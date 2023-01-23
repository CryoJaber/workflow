<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->user_id) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Cryobuilt Gmail') ?></th>
                <td><?= h($user->cryobuilt_gmail) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Freshdesk Api') ?></th>
                <td><?= h($user->freshdesk_api) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone Oncall') ?></th>
                <td><?= h($user->phone_oncall) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Phone Personal') ?></th>
                <td><?= h($user->phone_personal) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('First Name') ?></th>
                <td><?= h($user->first_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Last Name') ?></th>
                <td><?= h($user->last_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= h($user->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User Id') ?></th>
                <td><?= $this->Number->format($user->user_id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($user->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Remember Me') ?></th>
                <td><?= $user->remember_me ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
    </div>
</div>
