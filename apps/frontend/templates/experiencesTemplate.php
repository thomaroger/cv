<?php foreach ($ctx->xml as $k => $experience) : ?>
    <div class="span12 card-body">
    <div class="card">
      <div class="card-header">
        <?php echo $experience['position'].", ".$experience['company'] ?>
      </div>
      <div class="card-body">
        <p class="muted"> 
        <?php 
            echo $experience['begin'];
            if (!empty($experience['ending'])) { echo " - ".$experience['ending'];} ?> 
        </p>
        <div class="span4"><p class="text-info" style="text-align:right"><?php echo $experience['location']; ?> <i class="fa fa-map-marked"></i></p>
        </div>
        <ul class="list-group list-group-flush">
            <?php  foreach ($experience['details']['detail'] as $key => $value) :  ?>
                <li class="list-group-item"><?php echo $value; ?> </li>
            <?php endforeach; ?>
        </ul>
        <div class="clearfix">&nbsp;</div>
         <div class="container text-center">
            <ul class="list-inliner">
             <?php  foreach ($experience['tags']['tag'] as $key => $value) :  ?>
                 <li class="list-inline-item"><?php echo $value; ?> </li>
            <?php endforeach; ?>
              </ul>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
