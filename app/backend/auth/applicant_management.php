<?php

$result = $clubManagement->getClubApplications($user->data()->uid);

$userId = escape(Input::get('userId'));
$clubId = escape(Input::get('clubId'));

if ($userId && $clubId && !$clubManagement->isUserActive($clubId, $userId)) {

    if (!$clubManagement->isUserIsAnAdminToThisClub($user->data()->uid, $clubId)) {
        Session::flash('unauthorized', 'You don not have permission to perform this action.');
        Redirect::to('index.php');
    }
    
    if (Input::get('status') == 'accept') {
        $result = $clubManagement->acceptUser($clubId, $userId);
        Redirect::to('applicant_management.php');
    }
    elseif (Input::get('status') == 'reject'){
        $result = $clubManagement->rejectUser($clubId, $userId);
        Redirect::to('applicant_management.php');
    }
    
}