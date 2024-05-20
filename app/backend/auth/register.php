<?php
require_once 'app/backend/core/Init.php';
if ($user->isLoggedIn()){
    Redirect::to('index.php');
}
if(Input::exists())
{
    if(Token::check(Input::get('csrf_token')) )
    {
        $validate = new Validation();

        $validation = $validate->check($_POST, array(
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),

            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),

            'password' => array(
                'required' => true,
                'min' => 6
            ),

            'college' => array(
                'required' => true,
                'min' => 3,
                'max' => 50
            ),

            'bio' => array(
                'max' => 1000
            ),

            'password_again' => array(
                'required' => true,
                'match' => 'password'
            ),
            
            'security_questionID' => array(
                'required' => true,
                'max' => 100
            ),

            'security_question_answer' => array(
                'required' => true,
                'min' => 3
            )
            
        ));

        if ($validate->passed())
        {
            try
            {
                $user->create(array(
                    'username'  => Input::get('username'),
                    'password'  => Password::hash(Input::get('password')),
                    'name'      => Input::get('name'),
                    'joined'    => date('Y-m-d H:i:s'),
                    'college'    => Input::get('college'),
                    'bio'    => Input::get('bio'),
                    'security_questionID'    => Input::get('security_questionID'),
                    'security_question_answer'    => Input::get('security_question_answer'),
                    'groups'    => 1,
                    ));

                Session::flash('register-success', 'Thanks for registering! You can login now.');
                Redirect::to('index.php');
            }
            catch(Exception $e)
            {
                die($e->getMessage());
            }
        }
        else
        {
            foreach ($validate->errors() as $error)
            {
                echo '<div class="alert alert-danger text-center"><strong></strong>' . cleaner($error) . '</div>';
            }
        }
    }
}
