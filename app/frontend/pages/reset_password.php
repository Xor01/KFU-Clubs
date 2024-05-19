<div class="container-sm">
    <div class="d-flex justify-content-center  align-items-center py-4">
        
        <main class="form-login w-50 m-auto">
            <form action="reset_password.php" method="POST">
                <h1 class="h3 mb-3 fw-normal">Reset Password</h1>
            
                <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
                <label for="username">Username</label>
                </div>
                <br>
                <div class="form-floating">
                <input type="password" class="form-control" id="password" name="new_password" placeholder="Password" required>
                <label for="new_password">Password</label>
                </div>
                <br>
                
                <div class="form-floating">
                <input type="password" class="form-control" id="password" name="confirm_new_password" placeholder="Confirm Password" required>
                <label for="new_password">Confirm new password</label>
                </div>
                <br>
                
                <div class="form-floating">
                    <select class="form-select" aria-label="Default select example" name="security_questionID" required>
                    <option selected disabled value="">Select Security Question</option>
                    <?php foreach($security_questions->findAll() as $question):?>
                    <option value="<?=$question->questionID?>"><?=$question->question?></option>
                    <?php endforeach ?>
                    </select>
                </div>

                <br>
                <div class="form-floating">
                <input type="text" class="form-control" name="security_question_answer" placeholder="Answer to your question" required>
                <label for="question">Security Question Answer</label>
                </div>
                
                <br>
                <button class="btn btn-outline-success w-100 py-2" type="submit">Reset Password</button>
                <hr>
                <input type="hidden" name="csrf_token" value="<?php echo Token::generate(); ?>">
            </div>
            </form>
        </main>
    </div>
</div>