<?php
/**
 * Template name: Knowledge Hub
 */

include("header.php"); ?>

<section class="u-section">
    <div class="u-l-container--center u-l-container" data-in-viewport>
        <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding--small">

            <?php
                $sections = get_field('section');
                ?>

                <?php if($sections) { ?>
            
                    <?php
                    //Fetch sections
                    foreach($sections as $section) {
                        echo ' <div class="c-knowledge-hub">';
                        $sectionTitle = $section['section_title'];

                        if( $sectionTitle ) {
                            echo '<h2 class="c-site-headings c-site-headings--h2">'. $sectionTitle .'</h2>';
                        }

                        //Start Subsection
                        echo '<div class="c-knowledge-hub__subsection">';

                        //Fetch subsections
                        $subsections = $section['subsection']; ?>
                        
                        <?php
                        foreach($subsections as $subsection) {
                            $subsectionTitle =  $subsection['subsection_title'];

                            echo '<h3 class="c-site-headings c-site-headings--h3">'. $subsectionTitle .'</h3>';
                            echo $subsection['subsection_detail'];

                            //Fetch documents
                            $documents = $subsection['documents'];
                            foreach($documents as $document) { ?>

                            <!-- START: File Wrap -->
                            <div class="file-wrap">

                                <?php
                                    foreach ($document as $doc) {
                                        $title = $doc['title'];
                                        $fileName = $doc['filename'];
                                        $url = $doc['url'];
                                        $description = $doc['description'];
                                        $fileSize = $doc['filesize'];
                                        $fileConvertToReadableSize = convertToReadableSize($fileSize);
                                        $icon = $doc['icon'];
                                        
                                        $tolower = strtolower($title);
                                        $hashTitle = str_replace(' ','',$tolower);

                                        global $wp;
                                        $current_url = home_url( add_query_arg( array(), $wp->request ) );
                                }
                            
                            ?>

                                <div class="file-container" id="<?= $hashTitle ?>">

                                    <button class="file-copy copy-btn">Copy URL</button>
                                    <input class="js-cuttextarea" type="text" value="<?= $current_url . '/#' . $hashTitle  ?>" id="myInput" xhidden>
                                    
                                    <div class="file-icon">
                                        <img data-name="icon" src="http://safetonet/wordpress/wp-includes/images/media/document.png" alt="">
                                    </div>
                                    
                                    <div class="file-info">
                                        <p class="file-info__title">
                                            <strong data-name="title"><?= $title ?></strong>
                                        </p>
                                        <p class="file-description">
                                            <?= $description ?>
                                        </p>
                                        <p>
                                            <strong class="file-download"><?= $themeData['hub']['download']; ?></strong>
                                            <a class="file-name" data-name="filename" href="<?= $url ?>" target="_blank"><?= $fileName ?></a>
                                        </p>
                                        <p>
                                            <strong class="file-download"><?= $themeData['hub']['fileSize']; ?></strong>
                                            <span data-name="filesize"><?= $fileConvertToReadableSize ?></span>
                                        </p>
                                    </div>
                                    
                                    <div class="acf-actions">
                                        <a class="acf-icon" data-name="edit" href="#" title="Edit"></a><a class="acf-icon -cancel dark" data-name="remove" href="#" title="Remove"></a>
                                    </div>

                                </div>
                                <?php } ?>
                        <!-- END: File Wrap -->
                        </div>
                            
                    </div>
                    <?php } ?>
                    

                <?php } ?>

                <?php } else { ?>

                    <p>Sorry! Not documents yet.</p>

                <?php } ?>

        </div>
    </div>
</section>
    
<?php include("footer.php"); ?>

