<?php
require_once 'app/backend/core/Init.php';

if (Input::exists())
{
    if (Token::check(Input::get('csrf_token')))
    {
        $validate = new Validation();

        $validation = $validate->check($_POST, array(
            'name'  => array(
                'required'  => true,
                'min'       => 2,
                'max'       => 50
                ),
            'username'  => array(
                'required'  => true,
                'min'       => 2,
                'max'       => 20
                ),

            'email' => array(
                'required' => true,
                'min' => 5,
                'max' => 50,
                'unique' => 'users'
            ),

            'college'  => array(
                'required'  => true,
                'min'       => 3,
                'max'       => 50
                ),

            'bio'  => array(
                'max'       => 1000
                ),

            'password'  => array(
                'required'  => true,
                'min'       => 6,
                'verify'     => 'users'
                ),
                
            'new_password'  => array(
                'optional'  => true,
                'min'       => 6,
                'bind'      => 'confirm_new_password'
                ),

            'confirm_new_password' => array(
                'optional'  => true,
                'min'       => 6,
                'match'   => 'new_password',
                'bind' => 'new_password',
                ),
            ));

        if ($validation->passed())
        {
             try
                {
                    $user->update(array(
                        'name'  => Input::get('name'),
                        'username'  => Input::get('username'),
                        'email'  => Input::get('email'),
                        'college'  => Input::get('college'),
                        'bio'  => Input::get('bio'),
                    ));

                     if ($validation->optional())
                    {
                        $user->update(array(
                        'password'  => Password::hash(Input::get('new_password'))
                        ));
                    }
                    Session::flash('update-success', 'Profile successfully updated!');
                    Redirect::to('index.php');
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
