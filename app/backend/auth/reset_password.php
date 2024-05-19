<?php
require_once 'app/backend/core/Init.php';

if (Input::exists())
{
    if (Token::check(Input::get('csrf_token')))
    {
        $validate = new Validation();

        $validation = $validate->check($_POST, array(
            'username'  => array(
                'required'  => true,
                'min'       => 2,
                'max'       => 20
                ),

            'new_password'  => array(
                'required'  => true,
                'min'       => 6,
                'bind'      => 'confirm_new_password'
                ),

            'confirm_new_password' => array(
                'required'  => true,
                'min'       => 6,
                'match'   => 'new_password',
                'bind' => 'new_password',
                ),
            ));
        $questionId = Input::get('security_questionID');
        $answer = Input::get('security_question_answer'); 
        $username = Input::get('username');
        if ($validation->passed())
        {
            if (!$user->checkEqual($questionId, $answer, $username)) {
                    Session::flash('danger', 'Sorry we could not update your password.');
                    Redirect::to('reset_password.php');
            }
             try
                {
                    $user->find($username);
                    $user->update(array(
                        'password'  => Password::hash(Input::get('new_password'))
                    ), $user->data()->uid);
                    Session::flash('update-success', 'Password successfully updated!');
                    Redirect::to('login.php');
                    
                }
             catch(Exception $e)
                {
                    die($e->getMessage());
                }
        }
        else
        {
            echo '<div class="alert alert-danger"><strong></strong>' . cleaner($validation->error()) . '</div>';
        }
    }
}
