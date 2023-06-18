

<?php $__env->startSection('head'); ?>
    <title>TeyvApp - Twitch</title>
    <script src="<?php echo e(url('js/twitch.js')); ?>" defer="true"></script>
    <script>
        const STREAM_URL = "<?php echo e(url('/')); ?>/";
        const FAV_URL = "<?php echo e(url('/')); ?>/";
        const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';
        const SAVE_STREAM_URL = "<?php echo e(url('/')); ?>/";
        const DELETE_URL = "<?php echo e(url('/')); ?>/"    
    </script>
    <link rel="stylesheet" href="<?php echo e(url('css/twitch.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    <h1 id="Titolo">GAMING ZONE</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="break"><span> Discover new streamers every day! <br> Save your favorite streamers!</span></div>

    <div id="divide"></div>
    <section id="results"></section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/twitch.blade.php ENDPATH**/ ?>