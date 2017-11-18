<?php
if (!isset($GLOBALS['z_blocs']))
	$GLOBALS['z_blocs'] = array('content','aside','extra','head','head_js','header','footer','breadcrumb');

function tags_to_sound_array($tags) {
	$sons = array();
	preg_match_all("/http[A-Za-z0-9_\.\-:\/]*?.mp3/", $tags, $sons);
	return $sons[0];
}

$GLOBALS['canut_id_article_bandes_continues'] = 15;

/*
	Retourne le nombre de minutes entre deux dates
*/
function diffMinutes($date_debut,$date_fin){
	$minutes = (strtotime($date_fin) - strtotime($date_debut)) / 60; 
	return ($minutes < 0 ? 0 : abs($minutes));   
}

?>