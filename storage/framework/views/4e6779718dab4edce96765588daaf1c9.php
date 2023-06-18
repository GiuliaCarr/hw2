

<?php $__env->startSection('head'); ?>
    <link rel='stylesheet' href="<?php echo e(url('css/profile.css')); ?>">
    <script src="<?php echo e(url('js/profile.js')); ?>" defer="true"></script>
    <title>TeyvApp -
        <?php echo e($username); ?>

    </title>
    <script>
        const FAV_CHAR= "<?php echo e(url('/')); ?>/";
        const PROFILE_URL= "<?php echo e(url('/')); ?>/";
        const FAV_STREAM ="<?php echo e(url('/')); ?>/";
        const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';
        const DELETE_CHAR= "<?php echo e(url('/')); ?>/";
        const DELETE_STREAM= "<?php echo e(url('/')); ?>/";
        const SAVE_URL= "<?php echo e(url('/')); ?>/";
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    
        <div id="idpropic"><img id="propic" src=""></div>
        <h1 id="name">
            <?php echo e($username); ?>

        </h1>
        <img id="modify" src="images/modify.png">
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="modifyProfile" class="hidden">
        <form>
            <a>Choose your profile pic</a>
            <select name='tipo' id="tipo">
                <option value="albedo">Albedo</option>
                <option value="aloy">Aloy</option>
                <option value="arataki-itto">Arataki Itto</option>
                <option value="amber">Amber</option>
                <option value="ayaka">Ayaka</option>
                <option value="ayato">Ayato</option>
                <option value="barbara">Barbara</option>
                <option value="beidou">Beidou</option>
                <option value="bennett">Bennett</option>
                <option value="chongyun">Chongyun</option>
                <option value="collei">Collei</option>
                <option value="diluc">Diluc</option>
                <option value="diona">Diona</option>
                <option value="eula">Eula</option>
                <option value="fischl">Fischl</option>
                <option value="ganyu">Ganyu</option>
                <option value="gorou">Gorou</option>
                <option value="hu-tao">Hu Tao</option>
                <option value="jean">Jean</option>
                <option value="kaeya">Kaeya</option>
                <option value="kazuha">Kaedahara Kazuha</option>
                <option value="keqing">Keqing</option>
                <option value="klee">Klee</option>
                <option value="kokomi">Sangonomiya Kokomi</option>
                <option value="kuki-shinobu">Kuki Shinobu</option>
                <option value="lisa">Lisa</option>
                <option value="ningguang">Ningguang</option>
                <option value="noelle">Noelle</option>
                <option value="mona">Mona</option>
                <option value="qiqi">Qiqi</option>
                <option value="raiden">Shogun Raiden</option>
                <option value="razor">Razor</option>
                <option value="rosaria">Rosaria</option>
                <option value="mona">Mona</option>
                <option value="sara">Kujou Sara</option>
                <option value="sayu">Sayu</option>
                <option value="shenhe">Shenhe</option>
                <option value="shikanoin-heizou">Shikanoin Heizou</option>
                <option value="sucrose">Sucrose</option>
                <option value="tartaglia">tartaglia</option>
                <option value="thoma">Thoma</option>
                <option value="tighnari">Tighnari</option>
                <option value="traveler-anemo">Traveler</option>
                <option value="venti">Venti</option>
                <option value="xiangling">Xiangling</option>
                <option value="xiao">Xiao</option>
                <option value="xingqiu">Xingqiu</option>
                <option value="xinyan">Xinyan</option>
                <option value="yae-miko">Yae Miko</option>
                <option value="yanfei">Yanfei</option>
                <option value="yelan">Yelan</option>
                <option value="yoimiya">Yoimiya</option>
                <option value="yun-jin">Yun Jin</option>
                <option value="zhongli">Zhongli</option>



            </select>
            <div id="savechanges"> Save Changes</div>
        </form>
    </div>
    <h1 id="favorites"> Your preferences: </h1>
    <div id="choose">
        <div id="streams"> Streams </div>
        <div id="break"></div>
        <div id="chars"> Characters</div>
    </div>

    <section id="preferences">


    </section>

    <section id="results">

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/profile.blade.php ENDPATH**/ ?>