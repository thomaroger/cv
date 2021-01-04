<?php 
$message = $err->getMessage();
$class = "success";
if($err->getLevel() == Error::LOG_ERROR) {
	$class = "danger";
}?>



<div class="span12 card-body">
    <div class="card">
      <div class="card-header">
        Prise de contact
      </div>
      	<div class="card-body">
            <?php if(!empty($message)) : ?>
                <div class="alert alert-<?php echo $class; ?> alert-dismissible fade show" role="alert">
                  <h4><?php echo Error::$logs[$err->getLevel()]; ?></h4>
                  <?php echo $err->getMessage(); ?>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
        	<form method="post" id="contact-form">
			  <div class="form-group">
				<label for="email" class="control-label">Email :</label>
			    <input type="email" class="form-control" type="text" name="contact[email]" id="email" placeholder="exemple@domaine.com" required>
			  </div>
			  <div class="form-group">
			    <label for="name" class="control-label">Nom :</label>
			    <input type="text" name="contact[nom]" id="name" required placeholder="Nom" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="name" class="control-label">Prénom :</label>
			    <input type="text" name="contact[prenom]" id="name" required placeholder="Prénom" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="text" class="control-label">Message :</label>
			    <textarea name="contact[message]" id="text" required class="form-control" style="width: 100%; height: 200px;"></textarea>
			    
			  </div>
			  
			  <div class="form-actions">
	        	<button class="btn btn-primary pull-right" data-sitekey="6Lfl3BcaAAAAAG6ypz0S9uzvgANyRaaLxCzDmuI7" data-callback='onSubmit' data-action='submit'>Envoyer</button>
	        </div>
			</form>
    	</div>
    </div>
</div>

<script>
   function onSubmit(token) {
     document.getElementById("contact-form").submit();
   }
 </script>



