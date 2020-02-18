<nav>
                <div class="inner">
                    <div class="nav">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../login.php">Login</a></li>
                            <li><a href="../register.php">Create Account</a></li>
                            <?php if ($_SESSION["loggued_on_user"] !== '' && $_SESSION["loggued_on_user"] === "root")
                                echo '<li><a href="admin.php">Admin</a></li>'?>
                            <?php if ($_SESSION["loggued_on_user"] !== '')
                                echo '<li><a href="logout.php">Logout</a></li>'?>
                        </ul>
                    </div>
                </div>
            </nav>