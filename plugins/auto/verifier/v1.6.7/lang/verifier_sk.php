<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/verifier?lang_cible=sk
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// E
	'erreur_code_postal' => 'Toto PSČ je neplatné.',
	'erreur_comparaison_egal' => 'Hodnota sa musí zhodovať s poľom "@nom_champ@"', # MODIF
	'erreur_comparaison_egal_type' => 'Hodnota musí sa musí zhodovať s poľom "@nom_champ@" a musí byť rovnakého typu', # MODIF
	'erreur_comparaison_grand' => 'Hodnota musí byť väčšia ako pole "@nom_champ@"', # MODIF
	'erreur_comparaison_grand_egal' => 'Hodnota musí byť väčšia alebo rovná poľu "@nom_champ@"', # MODIF
	'erreur_comparaison_petit' => 'Hodnota musí byť menšia ako pole "@nom_champ@"', # MODIF
	'erreur_comparaison_petit_egal' => 'Hodnota musí byť menšia alebo rovná ako "@nom_champ@"', # MODIF
	'erreur_couleur' => 'Kód farby nie je platný.',
	'erreur_date' => 'Tento dátum je neplatný.',
	'erreur_date_format' => 'Formát dátumu je neplatný.',
	'erreur_decimal' => 'Hodnota musí byť desatinné číslo.',
	'erreur_decimal_nb_decimales' => 'Číslo musí mať po desatinnej čiarke viac ako @nb_decimales@ miest.',
	'erreur_email' => 'E-mailová adresa <em>@email@</em> nemá  správny formát.',
	'erreur_email_nondispo' => 'E-mailová adresa <em>@email@</em> sa už používa.',
	'erreur_entier' => 'Hodnota musí byť celé číslo.',
	'erreur_entier_entre' => 'Hodnota musí byť medzi @min@ a @max@.',
	'erreur_entier_max' => 'Hodnota musí byť menšia ako @max@.', # MODIF
	'erreur_entier_min' => 'Hodnota musí byť väčšia ako @min@.', # MODIF
	'erreur_heure' => 'Zadaný čas neexistuje.',
	'erreur_heure_format' => 'Formát času, ktorý ste zadali, nie je akceptovaný.',
	'erreur_id_document' => 'Tento identifikátor dokumentu nie je platný.',
	'erreur_inconnue_generique' => 'Formát nie je správny.',
	'erreur_isbn' => 'Číslo ISBN nie je platné (napr. 978-2-1234-5680-3 alebo 2-1234-5680-X)', # MODIF
	'erreur_isbn_13_X' => 'Číslo ISBN-13 sa nemôže končiť písmenom X.',
	'erreur_isbn_G' => 'Musí sa začínať číslami 978 alebo 979.',
	'erreur_isbn_nb_caracteres' => 'Číslo ISBN musí mať 10 alebo 13 znakov okrem spojovníkov (teraz má @nb@).',
	'erreur_isbn_nb_segments' => 'Číslo ISBN musí mať 4 alebo 5 skupín číslic (teraz má @nb@).',
	'erreur_isbn_segment' => 'V skupine "@segment@" je naviac @nb@ číslo/čísel.',
	'erreur_isbn_segment_lettre' => 'V skupine "@segment@" nesmie byť žiadne písmeno.',
	'erreur_numerique' => 'Formát čísla je neplatný.',
	'erreur_regex' => 'Reťazec pravidelného výrazu má nesprávny formát.',
	'erreur_siren' => 'IČO je neplatné.',
	'erreur_siret' => 'Obchodné meno s IČOm je neplatné.',
	'erreur_taille_egal' => 'Údaj musí mať presne @egal@ znakov (teraz má @nb@).',
	'erreur_taille_entre' => 'Údaj musí mať medzi @min@ a @max@ znakov (teraz má @nb@). ',
	'erreur_taille_max' => 'Údaj nesmie mať menej ako @max@ znakov (teraz má @nb@).',
	'erreur_taille_min' => 'Údaj nesmie mať menej ako @min@ znakov (teraz má @nb@).',
	'erreur_telephone' => 'Telefónne číslo je neplatné.',
	'erreur_url' => 'Internetová adresa <em>@url@</em> je neplatná.',
	'erreur_url_protocole' => 'Zadaná adresa <em>(@url@)</em> sa musí začínať s @protocole@', # MODIF
	'erreur_url_protocole_exact' => 'Zadaná adresa <em>(@url@)</em> sa nezačína s platným protokolom (napr. http://)', # MODIF

	// N
	'normaliser_option_date' => 'Štandardizovať dátum?',
	'normaliser_option_date_aucune' => 'Nie',
	'normaliser_option_date_en_datetime' => 'Vo formáte "Dátum a čas" (pre SQL)',

	// O
	'option_couleur_normaliser_label' => 'Štandardizovať kód farby?',
	'option_couleur_type_hexa' => 'Kód farby v hexadecimálnom (šetnástkovom) formáte',
	'option_couleur_type_label' => 'Typ overenia, ktorý sa má použiť',
	'option_decimal_nb_decimales_label' => 'Počet desatinných miest',
	'option_email_disponible_label' => 'Dostupná adresa',
	'option_email_disponible_label_case' => 'Skontrolujte, či túto adresu už nepoužíva iný používateľ',
	'option_email_mode_5322' => 'Skontrolovať podľa najprísnejších dostupných štandardov',
	'option_email_mode_label' => 'Režim kontroly e-mailov',
	'option_email_mode_normal' => 'Normálna kontrola SPIPu',
	'option_email_mode_strict' => 'Prísnejšia kontrola',
	'option_entier_max_label' => 'Maximálna hodnota',
	'option_entier_min_label' => 'Minimálna hodnota',
	'option_regex_modele_label' => 'Hodnota sa musí zhodovať s týmto výrazom',
	'option_siren_siret_mode_label' => 'Určite to chcete potvrdiť?',
	'option_siren_siret_mode_siren' => 'IČO',
	'option_siren_siret_mode_siret' => 'IČO a obchodné meno',
	'option_taille_max_label' => 'Maximálna veľkosť',
	'option_taille_min_label' => 'Minimálna veľkosť',
	'option_url_mode_complet' => 'Úplné overenie internetovej adresy',
	'option_url_mode_label' => 'Režim overenia internetovej adresy',
	'option_url_mode_php_filter' => 'Úplné overenie internetovej adresy pomocou PHP filtra FILTER_VALIDATE_URL',
	'option_url_mode_protocole_seul' => 'Iba overenie existencie protokolu',
	'option_url_protocole_label' => 'Názov protokolu, ktorý treba overiť',
	'option_url_type_protocole_exact' => 'Zadajte protokol:',
	'option_url_type_protocole_ftp' => 'Protokoly na prenos súborov: FTP alebo SFTP',
	'option_url_type_protocole_label' => 'Typ protokolu, ktorý treba overiť',
	'option_url_type_protocole_mail' => 'E-mailové protokoly: IMAP, POP3 alebo SMTP',
	'option_url_type_protocole_tous' => 'Všetky akceptované protokoly',
	'option_url_type_protocole_web' => 'Internetové protokoly: HTTP alebo HTTPS',

	// T
	'type_couleur' => 'Farba',
	'type_couleur_description' => 'Skontroluje, či je hodnota zadaný kód farby.',
	'type_date' => 'Dátum',
	'type_date_description' => 'Skontrolujte, či je dátum vo formáte DD/MM/RRRR. Oddeľovacím znakom môže byť čokoľvek (napr. ".", "/").',
	'type_decimal' => 'Desatinné číslo',
	'type_decimal_description' => 'Skontroluje, či je zadané desatinné číslo s možnosťou obmedziť jeho hodnotu určitým rozsahom a určiť počet desatinných miest.',
	'type_email' => 'E-mailová adresa',
	'type_email_description' => 'Skontrolujte, či má e-mailová adresa správnu podobu.',
	'type_email_disponible' => 'Dostupnosť e-mailovej adresy',
	'type_email_disponible_description' => 'Skontrolujte, či e-mailovú adresu už nepoužíva iný používateľ systému.',
	'type_entier' => 'Celé číslo',
	'type_entier_description' => 'Skontroluje, či je hodnotou celé číslo s možnosťou obmedziť ju dvoma hraničnými hodnotami.',
	'type_regex' => 'Pravidelný výraz',
	'type_regex_description' => 'Skontrolujte, že hodnota sa zhoduje so zadaným výrazom. Viac informácií o používaní pravidelných výrazov nájdete v <a href="http://fr2.php.net/manual/en/reference.pcre.pattern.syntax.php">internetovompomocníkovi k PHP.</a>',
	'type_siren_siret' => 'IČO alebo IČO a obchodné meno',
	'type_siren_siret_description' => 'Skontroluje, že hodnota je platné číslo z Fracúzskeho<a href="http://fr.wikipedia.org/wiki/SIREN">Système d’Identification du Répertoire des ENtreprises</a> (Obchodný register).',
	'type_taille' => 'Veľkosť',
	'type_taille_description' => 'Skontroluje, že veľkosť hodnoty zodpovedá určenej minimálnej a/lebo maximálnej hodnote.',
	'type_telephone' => 'Telefónne číslo',
	'type_telephone_description' => 'Skontroluje, či sa telefónne číslo zhoduje s rozoznávaným formátom telefónnych čísel.',
	'type_url' => 'Internetová adresa',
	'type_url_description' => 'Overí, či sa internetová adresa zhoduje s rozoznávaným formátom.'
);
