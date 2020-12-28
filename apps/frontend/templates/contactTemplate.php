<?php 
$message = $err->getMessage();
$class = "success";
if($err->getLevel() == Error::LOG_ERROR) {
	$class = "error";
}
if(!empty($message)) : ?>
	<div class="alert alert-<?php echo $class; ?>">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <h4><?php echo Error::$logs[$err->getLevel()]; ?></h4>
	  <?php echo $err->getMessage(); ?>
	</div>
<?php endif; ?>

<div class="span12">
	<div class="thumbnail">
        <div class="caption">
        	<h3>Prise de contact</h3>
        	<div class="row-fluid">
	        	<div class="span12">
	        		<form class="well form-horizontal" method="post" id="contact-form">
		        		<div class="control-group">
				            <label for="email" class="control-label">Email :</label>
				            <div class="controls">
				            	<input type="text" name="contact[email]" id="email "type="email" placeholder="exemple@domaine.com" required class="input-xlarge">
				            </div>
				        </div>
				        <div class="control-group">
							<label for="name" class="control-label">Nom :</label>
							<div class="controls">
								<input type="text" name="contact[nom]" id="name" required placeholder="Nom" class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
							<label for="name" class="control-label">Prénom :</label>
							<div class="controls">
								<input type="text" name="contact[prenom]" id="name" required placeholder="Prénom" class="input-xlarge">
							</div>
						</div>
						<div class="control-group">
			            	<label for="text" class="control-label">Message :</label>
			            	<div class="controls">
			            		<textarea name="contact[message]" id="text" required class="input-xlarge" style="width: 80%; height: 200px;"></textarea>
			            	</div>
			          	</div>

			          	<div class="form-actions">
				        	<button class="btn btn-primary pull-right g-recaptcha" data-sitekey="6Lfl3BcaAAAAAG6ypz0S9uzvgANyRaaLxCzDmuI7" data-callback='onSubmit' data-action='submit'>Envoyer</button>
				        </div>
				    </form>
	        	</div>
        	</div>
        </div>
    </div>
</div>

<script>
   function onSubmit(token) {
     document.getElementById("contact-form").submit();
   }
 </script>



