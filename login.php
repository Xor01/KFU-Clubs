<?php

require_once "header.php";
require_once "nav.php";
?>

<div class="container-sm">
    <div class="d-flex justify-content-center  align-items-center py-4">
        
        <main class="form-login w-50 m-auto">
            <form action="" method="POST">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>
                <br>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                <hr>
                <a href="register.php"><input type="button" action="register.php" class="btn btn-secondary w-100 py-2" value="Don't Have account ? Register instead"></input></a>
            </form>
        </main>
    </div>
</div>
<?php
require_once "footer.php";
?>