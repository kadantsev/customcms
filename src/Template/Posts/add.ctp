<?php
/**
  * @var \App\View\AppView $this
  */
$this->TinyMCE->editor(['theme' => 'modern', 'selector' => 'textarea']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
        echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
