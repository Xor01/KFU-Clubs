<div class="container-sm">
    <div class="d-flex justify-content-center  align-items-center py-4">
        
        <main class="form-register w-50 m-auto">
            <form action="" method="POST">
                <h1 class="h3 mb-3 fw-normal">Welcome To KFU Club, Please Create your account!</h1>

                <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                <label for="name">Name</label>
                </div>
                <br>

                <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                <label for="username">Username</label>
                </div>
                <br>
                
                <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
                </div>
                <br>


                <div class="form-floating">
                <input type="text" class="form-control" name="college" placeholder="Computer Science and Information Technology" required>
                <label for="email">College Name</label>
                </div>
                <br>


                <div class="form-group">
                <textarea class="form-control" name="bio" rows="3" placeholder="Biography"></textarea>
                </div>
                <br>

                <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>
                <br>

                <div class="form-floating">
                <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Retype Password" required>
                <label for="password">Password Verification</label>
                </div>
                
                <br>
                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
                <hr>
                <a href="login.php"><input type="button" action="register.php" class="btn btn-secondary w-100 py-2" value="Have account ? login instead"></input></a>
                <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
            </form>
        </main>
    </div>
</div>