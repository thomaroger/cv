<?php foreach ($ctx->xml as $k => $experience) : ?>
    <div class="span12">
        <div class="thumbnail">
            <div class="caption">
                <h3><?php echo $experience['position'].", ".$experience['company'] ?></h3>
                <div class="row-fluid">
                <div class="span8">
                    <p class="muted">
                    <?php
                    echo $experience['begin'];
                    if (!empty($experience['ending'])) { echo " - ".$experience['ending'];} ?>
                    </p>
                </div>
                <div class="span4"><p class="text-info" style="text-align:right"><?php echo $experience['location']; ?> <i class="icon-globe"></i></p></div>
                </div>
                <ul class="nav nav-list">
                    <?php  foreach ($experience['details']['detail'] as $key => $value) :  ?>
                        <li><?php echo $value; ?> </li>
                    <?php endforeach; ?>
                </ul>

                <ul class="nav inline pager">
                    <?php  foreach ($experience['tags']['tag'] as $key => $value) :  ?>
                        <li><?php echo $value; ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach;
