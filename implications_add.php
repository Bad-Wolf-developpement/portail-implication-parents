<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/shared/header.php');
?>
<link href="/css/page.css?v=8" rel="stylesheet">
<div id="contenu">
	<div id="titre">    
		<img alt="Implications" src="/images/thing-details-link.svg">
		<span>Ajouter une implication</span>
	</div>
	<form id="add-form" class="add-form">
		<input type="text" id="activite" name="activite" required="" placeholder="Activité">
		<div class="radio-title">Activité de co-éducation</div>
		<div class="radio-title">
		    <input type="radio" name="coeduc" id="coeduc_oui" value="oui">
		    <label for="contact_email">Oui</label>
		</div>
		<div>
		    <input type="radio" name="coeduc" id="coeduc_non" value="non">
		    <label for="contact_phone">Non</label>
		</div>        
		<input type="text" id="activite" name="activite" required="" placeholder="Activité">
		<div id="add-error" class="error hidden"></div>
		<button id="user-settings-add-save" class="user-settings-save" type="submit">Enregistrer</button>
	</form>  	
    <button id="ajouter-implication" class="bouton-ajouter" aria-label="Ajouter une implication"></button>
</div>