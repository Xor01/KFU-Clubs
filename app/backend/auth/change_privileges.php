<?php

$roleID = escape(Input::get('roleID'));
$userID = escape(Input::get('userID'));
$clubID = escape(Input::get('clubID'));

if ($roleID) {

    if (!$clubManagement->isUserIsAnAdminToThisClub($user->data()->uid, $clubID)) {
        Session::flash('danger', 'You do not have permission to access this page');
        Redirect::to('applicant_management.php');
    }
    
   $result =  $clubManagement->changePermission($roleID, $userID, $clubID);
   if ($result) {
    Session::flash('general', 'Successfully change permission.');
    Redirect::to('change_privileges.php');
   }

}
