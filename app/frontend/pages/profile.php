
<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo escape($data->name); ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-12 col-lg-12 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name :</td>
                        <td><?php echo escape($data->name); ?></td>
                      </tr>
                      <tr>
                        <td>Username:</td>
                        <td><?php echo escape($data->username); ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo escape($data->email); ?></td>
                      </tr>
                      <tr>
                        <td>Date Joined:</td>
                        <td><?php echo escape($data->joined); ?></td>
                      </tr>
                      <tr>
                        <td>College:</td>
                        <td><?php echo escape($data->college); ?></td>
                      </tr>
                      <tr>
                        <td>Bio:</td>
                        <td><?php echo escape($data->bio); ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="text-center">
                    <a href="update-account.php" class="btn btn-primary">Update Information</a>
                    <a href="index.php" class="btn btn-primary">Back</a>
                    <a href="delete-account.php" class="btn btn-danger">Delete Account</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
