<div class="col-md-6 mx-auto mt-3 event-container">
        <h1
            class="display-5 fw-bold text-body-emphasis align-middle"
            style="text-align: center"
        >
            Events
        </h1>
        <?php foreach($events->data() as $event_result): ?>
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Event</strong>
                <h3 class="mb-0"><?= $event_result->eventTitle?></h3>
                <p class="mb-auto">
                    <?= $event_result->description?>
                </p>
                <div class="mb-1 text-body-secondary">Starts at: <?= $event_result->start_datetime ?></div>
                <span class="mb-1 text-body-secondary">Ends at: <?= $event_result->end_datetime ?></span>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Register to Attend.
                    <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                </a>
            </div>
        </div>
        <?php endforeach?>
      
    </div>