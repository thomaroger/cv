<div class="span12 card-body">
        <div class="card">
          <div class="card-body">
            <ul class="list-group list-group-flush">
                <?php foreach ($ctx->xml as $k => $other) : ?>
                    <li class="list-group-item"><?php echo $other['description']; ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>