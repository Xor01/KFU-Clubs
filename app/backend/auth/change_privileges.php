<?php

if (!$user->hasPermission('admin')) {
    Session::flash('danger', 'You do not have permission to access this page');
    Redirect::to('index.php');
}


$roleID = escape(Input::get('roleID'));
$userID = escape(Input::get('userID'));
$clubID = escape(Input::get('clubID'));
if ($roleID) {
   $result =  $clubManagement->changePermission($roleID, $userID, $clubID);
   if ($result) {
    Session::flash('general', 'Successfully change permission.');
    Redirect::to('change_privileges.php');
   }

}
