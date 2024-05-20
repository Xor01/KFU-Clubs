<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create Announcement</h1>
    		
    		<form action="create_announcement.php" method="POST">
			<div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" name="selected_club" required>
                    <option disabled selected value="">Select Club</option>
                    <?php foreach($clubManagement->data() as $clubData): ?>
                    <option value="<?= $clubData->clubID?>"><?= $clubData->clubName ?></option>    
                    <?php endforeach?>                
                  </select><label for="selected_club">Select Club</label></div>
              </div>
              </div>
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" required />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Content</label>
    		        <textarea rows="5" class="form-control" name="content" required></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-outline-success">
    		            Create
    		        </button>
    		        <a href="applicant_management.php" class="btn btn-outline-danger">Cancel</a>
                    
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>