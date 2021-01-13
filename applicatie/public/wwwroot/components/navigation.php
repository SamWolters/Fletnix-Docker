<ul>
    <li>
        <a class="navigation-logo" href="../../index.php">Fletnix</a>
    </li>
    <li>
        <a class="navigation-link" href="../../wwwroot/pages/subscription.php">Subscription</a>
    </li>
    <li>
        <a class="navigation-link" href="../../wwwroot/pages/overview.php">Overview</a>
    </li>
    <li>
        <a class="navigation-link" href="../../wwwroot/pages/about.php">About us</a>
    </li>
    <li>
    <?php
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
        echo '<li>
            <a class="navigation-link" href="../../wwwroot/pages/profile.php">Profile</a>
        </li>';

        echo "<a class='btn btn-red' href='../../wwwroot/pages/logout.php'>Logout</a>";
    } else {
        echo "<a class='btn btn-red' href='../../wwwroot/pages/login.php'>Login</a>";
    }
    ?>
    </li>
</ul>