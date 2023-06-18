<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/teyvapp.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(url('css/common.css')); ?>">
    <script src='<?php echo e(url('js/common.js')); ?>' defer="true"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fjalla+One&family=Lobster&display=swap"
        rel="stylesheet">

    <?php $__env->startSection('head'); ?>
    <?php echo $__env->yieldSection(); ?>
</head>

<body>

    <div id="minimenu" class="offmenu">

        <img id="esc" src="images/esc.png">

        <a class="char" href="<?php echo e(url('characters')); ?>" class="Button">CHARACTERS</a>
        <a class="vis" href="<?php echo e(url('visions')); ?>" class="Button">VISIONS</a>
        <a class="tw" href="<?php echo e(url('twitch')); ?>" class="Button">GAMING ZONE</a>
        <a class="profile" href="<?php echo e(url('profile')); ?>" class="Button">MY PROFILE</a>
        <a class="about" href="<?php echo e(url('about')); ?>" class="Button">ABOUT US</a>
        <a class="log" href="<?php echo e(url('logout')); ?>">LOG OUT</a>

    </div>


    <header>
        <div id="Overlay"> </div>
        <div id="nome">
            <img id="logo" src="images/teyvapp.png">
            <a id="home" href="<?php echo e(url('home')); ?>">TeyvApp</a>
        </div>
        <nav>

            <div id="options">
                <a class="char" href="<?php echo e(url('characters')); ?>" class="Button">CHARACTERS</a>
                <a class="vis" href="<?php echo e(url('visions')); ?>" class="Button">VISIONS</a>
                <a class="tw" href="<?php echo e(url('twitch')); ?>" class="Button">GAMING ZONE</a>
                <a class="profile" href="<?php echo e(url('profile')); ?>" class="Button">MY PROFILE</a>
                <a class="about" href="<?php echo e(url('about')); ?>" class="Button">ABOUT US</a>
                <a href="<?php echo e(url('logout')); ?>" class="log">LOG OUT</a>
            </div>

        </nav>

        <div id="laterale">

            <img id="menu" src="images/sidebar.png">

        </div>
        <?php $__env->startSection('title'); ?>
        <?php echo $__env->yieldSection(); ?>


    </header>
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/layout.blade.php ENDPATH**/ ?>