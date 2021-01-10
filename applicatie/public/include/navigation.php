<?php if (!isset($_SESSION)) { session_start(); } ?>
<ul>
    <li>
        <a class="navigation-logo" href="../index.php">Fletnix</a>
    </li>
    <li>
        <a class="navigation-link" href="../pages/subscription.php">Subscription</a>
    </li>
    <li>
        <a class="navigation-link" href="../pages/overview.php">Overview</a>
    </li>
    <li>
        <a class="navigation-link" href="../pages/about.php">About us</a>
    </li>
    <li>
    <?php
    if (isset($_SESSION['loggedIn'])) {
        $console = 'true';
        echo "<a class='btn btn-red' href='../pages/profile.php'>Profile</a>";
    } else {
        $console = 'false';
        echo "<a class='btn btn-red' href='../pages/login.php'>Login</a>";
    }
    
    ?>
    </li>
</ul>