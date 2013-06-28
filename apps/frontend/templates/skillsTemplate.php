<?php require_once('menuTemplate.php'); ?>
<ul class="nav nav-tabs">
    <?php foreach ($ctx->xml as $name => $skills) : ?>
        <li><a href="#<?php echo $name; ?>"><?php echo $name; ?></a></li>
    <?php endforeach; ?>
</ul>

<?php foreach ($ctx->xml as $name => $skills) : ?>
    <div class="span12">
        <div class="thumbnail">
            <div class="caption">
                <h3 id="<?php echo $name ?>"><?php echo $name ?></h3>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Niveau</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($skills as $skill) : ?>
                            <tr class="<?php echo $skill['skin']; ?>">
                                <td><?php echo $skill['name']; ?> </td>
                                <td><?php echo $skill['level']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endforeach;
