<?php

if (!$user->hasPermission('admin')) {
    Session::flash('danger', 'You do not have permission to access this page');
}


if (Input::get('roleID')) {
    echo Input::get('roleID'). Input::get('userID'). Input::get('clubID');
    // $clubManagement->changePermission(Input::get('roleID'), Input::get('userID'), Input::get('clubID'));
}
