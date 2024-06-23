<!-- Main navigation menu. Can add logic for user type / access -->

<?php 
    global $isLoggedIn;    
?>

<nav id="main-nav">

    <menu hx-boost="true">

        <li><a href="about.php">About</a>
        <li><a href="requests.php">CRUD Requests</a>

    <?php if ($isLoggedIn): ?>

        <li><a href="dashboard.php">Dashboard</a>
        <li><a href="actions/logout-user.php">Logout</a>

    <?php else: ?>

        <li><a href="form-login.php">Login</a>

    <?php endif ?>

    </menu>

</nav>


<!-- Update the nav links -->
<script>configureNav();</script>
