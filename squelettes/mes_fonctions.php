<?php
if (!isset($GLOBALS['z_blocs']))
	$GLOBALS['z_blocs'] = array('content','aside','extra','head','head_js','header','footer','breadcrumb');

function tags_to_sound_array($tags) {
	$sons = array();
	preg_match_all("/http[A-Za-z0-9_\.\-:\/]*?.mp3/", $tags, $sons);
	return $sons[0];
}

?>