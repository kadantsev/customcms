<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="/">Home</a></h1>
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link(__('Posts'),
                    ['controller' => 'posts', 'action' => 'index']) ?></li>
                <?php if (isset($usr)): ?>
                <li><?= $this->Html->link(__('Hi, ' . $usr['username']),
                    ['controller' => 'users', 'action' => 'view', $usr['id']]) ?></li>
                <li><?= $this->Html->link(__('Log out'),
                    ['controller' => 'users', 'action' => 'logout']) ?></li>
                <?php else: ?>
                <li><?= $this->Html->link(__('Sign in'),
                  ['controller' => 'users', 'action' => 'login']) ?></li>
                <li><?= $this->Html->link(__('Sign up'),
                  ['controller' => 'users', 'action' => 'add']) ?></li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>

    </footer>
</body>
</html>
