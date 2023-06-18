

<?php $__env->startSection('head'); ?>
    <title> TeyvApp - Characters </title>
    <script src='<?php echo e(url('js/char.js')); ?>' defer="true"></script>
    <script>
        const FAV_URL = "<?php echo e(url('/')); ?>/";
        const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';
        const BASE_URL = "<?php echo e(url('/')); ?>/"
        const SAVE_URL = "<?php echo e(url('/')); ?>/"
        const DELETE_URL = "<?php echo e(url('/')); ?>/"
        const SEARCH_URL = "<?php echo e(url('/')); ?>/"
    </script>

    <link rel='stylesheet' href='<?php echo e(url('css/characters.css')); ?>'>

    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
            <h1 id="Titolo">Characters</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section id="ricerca">

            <form action="searchapigenshin.php" id="search">

                <p>
                    <label>Search<input id="searchbar" type='text' name="character">
                        <input id="sub" type='submit' value='Submit'><img id="alert"
                            src="images/alert.png"></label>
                <div id="dash"> <span class="hidden"> Tip: Try to insert dash instead of space like: Hu-Tao instead of
                        Hu
                        Tao</span></div>
                </p>


            </form>

        </section>
        <section id="results">

        </section>

        <div id="separatore"></div>

        <section id="container">

        </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/characters.blade.php ENDPATH**/ ?>