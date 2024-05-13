<div class="col-md-6 mx-auto mt-3 event-container">
        <h1
            class="display-5 fw-bold text-body-emphasis align-middle"
            style="text-align: center"
        >
        Announcements
        </h1>
            <?php
                foreach($announcements->data() as $announcement):?>
                
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <span class="badge badge-success" style="color:green">Club Name: <?php echo $clubManagement->getClubName($announcement->clubID)[0]->name ?></span>
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis"
                >Announcement</strong
                >
                <h3 class="mb-0"><?= $announcement->title?></h3>
                <div class="mb-1 text-body-secondary">Created at: <?=explode(' ', $announcement->created_at)[0]?></div>
                <p class="mb-auto">
                    <?=$announcement->content?>
                </p>
                
            </div>
        </div>
        <?php endforeach?>
        