<?php 
if (!escape(Input::get('eventId'))) {
  Redirect::to('events.php');
}
$events->find(escape(Input::get('eventId')));
?>
<?php
  $current_datetime = date("Y-m-d H:i:s");
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
<div class="row d-flex justify-content-center" style="  overflow: hidden;">
  <div class="col-md-8 col-lg-6">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <div data-mdb-input-init class="form-outline mb-4">
          <?php if (!$event_is_over):?>
          <p class="lead">You can comment after the end of an event.</p>
          <?php endif?>
          <form action="view_event.php?userId=<?= $user->data()->uid?>&eventId=<?=$events->data()[0]->eventID?>&clubId=<?=$events->data()[0]->clubID?>&action=comment" method="post">
              <div class="input-group">
              <input type="text" name="comment" class="form-control" placeholder="Type comment..." <?php if(!$event_is_over) {echo "disabled";}?> />
              <button type="submit" type="button" class="btn btn-outline-secondary <?php if(!$event_is_over) {echo "disabled";}?>">Send</button>
              </div>
          </form>
          
        </div>
      </div>
      <div class="card mb-4">
        <?php foreach($comments->find(escape(Input::get('eventId'))) as $comment):?>
        <div class="card-body">
          <p>- <?=$comment->comment?></p>
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
              <p class="small mb-0 ms-2">From: <?=$comment->username?></p>
              <p class="small mb-0 ms-2 opacity-50">~<?php echo explode(' ', $comment->created_at)[0]?></p>
            </div>
            <div class="d-flex flex-row align-items-center">
              <p class="small text-muted mb-0"></p>
              <a  href="view_event.php?userId=<?= $user->data()->uid?>&eventId=<?=$events->data()[0]->eventID?>&clubId=<?=$events->data()[0]->clubID?>&commentId=<?=$comment->commentID?>&action=like" name="like-btn" class="btn btn-outline-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                </svg><?=$comment->likes?></a>
            </div>
          </div>
        </div>
        <hr class="border border-2 opacity-50">
        <?php endforeach?>
      </div>
    </div>
  </div>
</div>