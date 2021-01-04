<div class="clearfix">&nbsp;</div>
<div class="container text-center">
	<ul class="list-inliner">
	  	<?php foreach ($ctx->xml as $name => $skills) : ?>
			<li class="list-inline-item"><a href="#<?php echo $name; ?>"><?php echo $name; ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>

<?php foreach ($ctx->xml as $name => $skills) : ?>
<div class="span12 card-body">
    <div class="card">
      <div class="card-header" id="<?php echo $name ?>">
        <?php echo $name ?>
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
                <?php foreach ($skills as $skill) : ?>
                    <tr class="table-<?php echo $skill['skin']; ?>">
                        <td><?php echo $skill['name']; ?> </td>
                        <td><?php echo $skill['level'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </div>
    </div>
</div>
<?php endforeach; ?>

