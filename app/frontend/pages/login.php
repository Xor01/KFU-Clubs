<div class="container-sm">
    <div class="d-flex justify-content-center  align-items-center py-4">
        
        <main class="form-login w-50 m-auto">
            <form action="login.php" method="POST">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            
                <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
                <label for="username">Username</label>
                </div>
                <br>
                <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>
                <br>
                <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Sign in</button>
                <hr>
                <a href="register.php"><input type="button" action="register.php" class="btn btn-secondary w-100 py-2" value="Don't Have account ? Register instead"></input></a>
                <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">

            </form>
        </main>
    </div>
</div>