<?php

$result = $events->getEventsApplications($user->data()->uid);

$userId = escape(Input::get('userId'));
$clubId = escape(Input::get('clubId'));
$eventId = escape(Input::get('eventId'));

if ($userId && $eventId && $clubManagement->isUserInClub($clubId, $userId)) {

    if (!$clubManagement->isUserIsAnAdminToThisClub($user->data()->uid, $clubId)) {
        Session::flash('unauthorized', 'You don not have permission to perform this action.');
        Redirect::to('index.php');
    }
    echo "hello";
    if (Input::get('status') == 'accept') {
        $result = $events->acceptUser($userId, $eventId);
        Redirect::to('event_applications.php');
    }
    elseif (Input::get('status') == 'reject'){
        $result = $events->rejectUser($userId, $eventId);
        Redirect::to('event_applications.php');
    }
    
}
