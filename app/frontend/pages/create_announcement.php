<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="create_announcement.php" method="POST">
                    <select name="selected_club" class="custom-select custom-select-lg mb-3">
                        <option>Select Club Name:</option>
                        <?php foreach ($clubManagement->data() as $clubInfo): ?>
                        <option value="<?= $clubInfo->clubID?>"><?= $clubInfo->name ?></option>
                        <?php endforeach ?>
                    </select>
    		    
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
    		        <a href="dashboard.php" class="btn btn-outline-danger">Cancel</a>
                    
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>