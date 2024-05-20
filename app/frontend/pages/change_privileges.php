<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4 text-center">Edit Privileges</h1>
            <form action="change_privileges.php" method="POST">
                <div class="form-group">
                    <div class="form-floating">
                        <select class="form-select form-control" name="selected_club" required>
                            <option disabled selected value="">Select Club</option>
                            <?php foreach($clubManagement->data() as $clubData): ?>
                                <option value="<?= $clubData->clubID?>"><?= $clubData->clubName ?></option>    
                            <?php endforeach?>                
                        </select>
                        <label for="selected_club">Select Club</label>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-between mt-3">
                    <button type="submit" class="btn btn-outline-success">Search</button>
                    <a href="applicant_management.php" class="btn btn-outline-danger">Cancel</a>   
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (Input::get('selected_club')):?>
    <h2>Club Applications</h2>
    <form action="change_privileges.php" method="POST">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Club Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">College</th>
                        <th scope="col">Biography</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Permission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($clubManagement->findAllInClub(escape(Input::get('selected_club')))):?>
                        <?php foreach($clubManagement->data() as $user):?>
                            <tr>
                                <td><?= $user->uid?></td>
                                <td><?= $user->clubName?></td>
                                <td><?= $user->username?></td>
                                <td><?= $user->college?></td>
                                <td><?= $user->bio?></td>
                                <td><?= explode(' ', $user->joined)[0]?></td>
                                <td>
                                    <input type="hidden" name="clubID" value="<?= escape(Input::get('selected_club')) ?>">
                                    <input type="hidden" name="userID" value="<?= $user->uid ?>">
                                    <select style="min-width: 200px;" class="form-select" aria-label="Default select example" name="roleID">
                                        <option disabled value="">Choose Role</option>
                                        <option <?php if($user->roleID == '1'){echo "selected";} ?> value="1">Admin</option>
                                        <option <?php if($user->roleID == '2'){echo "selected";} ?> value="2">Standard User</option>
                                    </select>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif?>
                </tbody>
            </table>
        </div>
        <div class="form-group d-flex justify-content-between mt-3">
            <button type="submit" class="btn btn-outline-success">Update</button>
            <a href="applicant_management.php" class="btn btn-outline-danger">Cancel</a>   
        </div>
    </form>
<?php endif?>
