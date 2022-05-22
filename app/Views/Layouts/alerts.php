<?php if (session()->has('errors')): ?>
        <?php foreach(session('errors') as $error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endforeach; ?>
<?php endif; ?>

<?php if (session()->has('warning')) : ?>
    <div class="alert alert-warning"><?= session('warning') ?></div>
<?php endif; ?>

<?php
if (session()->has('info')) : ?>
    <div class="alert alert-info"><?= session('info') ?></div>
<?php endif; ?>