<?php foreach ($ctx->xml as $k => $formation) : ?>
	<div class="span12 card-body">
	    <div class="card">
	      <div class="card-header">
	        <?php echo $formation['company']; ?>
	      </div>
	      <div class="card-body">
	        <p class="muted"> 
	       <?php 
				echo $formation['begin'];
				if(!empty($formation['ending'])) { echo " - ".$formation['ending'];} ?>  
	        </p>
	        <div class="span4"><p class="text-info" style="text-align:right"><?php echo $formation['location']; ?> <i class="fa fa-map-marked"></i></p>
	        </div>
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><?php echo $formation['degree']; ?> </li>
	        </ul>
	        </div>
	    </div>
	</div>
<?php endforeach; ?>

