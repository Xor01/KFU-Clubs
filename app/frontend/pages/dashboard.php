      <h2>Club Applications</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">User Id</th>
              <th scope="col">Club Name</th>
              <th scope="col">Name</th>
              <th scope="col">college</th>
              <th scope="col">Biography</th>
              <th scope="col">Join Date</th>
              <th scope="col">Accept</th>
              <th scope="col">Reject</th>
            </tr>
          </thead>
          <tbody>
            <?php if($result):?>
                <?php foreach($clubManagement->data() as $user):?>
            <tr>
              <td><?= $user->uid?></td>
              <td><?= $user->clubName?></td>
              <td><?= $user->name?></td>
              <td><?= $user->college?></td>
              <td><?= $user->bio?></td>
              <td><?= explode(' ', $user->joined)[0]?></td>
              <td><a class="btn btn-outline-success" href="dashboard.php?userId=<?=$user->uid?>&clubId=<?=$user->clubID?>&status=accept" role="button">Accept</a></td>
              <td><a class="btn btn-outline-danger" href="dashboard.php?userId=<?=$user->uid?>&clubId=<?=$user->clubID?>&status=reject" role="button">Reject</a></td>
            </tr>
            <?php endforeach ?>
            <?php endif?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
