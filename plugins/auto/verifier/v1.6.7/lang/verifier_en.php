<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/verifier?lang_cible=en
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// E
	'erreur_code_postal' => 'This postcode is invalid.',
	'erreur_comparaison_egal' => 'The value must be equal to the field "@nom_champ@"',
	'erreur_comparaison_egal_type' => 'The value must be equal to and the same type as the field "@nom_champ@"',
	'erreur_comparaison_grand' => 'The value must be greater than the field "@nom_champ@"',
	'erreur_comparaison_grand_egal' => 'The value must be greater than or equal to the field "@nom_champ@"',
	'erreur_comparaison_petit' => 'The value must be less than the field "@nom_champ@"',
	'erreur_comparaison_petit_egal' => 'The value must be less than or equal to the field "@nom_champ@"',
	'erreur_couleur' => 'The color code is invalid.',
	'erreur_date' => 'The date is invalid.',
	'erreur_date_format' => 'The date format is invalid.',
	'erreur_decimal' => 'The value must be a decimal number.',
	'erreur_decimal_nb_decimales' => 'The number must have more than @nb_decimales@ digits after the decimal point.',
	'erreur_dimension_image' => 'The file "@name@" is too large: @taille@ (maximum @taille_max@).',
	'erreur_email' => 'The email address <em>@email@</em> is not correctly formatted.',
	'erreur_email_nondispo' => 'The email address <em>@email@</em> has already been used.',
	'erreur_entier' => 'The value must be an integer.',
	'erreur_entier_entre' => 'The value must be between @min@ and @max@.',
	'erreur_entier_max' => 'The value must not be more than @max@.',
	'erreur_entier_min' => 'The value must not be less than @min@.',
	'erreur_heure' => 'The timetable specified does not exist.',
	'erreur_heure_format' => 'The time format is not valid.',
	'erreur_id_document' => 'This document identifier is not valid.',
	'erreur_id_objet' => 'This identifier is not valid.',
	'erreur_inconnue_generique' => 'The format is invalid.',
	'erreur_isbn' => 'The ISBN number is not valid (ex: 978-2-1234-5680-3 or 2-1234-5680-X)',
	'erreur_isbn_13_X' => 'Un numéro ISBN-13 ne peut pas se terminer par X.', # a 13 digits ISBN number must not end with an X.
	'erreur_isbn_G' => 'Le premier segment doit être égal à 978 ou 979.', # the first segment must be 978 or 979.
	'erreur_isbn_nb_caracteres' => 'the ISBN number must have 10 ou 13 caracters, not including the hyphens (curently @nb@).',
	'erreur_isbn_nb_segments' => 'the ISBN number must have 4 or 5 segments (curently @nb@).',
	'erreur_isbn_segment' => 'the segment "@segment@" has @nb@ exceeding caracter(s).',
	'erreur_isbn_segment_lettre' => 'the segment "@segment@" must not have any letter.',
	'erreur_numerique' => 'The number format is invalid.',
	'erreur_objet' => 'This object is not valid.',
	'erreur_regex' => 'The regex string is incorrectly formatted.',
	'erreur_siren' => 'The SIREN number is invalid.',
	'erreur_siret' => 'The SIRET number is invalid.',
	'erreur_taille_egal' => 'The value must have exactly @egal@ characters (currently @nb@).',
	'erreur_taille_entre' => 'The value must have between @min@ and @max@ characters (currently @nb@).',
	'erreur_taille_fichier' => 'The file "@name@" is too large: @taille@ (maximum @taille_max@).',
	'erreur_taille_max' => 'The value must have no more than @max@ characters (currently @nb@).',
	'erreur_taille_min' => 'The value must have no less than @min@ characters (currently @nb@).',
	'erreur_telephone' => 'The telephone number is invalid.',
	'erreur_type_image' => 'The file "@name@" is not a web image.',
	'erreur_type_non_autorise' => 'The file "@name@" is not of an authorised type.',
	'erreur_url' => 'The URL address <em>@url@</em> is invalid.',
	'erreur_url_protocole' => 'The address entered <em>(@url@)</em> must start with @protocole@',
	'erreur_url_protocole_exact' => 'The address entered <em>(@url@)</em> does not start with a valid protocol (e.g. http://)',

	// N
	'normaliser_option_date' => 'Normalize the date?',
	'normaliser_option_date_aucune' => 'No',
	'normaliser_option_date_en_datetime' => '"Datetime" format (for SQL)',

	// O
	'option_code_postal_pays_explication' => 'Two-letter country code : FR, DZ, DE, etc.',
	'option_code_postal_pays_label' => 'Country',
	'option_comparaison_champ_champ_explication' => 'Field identifier (« name » attribute)',
	'option_comparaison_champ_champ_label' => 'Field',
	'option_comparaison_champ_comparaison_explication' => 'Type of comparison',
	'option_comparaison_champ_comparaison_label' => 'Comparison',
	'option_comparaison_champ_egal' => '== Equal',
	'option_comparaison_champ_egal_type' => '=== Identical (same kind)',
	'option_comparaison_champ_grand' => '> Greater than',
	'option_comparaison_champ_grand_egal' => '>= Greater than or equal to ',
	'option_comparaison_champ_nom_champ_explication' => 'Field name for human beings',
	'option_comparaison_champ_nom_champ_label' => 'Field name',
	'option_comparaison_champ_petit' => '< Less than',
	'option_comparaison_champ_petit_egal' => '<= Less than or equal to',
	'option_couleur_normaliser_label' => 'Normalize the color code?',
	'option_couleur_type_hexa' => 'Color code in hexadecimal format',
	'option_couleur_type_label' => 'Checking type to be made',
	'option_decimal_nb_decimales_label' => 'Number of decimal places',
	'option_email_disponible_label' => 'Available address',
	'option_email_disponible_label_case' => 'Check that the address has not already be used by another user',
	'option_email_mode_5322' => 'Check against the strictest standards available',
	'option_email_mode_label' => 'Email checking mode',
	'option_email_mode_normal' => 'Normal SPIP checking',
	'option_email_mode_strict' => 'Less permissive checking',
	'option_entier_max_label' => 'Maximum value',
	'option_entier_min_label' => 'Minimum value',
	'option_fichiers_dimension_autoriser_rotation_label' => 'Consider image rotation?',
	'option_fichiers_dimension_autoriser_rotation_label_case' => 'Click to invert maximum length and height',
	'option_fichiers_hauteur_max_label' => 'Maximum image height (in px)',
	'option_fichiers_largeur_max_label' => 'Maximum image width (in px)',
	'option_fichiers_mime_image_web_label' => 'Web image (gif, jpg, png)', # MODIF
	'option_fichiers_mime_label' => 'Mime type', # MODIF
	'option_fichiers_mime_specifique_label' => 'Un type Mime précisé ci-dessous', # MODIF
	'option_fichiers_mime_tout_mime_label' => 'All Mime types allowed by SPIP', # MODIF
	'option_fichiers_taille_max_label' => 'Maximum image weight (in kB)',
	'option_fichiers_type_mime_label' => 'Select the allowed MIME types',
	'option_id_objet_objet_label' => 'Object name (singular)',
	'option_regex_modele_label' => 'The value must match the following expression',
	'option_siren_siret_mode_label' => 'What do you verify?',
	'option_siren_siret_mode_siren' => 'SIREN number',
	'option_siren_siret_mode_siret' => 'SIRET number',
	'option_taille_max_label' => 'Maximum size',
	'option_taille_min_label' => 'Minimum size',
	'option_url_mode_complet' => 'Full verification of the URL',
	'option_url_mode_label' => 'URL verification mode',
	'option_url_mode_php_filter' => 'Full URL verification using the PHP filter FILTER_VALIDATE_URL',
	'option_url_mode_protocole_seul' => 'Verification of the existence of a protocol only',
	'option_url_protocole_label' => 'Name of the protocol to be verified',
	'option_url_type_protocole_exact' => 'Enter a protocol below:',
	'option_url_type_protocole_ftp' => 'File transfer protocols: FTP or SFTP',
	'option_url_type_protocole_label' => 'Type of protocol to be verified',
	'option_url_type_protocole_mail' => 'Mail protocols: IMAP, POP3 or SMTP',
	'option_url_type_protocole_tous' => 'All accepted protocols',
	'option_url_type_protocole_web' => 'Web protocols: HTTP or HTTPS',
	'option_url_type_protocole_webcal' => 'Webcal protocols: webcal, http ou https',

	// T
	'type_code_postal' => 'Postal code',
	'type_code_postal_description' => 'Check that the value is a valid postal code.',
	'type_comparaison_champ' => 'Comparison',
	'type_comparaison_champ_description' => 'Compare the value with another field from _request().',
	'type_couleur' => 'Colour',
	'type_couleur_description' => 'Check if the value is a color code.',
	'type_date' => 'Date',
	'type_date_description' => 'Check that the value is date in the DD/MM/YYYY format. The separator character can be anything (".", "/", etc).',
	'type_decimal' => 'Decimal number',
	'type_decimal_description' => 'Check that the value is a decimal number, with options to restrict the value to a given range and to specify the required number of decmial places.',
	'type_email' => 'Email address',
	'type_email_description' => 'Check that the email address is correctly formatted.',
	'type_email_disponible' => 'Availability of an email address',
	'type_email_disponible_description' => 'Check that the email address has not already been used by another system user.',
	'type_entier' => 'Integer',
	'type_entier_description' => 'Check that the value is an integer, with the option of being restricted between two range values.',
	'type_fichiers' => 'File properties',
	'type_fichiers_description' => 'Check certain properties of each loaded file',
	'type_id_document' => 'Document number',
	'type_id_document_description' => 'Check that the value matches an existing document number.',
	'type_id_objet' => 'Obejct number',
	'type_id_objet_description' => 'Verify that the value corresponds with an existing object value.',
	'type_isbn' => 'ISBN',
	'type_isbn_description' => 'Check that the value is a 10 or 13 digits long ISBN',
	'type_regex' => 'Regular expression',
	'type_regex_description' => 'Check that the value matches the defined expression. For more information on using regular expressions, please refer to <a href="http://fr2.php.net/manual/en/reference.pcre.pattern.syntax.php">the online PHP help</a>.',
	'type_siren_siret' => 'SIREN or SIRET',
	'type_siren_siret_description' => 'Check that the value is a valid number from the French <a href="http://fr.wikipedia.org/wiki/SIREN">Système d’Identification du Répertoire des ENtreprises</a> (Company Registry ID System).',
	'type_taille' => 'Size',
	'type_taille_description' => 'Check that the size of the value corresponds to the minimum and/or maximum specified.',
	'type_telephone' => 'Telephone number',
	'type_telephone_description' => 'Check that the telephone number matches a recognised telephone number format.',
	'type_url' => 'URL',
	'type_url_description' => 'Verify that the URL matches a recognised format.'
);
