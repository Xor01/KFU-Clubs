<div class="col-md-6 mx-auto mt-3 event-container">
        <h1
            class="display-5 fw-bold text-body-emphasis align-middle"
            style="text-align: center"
        >
            Clubs
        </h1>
        <?php foreach ($clubs->data() as $club):?>
            <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis"
                >Club</strong
                >
                <h3 class="mb-0"><?=  $club->name?></h3>
                <div class="mb-1 text-body-secondary">Joined: <?= explode('-', explode(' ', $club->created_at)[0])[0]?></div>
                <p class="mb-auto">
                    <?=$club->description?>
                </p>
                <a href="send_club_request.php?club=<?= $club->clubID; ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                    Request to join
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>
        <?php endforeach ?>