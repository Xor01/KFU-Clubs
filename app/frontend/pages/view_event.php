<?php 
if (!escape(Input::get('eventId'))) {
  Redirect::to('events.php');
}
$events->find(escape(Input::get('eventId')));
?>
<?php
  $current_datetime = date("Y-m-d\TH:i:s");
  $event_is_over =  $current_datetime >= $events->data()[0]->end_datetime ? true : false;
?>
<div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
  <div class="my-3 p-3">
    <h2 class="display-5"> <?php echo $events->data()[0]->eventTitle ?> </h2>
    <p class="lead"> <?php echo $events->data()[0]->description ?> </p>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <p class="lead">
          <strong>Start Date:</strong> <?php echo date('F j, Y, g:i a', strtotime($events->data()[0]->start_datetime)) ?>
        </p>
      </div>
      <div class="col-md-4">
        <p class="lead">
          <strong>Location:</strong> <?php echo $events->data()[0]->location ?>
        </p>
      </div>
      <div class="col-md-4">
        <p class="lead">
          <strong>End Date:</strong> <?php echo date('F j, Y, g:i a', strtotime($events->data()[0]->end_datetime)) ?>
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <a href="view_event.php?userId=<?= $user->data()->uid?>&eventId=<?=$events->data()[0]->eventID?>&clubId=<?=$events->data()[0]->clubID?>&action=register" class="btn btn-outline-success btn-block <?php if($event_is_over) {echo "disabled";} ?>">Register</a>
      </div>
      <div class="col-md-4">
        <a href="events.php" class="btn btn-outline-danger btn-block">Cancel</a>
      </div>
    </div>
  </div>
</div>

<hr class="border border-2 opacity-50">