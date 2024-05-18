<div class="container">
	<div class="row">   
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create Club</h1>
    		
    		<form action="create_club.php" method="POST" class="row g-3 mb-6">
              <div class="col-sm-6 col-md-12">
                <div class="form-floating"><input class="form-control" id="floatingInputGrid" type="text" name="club_name" required><label for="club_name">Club Name</label></div>
              </div>
              
              <div class="col-12 gy-6">
                <div class="form-floating"><textarea class="form-control" name="club_description" style="height: 100px" required></textarea><label for="club_description">Event Description</label></div>
              </div>
              <div class="col-12 gy-6">
                <div class="row g-3 justify-content-center">
                    <div class="col-auto"><button class="btn btn-outline-success px-5 px-sm-15" type="submit">Create Club</button></div>
                  <div class="col-auto"><a href="dashboard.php" class="btn btn-outline-danger px-5">Cancel</a></div>
                </div>
              </div>
            </form>
		</div>
	</div>
</div>