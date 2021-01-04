<div class="span12 card-body">
    <div class="card">
      <div class="card-header">
        Dernière expérience
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $ctx->experience['position'].", ".$ctx->experience['company'] ?></h5>
        <p class="muted"> 
        <?php 
        echo $ctx->experience['begin'];
        if(!empty($ctx->experience['ending'])) { echo " - ".$ctx->experience['ending'];} ?> 
        </p>
        <div class="span4"><p class="text-info" style="text-align:right"><?php echo $ctx->experience['location']; ?> <i class="fa fa-map-marked"></i></p>
        </div>
        <ul class="list-group list-group-flush">
            <?php  foreach ($ctx->experience['details']['detail'] as $key => $value) :  ?>
                <li class="list-group-item"><?php echo $value; ?> </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>

<div class="span12 card-body">
    <div class="card">
      <div class="card-header">
        Liste des compétences actuellement utilisées
      </div>
      <div class="card-body">
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
                                <tr class="table-<?php echo $skill['skin']; ?>">
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

<div class="span12 card-body">
    <div class="card">
      <div class="card-header">
        Dernière formation
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $ctx->formation['company']; ?></h5>
        <p class="muted"> 
        <?php 
            echo $ctx->formation['begin'];
            if(!empty($ctx->formation['ending'])) { echo " - ".$ctx->formation['ending'];} ?>  
        </p>
        <div class="span4"><p class="text-info" style="text-align:right"><?php echo $ctx->formation['location'];?> <i class="fa fa-map-marked"></i></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $ctx->formation['degree']; ?></li>
        </ul>
        </div>
    </div>
</div>
