<div class="col-md-6 mx-auto mt-3 event-container">
        <h1
            class="display-5 fw-bold text-body-emphasis align-middle"
            style="text-align: center"
        >
            Events
        </h1>
        <?php foreach($events->data() as $event_result): ?>
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Event</strong>
                <h3 class="mb-0"><?= $event_result->eventTitle?></h3>
                <p class="mb-auto">
                    <?= $event_result->description?>
                </p>
                <div class="mb-1 text-body-secondary">Starts at: <?= $event_result->start_datetime ?></div>
                <span class="mb-1 text-body-secondary">Ends at: <?= $event_result->end_datetime ?></span>
                <?php if (!$events->checkIfUserIsRegisterInEvent($user->data()->uid, $event_result->eventID)):?>
                <a href="view_event.php?userId=<?= $user->data()->uid ?>&eventId=<?= $event_result->eventID ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                Register to Attend.
                    
                </a>
                <?php else:?>
                    <?php $registration_status = $events->getRegistrationStatus($user->data()->uid, $event_result->eventID);?>
                    <?php 
                        switch ($registration_status[0]->registration_status) {
                            case 'pending':
                                echo '<div class="badge text-bg-secondary rounded-pill">Pending Acceptance.</div>';
                                break;
                            
                            case 'accepted':
                                echo '<div class="badge text-bg-success rounded-pill">Accepted, welcome aboard.</div>';
                                break;
                            
                            case 'rejected':
                                echo '<div class="badge text-bg-danger rounded-pill">Rejected, sorry we will see you again.</div>';
                                break;

                            case 'withdraw':
                                echo '<div class="badge text-bg-danger rounded-pill">You have Withdraw, you can register next time</div>';
                                break;
                            default:
                                # code...
                                break;
                        }
                    ?>
                <?php endif?>
            </div>
        </div>
        <?php endforeach?>
      
    </div>