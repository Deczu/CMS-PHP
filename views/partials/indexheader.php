<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#">
                <?php
                if($_SESSION):
                    echo $_SESSION['username'];
                else:
                    echo "Guest";
                endif;
                ?>
            </a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">CMS</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <?php if(!$_SESSION) : ?>
                <a class="btn btn-sm btn-outline-secondary" href="/login">Log in</a>
                &nbsp;
                <a class="btn btn-sm btn-outline-secondary" href="/register">Register</a>
                &nbsp;<?php endif; ?>
            <a class="btn btn-sm btn-outline-secondary" href="../functions/logOut.php">Log out</a>
        </div>



    </div>
</header>