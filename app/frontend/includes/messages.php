<?php

if(Session::exists('register-success'))
{
  echo '<div class="alert alert-success text-center"><strong></strong>' . Session::flash('register-success') . '<a href="login.php"> Login Here</a></div>';
}

if(Session::exists('update-success'))
{
  echo '<div class="alert alert-success text-center"><strong></strong>' . Session::flash('update-success') . '</div>';
}

if(Session::exists('login-success'))
{
  echo '<div class="alert alert-success text-center"><strong></strong>' . Session::flash('login-success') . '</div>';
}


if(Session::exists('general'))
{
  echo '<div class="alert alert-info text-center"><strong></strong>' . Session::flash('general') . '</div>';
}


if(Session::exists('unauthorized'))
{
  echo '<div class="alert alert-warning text-center"><strong></strong>' . Session::flash('unauthorized') . '</div>';
}
if(Session::exists('danger'))
{
  echo '<div class="alert alert-danger text-center"><strong></strong>' . Session::flash('danger') . '</div>';
}