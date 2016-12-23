<?php foreach ($ctx->xml as $k => $formation) : ?>
	<div class="span12">
		<div class="thumbnail">
	        <div class="caption">
	        	<h3><?php echo $formation['company']; ?></h3>
	        	<div class="row-fluid">
	        	<div class="span8">
	        		<p class="muted"> 
	        		<?php 
	        		echo $formation['begin'];
	        		if(!empty($formation['ending'])) { echo " - ".$formation['ending'];} ?> 
		        	</p>
		        </div>
	        	<div class="span4"><p class="text-info" style="text-align:right"><?php echo $formation['location']; ?> <i class="icon-globe"></i></p></div>
	        	</div>
	        	<ul class="nav nav-list">
						<li><?php echo $formation['degree']; ?> </li>
	            </ul>
	        </div>
	    </div>
	</div>
<?php endforeach; ?>


