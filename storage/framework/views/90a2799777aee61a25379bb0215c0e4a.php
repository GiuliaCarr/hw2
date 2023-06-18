

<?php $__env->startSection('head'); ?>
    <title>TeyvApp</title>
    <link rel="stylesheet" href="<?php echo e(url('css/home.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?>
    <h1 id="Titolo">Hello fellow traveler!</h1>
    <h3 id="sottotitolo"> What are you looking for?</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="vision">

        <img class="vision" src="images/anemo.gif">
        <img class="vision" src="images/geo.gif">
        <img class="vision" src="images/electro.gif">
        <img class="vision" src="images/dendro.gif">
        <img id="allvisions" class="vision" src="images/allvisions.gif">
        <img class="vision" src="images/hydro.gif">
        <img class="vision" src="images/pyro.gif">
        <img class="vision" src="images/cryo.gif">

    </section>

    <section id="contenitore">

        <div id="destro1"><span class="tHome">Discover all the visions</span> <br>
            <span class="descHome"> What are the visions? What kind of visions we know? <br></span>
            How do people obtain them?
        </div> <br>

        <div id="one" class="separate"></div>

        <div id="sinistro1"><span class="tHome">Meet all the heroes</span> <br>
            <span class="descHome"> What vision do they have? What weapon do they use? <br></span>
            How much rare are them to find?
        </div> <br>
        <div id="two" class="separate"></div>

        <div id="destro2"><span class="tHome">Custom your profile</span> <br>
            <span class="descHome"> Choose your favorite characters. What do u have? <br></span>
            Add a description
        </div> <br>
        <div id="three" class="separate"></div>

        <div id="sinistro2"><span class="tHome">Join our streamers on Twitch</span> <br>
            <span class="descHome"> Follow the channels who play Genshin Impact. Enjoy the stream <br></span>
            Discover all the secrets of the game.
        </div> <br>


    </section>


    <footer> <a>TeyvApp - The App of Teyvat</a></footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>