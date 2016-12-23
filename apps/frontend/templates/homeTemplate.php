<div class="span12">
	<div class="thumbnail">
        <div class="caption">
        	<h3>Dernière expérience</h3>
        	<h5><?php echo $ctx->experience['position'].", ".$ctx->experience['company'] ?></h5>
        	<div class="row-fluid">
        	<div class="span8">
        		<p class="muted"> 
        		<?php 
        		echo $ctx->experience['begin'];
        		if(!empty($ctx->experience['ending'])) { echo " - ".$ctx->experience['ending'];} ?> 
	        	</p>
	        </div>
        	<div class="span4"><p class="text-info" style="text-align:right"><?php echo $ctx->experience['location']; ?> <i class="icon-globe"></i></p></div>
        	</div>
        	<ul class="nav nav-list">
        		<?php  foreach ($ctx->experience['details']['detail'] as $key => $value) :  ?>
					<li><?php echo $value; ?> </li>
				<?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<div class="span12">
	<div class="thumbnail">
        <div class="caption">
        	<h3>Liste des compétences actuellement utilisées</h3>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Niveau</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($ctx->skills as $name => $skills) : ?>
						<?php foreach ($skills as $skill) : ?>
							<?php if ($skill['actual'] === 'true') : ?>
								<tr class="<?php echo $skill['skin']; ?>">
									<td><?php echo $skill['name']; ?> </td>
									<td><?php echo $skill['level'] ?></td>
								</tr>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
        </div>
    </div>
</div>



<div class="span12">
	<div class="thumbnail">
        <div class="caption">
        	<h3>Dernière formation</h3>
        	<h5><?php echo $ctx->formation['company']; ?></h5>
        	<div class="row-fluid">
        	<div class="span8">
        		<p class="muted"> 
        		<?php 
        		echo $ctx->formation['begin'];
        		if(!empty($ctx->formation['ending'])) { echo " - ".$ctx->formation['ending'];} ?> 
	        	</p>
	        </div>
        	<div class="span4"><p class="text-info" style="text-align:right"><?php echo $ctx->formation['location']; ?> <i class="icon-globe"></i></p></div>
        	</div>
        	<ul class="nav nav-list">
					<li><?php echo $ctx->formation['degree']; ?> </li>
            </ul>
        </div>
    </div>
</div>




