<div class="container">
	<div class="row">   
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create Event</h1>
    		
    		<form action="create_event.php" method="POST" class="row g-3 mb-6">
              <div class="col-sm-6 col-md-8">
                <div class="form-floating"><input class="form-control" id="floatingInputGrid" type="text" name="event_title" required><label for="floatingInputGrid">Event title</label></div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" name="selected_club" required>
                    <option disabled selected value="">Select Club</option>
                    <?php foreach($clubManagement->data() as $clubData): ?>
                    <option value="<?= $clubData->clubID?>"><?= $clubData->clubName ?></option>    
                    <?php endforeach?>                
                  </select><label for="selected_club">Select Club</label></div>
              </div>
              <div class="col-sm-6 col-md-4">
              <div class="form-floating"><input class="form-control" name="event_location" type="text" required><label for="event_location">Event Location</label></div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="flatpickr-input-container">
                  <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" name="start_datetime" type="datetime-local"><label class="ps-6" for="start_datetime">Start date</label></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
              <div class="flatpickr-input-container">
                    <div class="form-floating">
                        <input class="form-control datetimepicker flatpickr-input" name="end_datetime" type="datetime-local">
                        <label class="ps-6" for="end_datetime">End Date</label>
                    </div>
                </div>

              </div>
              <div class="col-12 gy-6">
                <div class="form-floating"><textarea class="form-control" name="event_description" style="height: 100px" required></textarea><label for="event_description">Event Description</label></div>
              </div>
              <div class="col-12 gy-6">
                <div class="row g-3 justify-content-center">
                    <div class="col-auto"><button class="btn btn-outline-success px-5 px-sm-15" type="submit">Create Project</button></div>
                  <div class="col-auto"><a href="dashboard.php" class="btn btn-outline-danger px-5">Cancel</a></div>
                </div>
              </div>
            </form>
		</div>
	</div>
</div>