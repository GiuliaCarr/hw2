<html>

<head>
    <title>Subscribe - TeyvApp</title>

    <link rel='stylesheet' href="<?php echo e(url('css/signup.css')); ?>">
    <script src='<?php echo e(url('js/signup.js')); ?>' defer="true"></script>
    <script>
        const CHECK_USERNAME = '<?php echo e(url('check')); ?>/';
    </script>
    <script>
        const CHECK_EMAIL = '<?php echo e(url('checkk')); ?>/';
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/teyvapp.png" type="image/x-icon">


</head>

<body>

    <main>
        <form name='signup' method='post'>
            <?php echo csrf_field(); ?>
            <div> <img id="icona" src="images/teyvapp.png"></div>
            <h1>Sign up for free to start using TeyvApp</h1>

            <div class="name">
                <label>Name <br>
                    <input type='text' name='name' value='<?php echo e(old('name')); ?>'>
                    <div id="name" class="hidden">
                        <img src='images/error.png' />
                        <span> Write your name</span>
                    </div>

                </label>

            </div>

            <div class="surname">
                <label>Surname<br>
                    <input type='text' name='surname' value='<?php echo e(old('surname')); ?>'>

                    <div id="surname" class="hidden">
                        <img src='images/error.png' />
                        <span> Write your surname</span>
                    </div>
                </label>

            </div>

            <div class="username">
                <label>Username<br>
                    <input type='text' name='username' value='<?php echo e(old('username')); ?>'>
                    <div id="username" class="hidden">
                        <img src='images/error.png' />
                        <span> Write your username</span>
                    </div>
                </label>
            </div>
            <div class="email">
                <label>Email<br><input type='text' name='email' value='<?php echo e(old('email')); ?>'>

                    <div id="email" class="hidden">
                        <img src='images/error.png'/>
                        <span> Invalid email</span>

                    </div>
                </label>
            </div>
            <div class="password">
                <label>Password<br><input type='password' name='password' value='<?php echo e(old('password')); ?>'>

                    <div id="password" class="hidden"> <img src='images/error.png' />
                        <span> Password is too short</span>

                    </div>

                </label>
            </div>
            <div class="confirm_password">
                <label>Confirm Password<br><input type='password' name='confirm_password'
                        value='<?php echo e(old('confirm_password')); ?>'>

                    <div id="confirm_password" class="hidden"> <img src='images/error.png' />
                        <span> Passwords do not match</span>
                    </div>
                </label>
            </div>
            <div class="allow">

                <label> <input type='checkbox' name='allow' value="1"
                        <?php echo e(old('allow') == '1' ? 'checked' : ''); ?>>
                    By clicking, you agree to TeyvApp's terms and conditions of use.
                </label>
            </div>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class='after' class='error' class='hidden'><img
                        src='images/error.png' /><span><?php echo e($err); ?></span></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="submit">
                <input type='submit' value="Subscribe" id="submit">
            </div>
            <div class="signup">Do you have an account? <a id="log" href="<?php echo e(url('login')); ?>">Login</a>
        </form>

        </section>
    </main>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/register.blade.php ENDPATH**/ ?>