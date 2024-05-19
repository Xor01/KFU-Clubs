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
                <h3 class="mb-0"><?=  $club->clubName?></h3>
                <div class="mb-1 text-body-secondary">Joined to KFU_Clubs In: <?= explode('-', explode(' ', $club->created_at)[0])[0]?></div>
                <p class="mb-auto">
                    <?=$club->description?>
                </p>
                <?php if (!$clubManagement->isUserActive($club->clubID, $user->data()->uid)):?>
                <a href="send_club_request.php?club=<?= $club->clubID; ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                    Request to join
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
                <?php else:?>
                    <div class="badge text-bg-success rounded-pill">Congrats You are a member of this club.</div>
                </a>
                <?php endif?>
            </div>
        </div>
        <?php endforeach ?>