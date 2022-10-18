<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

}
?>
<script src="/js/menu.js?v=2"></script>
<link href="/css/menu.css?v=4" rel="stylesheet">
<div id="menu-scrim" class="hidden" onclick="togglemenu();"></div>
<nav id="main-menu" class="hidden">
	<div id="menu-title">Bonjour :<br />Martin Verret</div> 
	<ul> 
		<li><a id="things-menu-item" href="/implications.php" class="">Implications</a></li>
		<!--<li><a id="rules-menu-item" data-l10n-id="rules-menu-item" href="/rules" class="">RÃ¨gles</a></li>
		<li><a id="logs-menu-item" data-l10n-id="logs-menu-item" href="/logs" class="selected">Journaux</a></li>
		<li><a id="floorplan-menu-item" data-l10n-id="floorplan-menu-item" href="/floorplan">Plan dâ€™Ã©tage</a></li>
		<li><a id="settings-menu-item" data-l10n-id="settings-menu-item" href="/settings">ParamÃ¨tres</a></li>
		<li><a id="extension-candleappstore-menu-item" href="/extensions/candleappstore">Candle store</a></li>-->
		<li><a href="logout.php" class="log-out-button text-button">Déconnexion</a></li>
	</ul>
</nav>
<button id="menu-button" class="icon-button" aria-label="Menu" onclick="togglemenu();"></button>