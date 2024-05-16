<h2>Club Applications</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">User Id</th>
              <th scope="col">Club Name</th>
              <th scope="col">Name</th>
              <th scope="col">Event ID</th>
              <th scope="col">college</th>
              <th scope="col">Biography</th>
              <th scope="col">Registration Date</th>
              <th scope="col">Registration Status</th>
              <th scope="col">Accept</th>
              <th scope="col">Reject</th>
            </tr>
          </thead>
          <tbody>
            <?php if($result):?>
                <?php foreach($events->data() as $user):?>
            <tr>
              <td><?= $user->uid?></td>
              <td><?= $user->clubName?></td>
              <td><?= $user->name?></td>
              <td><?= $user->eventTitle?></td>
              <td><?= $user->college?></td>
              <td><?= $user->bio?></td>
              <td><?= explode(' ', $user->registration_datetime)[0]?></td>
              <td><?= $user->registration_status?></td>
              <?php if (in_array($user->registration_status, ['pending', 'accepted', 'rejected'])): ?>

              <td><a class="btn btn-outline-success <?php if ($user->registration_status == 'accepted') echo "disabled" ?>" 
              href="event_applications.php?userId=<?=$user->uid?>&eventId=<?=$user->eventID?>&clubId=<?=$user->clubID?>&status=accept<?php if ($user->registration_status == 'accepted') echo "&aria-disabled=true" ?>">Accept</a></td>
              <td><a class="btn btn-outline-danger <?php if ($user->registration_status == 'rejected') echo "disabled" ?>" 
              href="event_applications.php?userId=<?=$user->uid?>&eventId=<?=$user->eventID?>&clubId=<?=$user->clubID?>&status=reject<?php if ($user->registration_status == 'rejected') echo "&aria-disabled=true" ?>">Reject</a></td>
              <?php else:?>
                
                <td><a class="btn btn-outline-secondary disabled" role="button" aria-disabled="true">Accept</a></td>
                <td><a class="btn btn-outline-secondary disabled" role="button" aria-disabled="true">Reject</a></td>
              <?php endif?>
            </tr>
            <?php endforeach ?>
            <?php endif?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
