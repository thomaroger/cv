<div class="span12">
	<div class="thumbnail">
        <div class="caption">
        	<ul class="nav nav-list">
        		<?php foreach ($ctx->xml as $k => $other) : ?>
        			<li><?php echo $other['description']; ?> </li>
        		<?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>