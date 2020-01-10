<?PHP


// Pre-Correction : Textual Replacements made in Harvard Kyoto Encoded Text
// Post-Correction : Textual Replacements made in Unicode Indic Text

function transliterate($text,$source,$target)

{

include "trans/diCrunch/diCrunch_config-en.php";
include "trans/diCrunch/diCrunch_charsets.php";
include "trans/diCrunch/diCrunch_preprocess.php";

$text = stripslashes($text);

if (!empty($text)) {
	$text = str_replace($ch[$source], $ch['hk'], $text);
	include "trans/diCrunch/diCrunch_Pre_Correction.php";
	$text = str_replace($ch['hk'], $ch[$target], $text);
}


include_once "trans/diCrunch/diCrunch_postprocess.php";

/* Script cruncher */
	
if (in_array($source, $indic_scripts)) {
	include "trans/diCrunch/diCrunch_{$source}.php";
	include "trans/diCrunch/diCrunch_indic_source.php";
	include "trans/diCrunch/diCrunch_Pre_Correction.php";
	$text = str_replace($ch['hk'], $ch[$target], $text);
	
}

if (in_array($target, $indic_scripts)) {
	include "trans/diCrunch/diCrunch_{$target}.php";
	include "trans/diCrunch/diCrunch_indic_target.php";
	
}

include_once "trans/diCrunch/diCrunch_Post_Correction.php";

return $text;

}

?>