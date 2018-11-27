<section class="u-section">
    <div class="u-l-container--center u-l-container" data-in-viewport>
        <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding--small">
 
            <?php foreach($data['sectionList'] as $section) { ?>
                <h2 class=""><?= $section['sectionTitle']; ?></h2>
            <?php } ?>

        </div>
    </div>
</section>