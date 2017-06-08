<!-- File: src/Template/Users/login.ctp -->

<div class="user form" >
<?= $this->flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
  <?= $this->Form->button(__('Login')); ?>
  <?= $this->Form->end() ?>
</div>