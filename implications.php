<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/shared/header.php');
?>
<link href="/css/page.css?v=5" rel="stylesheet">
<div id="contenu">
    <div id="titre">    
	<img alt="Implications" src="/images/thing-details-link.svg">
	<span>Implications</span>
    </div>
    <div id="liste-implications" class="liste">
	<div id="implication-1" class="liste-item">
		<div class="desc-liste-item  item-implication">
		  <span class="item-l1">Atelier maternelle</span>
		  <span class="item-l2">2h - 06/04/2022</span>
		</div>
		<div class="liste-boutons">
		  <button id="liste-suppression-1" class="bouton liste-suppression">Supprimer</button>
		  <button id="liste-modification-1" class="bouton liste-modification">Modifier</button>
		</div>
	</div>   
	<div id="implication-2" class="liste-item">
		<div class="desc-liste-item  item-implication">
		  <span class="item-l1">Période autonome</span>
		  <span class="item-l2">1h - 06/05/2022</span>
		</div>
		<div class="liste-boutons">
		  <button id="liste-suppression-2" class="bouton liste-suppression">Supprimer</button>
		  <button id="liste-modification-2" class="bouton liste-modification">Modifier</button>
		</div>
	</div>   	
    </div>
    <button id="ajouter-implication" class="bouton-ajouter" aria-label="Ajouter une implication"></button>
</div>