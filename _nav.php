<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <?php if(islevel(1000)): ?>
    <a href="useradmin.php">User admin</a>
    <?php endif; ?>
    <div class="fill"></div>
    <button popovertarget="login">Login</button>
</nav>