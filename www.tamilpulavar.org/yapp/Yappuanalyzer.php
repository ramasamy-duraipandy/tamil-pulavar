<?PHP
//include("exactmatch.php");
error_reporting (0);

class Yappuanalyzer

{
	public $ParseTreeRoot;
	
	public $InputSourceText;
	
	public $MetreType;

	public $TotalLines;

	public $WordBond;
	public $VenLastSyllable;
	public $LetterCount;
	public $LineClass;
	public $VikalpaCount;
	
	
	public $YWordType = array (
			
			"nE_r" => "nE_r",
			"nirY" => "nirY",
			"nE_rpu" => "nE_rpu",
			"nirYpu" => "nirYpu",
			
			// Two Asais
			"tEmA" => "tEmA",
			"puLimA" => "puLimA",
			"kUviLa_m" => "pAtiri",
			"karuviLa_m" => "kaNaviri",
		
			"nE_rpunE_r" => "pOtupU",
			"nirYpunE_r" => "viRakutI",
			
			"nE_rnE_rpu" => "pOrERu",
			"nE_rnirYpu" => "pUmarutu",
			"nirYnE_rpu" => "kaTiyARu",
			"nirYnirYpu" => "maZakaLiRu",
			
			"nE_rpunE_rpu" => "vITupERu",
			"nE_rpunirYpu" => "mARukuruku",
			"nirYpunE_rpu" => "varakucORu",
			"nirYpunirYpu" => "muru_TTumarutu",
			
			"nE_rpunirY" => "nITukoTi",
			"nirYpunirY" => "kuZaRupuli",
			
			// Tuumani keZuumani is missing
			
			// Three Asais
			"nE_rnE_rnE_r" => "mAce_lvA_y",
			"nE_rnirYnE_r" => "mApaTuvA_y",
			"nE_rnE_rpunE_r" => "mApOkuvA_y",
			"nE_rnirYpunE_r" => "mAvaZa_GkuvA_y",
			
			"nirYnE_rnE_r" => "pulice_lvA_y",
			"nirYnirYnE_r" => "pulipaTuvA_y",
			"nirYnE_rpunE_r" => "pulipOkuvA_y",
			"nirYnirYpunE_r" => "pulivaZa_GkuvA_y",
			
			"nE_rpunE_rnE_r" => "pA_mpuce_lvA_y",
			"nE_rpunirYnE_r" => "pA_mpupaTuvA_y",
			"nE_rpunE_rpunE_r" => "pA_mpupOkuvA_y",
			"nE_rpunirYpunE_r" => "pA_mpuvaZa_GkuvA_y",
			
			"nirYpunE_rnE_r" => "kaLiRuce_lvA_y",
			"nirYpunirYnE_r" => "kaLiRupaTuvA_y",
			"nirYpunE_rpunE_r" => "kaLiRupOkuvA_y",
			"nirYpunirYpunE_r" => "kaLiRuvaZa_GkuvA_y",
			
			"nE_rnE_rnirY" => "mAce_lcura_m",
			"nE_rnirYnirY" => "mApaTucura_m",
			"nE_rnE_rpunirY" => "mApOkucura_m",
			"nE_rnirYpunirY" => "mAvaZa_Gkucura_m",
			
			"nirYnE_rnirY" => "pulice_lcura_m",
			"nirYnirYnirY" => "pulipaTucura_m",
			"nirYnE_rpunirY" => "pulipOkucura_m",
			"nirYnirYpunirY" => "pulivaZa_Gkucura_m",
			
			"nE_rpunE_rnirY" => "pA_mpuce_lcura_m",
			"nE_rpunirYnirY" => "pA_mpupaTucura_m",
			"nE_rpunE_rpunirY" => "pA_mpupOkucura_m",
			"nE_rpunirYpunirY" => "pA_mpuvaZa_Gkucura_m",
			
			"nirYpunE_rnirY" => "kaLiRuce_lcura_m",
			"nirYpunirYnirY" => "kaLiRupaTucura_m",
			"nirYpunE_rpunirY" => "kaLiRupOkucura_m",
			"nirYpunirYpunirY" => "kaLiRuvaZa_Gkucura_m",
			
			"nE_rnE_rnE_rpu" => "mAce_lkATu",
			"nE_rnirYnE_rpu" => "mApaTukATu",
			"nE_rnE_rpunE_rpu" => "mApOkukATu",
			"nE_rnirYpunE_rpu" => "mAvaZa_GkukATu",
			
			"nirYnE_rnE_rpu" => "pulice_lkATu",
			"nirYnirYnE_rpu" => "pulipaTukATu",
			"nirYnE_rpunE_rpu" => "pulipOkukATu",
			"nirYnirYpunE_rpu" => "pulivaZa_GkukATu",
			
			"nE_rpunE_rnE_rpu" => "pA_mpuce_lkATu",
			"nE_rpunirYnE_rpu" => "pA_mpupaTukATu",
			"nE_rpunE_rpunE_rpu" => "pA_mpupOkukATu",
			"nE_rpunirYpunE_rpu" => "pA_mpuvaZa_GkukATu",
			
			"nirYpunE_rnE_rpu" => "kaLiRuce_lkATu",
			"nirYpunirYnE_rpu" => "kaLiRupaTukATu",
			"nirYpunE_rpunE_rpu" => "kaLiRupOkukATu",
			"nirYpunirYpunE_rpu" => "kaLiRuvaZa_GkukATu",
			
			"nE_rnE_rnirYpu" => "mAce_lkaTaRu",
			"nE_rnirYnirYpu" => "mApaTukaTaRu",
			"nE_rnE_rpunirYpu" => "mApOkukaTaRu",
			"nE_rnirYpunirYpu" => "mAvaZa_GkukaTaRu",
			
			"nirYpunE_rnirYpu" => "pulice_lkaTaRu",
			"nirYpunirYnirYpu" => "pulipaTukaTaRu",
			"nirYpunE_rpunirYpu" => "pulipOkukaTaRu",
			"nirYpunirYpunirYpu" => "pulivaZa_GkukaTaRu",
			
			"nE_rpunE_rnirYpu" => "pA_mpuce_lkaTaRu",
			"nE_rpunirYnirYpu" => "pA_mpupaTukaTaRu",
			"nE_rpunE_rpunirYpu" => "pA_mpupOkukaTaRu",
			"nE_rpunirYpunirYpu" => "pA_mpuvaZa_GkukaTaRu",
			
			"nirYpunE_rnirYpu" => "kaLiRuce_lkaTaRu",
			"nirYpunirYnirYpu" => "kaLiRupaTukaTaRu",
			"nirYpunE_rpunirYpu" => "kaLiRupOkukaTaRu",
			"nirYpunirYpunirYpu" => "kaLiRuvaZa_GkukaTaRu" 
	);
	
	public $LineType = array (
			"",
			"taVi_cco_l",
			"kuRaLaTi",
			"ci_ntaTi",
			"_aLavaTi",
			"neTilaTi",
			"_aRucI_r_k kaZineTilaTi",
			"_eZucI_r_k kaZineTilaTi",
			"_e_NcI_r_k kaZineTilaTi",
			"_o_Vpati_ncI_r_k kaZineTilaTi",
			"pati_VcI_r_k kaZineTilaTi",
			"patiVoru cI_r_k kaZineTilaTi",
			"pa_VViru cI_r_k kaZineTilaTi",
			"patimU_VRu cI_r_k kaZineTilaTi",
			"patiVA_Vku cI_r_k kaZineTilaTi",
			"patiVY_ntu cI_r_k kaZineTilaTi",
			"patiVARu cI_r_k kaZineTilaTi",
			"patiVEZu cI_r_k kaZineTilaTi",
			"patiVe_TTu cI_r_k kaZineTilaTi",
			"pa_tto_Vpatu cI_r_k kaZineTilaTi",
			"_irupatu cI_r_k kaZineTilaTi",
			"_irupa_ttoru cI_r_k kaZineTilaTi",
			"_irupa_ttu _ira_NTu cI_r_k kaZineTilaTi",
			"_irupa_ttu mU_VRu cI_r_k kaZineTilaTi",
			"_irupa_ttu nA_Vku cI_r_k kaZineTilaTi" 
	);
	public $SyllableTypes = array (
			"nE_r",
			"nirY",
			"nE_rpu",
			"nirYpu"
			 
	);
	
	/** Tolkaappiyam Line Classes **/
	
	public $TolLineClass = array (
	
		4 => "kuRaLaTi",
		5 => "kuRaLaTi",
		6 => "kuRaLaTi",
		7 => "ci_nta_Ti",
		8 => "ci_nta_Ti",
		9 => "ci_nta_Ti",
		10 => "aLavaTi",
		11 => "aLavaTi",
		12 => "aLavaTi",
		13 => "aLavaTi",						
		14 => "aLavaTi",								
		15 => "neTiLaTi",
		16 => "neTiLaTi",
		17 => "neTiLaTi",				
		18 => "kaZineTiLaTi",						
		19 => "kaZineTiLaTi",						
		20 => "kaZineTiLaTi",				
	);
			
/* yapparungalaparsetree functions
*
*/
			
			
	/**
	 * Reference Array for getting the Word Type
	 *
	 * @var String Array
	 */
	public $WordType = array (
			
			// Two Asais
			
			"nE_rnE_r" => "tEmA",
			"nirYnE_r" => "puLimA",
			"nE_rnirY" => "kUviLa_m",
			"nirYnirY" => "karuviLa_m",
			
			// Three Asais - Kay seers
			
			"nE_rnE_rnE_r" => "tEmA_GkA_y",
			"nirYnE_rnE_r" => "puLimA_GkA_y",
			"nE_rnirYnE_r" => "kUviLa_GkA_y",
			"nirYnirYnE_r" => "karuviLa_GkA_y",
			
			// Three Asais - Kani seers
			
			"nE_rnE_rnirY" => "tEmA_GkaVi",
			"nirYnE_rnirY" => "puLimA_GkaVi",
			"nE_rnirYnirY" => "kUviLa_GkaVi",
			"nirYnirYnirY" => "karuviLa_GkaVi",
			
			// Four Asais - Tanpuu seers
			
			"nE_rnE_rnE_rnE_r" => "tEmA_nta_NpU",
			"nirYnE_rnE_rnE_r" => "puLimA_nta_NpU",
			"nE_rnirYnE_rnE_r" => "kUviLa_nta_NpU",
			"nirYnirYnE_rnE_r" => "karuviLa_nta_NpU",
			
			// Four Asais - naRumpU seers
			
			"nE_rnE_rnirYnE_r" => "tEmAnaRu_mpU",
			"nirYnE_rnirYnE_r" => "puLimAnaRu_mpU",
			"nE_rnirYnirYnE_r" => "kUviLanaRu_mpU",
			"nirYnirYnirYnE_r" => "karuviLanaRu_mpU",
			
			// Four Asais - naRunizhal
			
			"nE_rnE_rnirYnirY" => "tEmAnaRuniZa_l",
			"nirYnE_rnirYnirY" => "puLimAnaRuniZa_l",
			"nE_rnirYnirYnirY" => "kUviLanaRuniZa_l",
			"nirYnirYnirYnirY" => "karuviLanaRuniZa_l",
			
			// Four Asais- Tannizhal
			
			"nE_rnE_rnE_rnirY" => "tEmA_nta_NNiZa_l",
			"nirYnE_rnE_rnirY" => "puLimA_nta_NNiZa_l",
			"nE_rnirYnE_rnirY" => "kUviLa_nta_NNiZa_l",
			"nirYnirYnE_rnirY" => "karuviLa_nta_NNiZa_l",
			
			// Singla ASai - Exceptions
			
			"nE_r" => "mA",
			"nirY" => "viLa_m" 
	);
	public $VenpaaWordClass = array (
			
			"nE_r" => "nA_L",
			"nirY" => "mala_r",
			"nE_rpu" => "kAcu",
			"nirYpu" => "piRa_ppu" 
	);
	
	/**
	 * Class Constructor
	 *
	 * @param String $ProsodyText        	
 	
	 */
	function __construct($ProsodyText) 

	{
	$ProsodyText = trim ( Tamil_to_Roman ( $ProsodyText ) );
		
		if ($uyirU) {
			
			$ProsodyText = preg_replace ( "/([kcTpR]u)(\s)(_[aAiIuUeEoO])/", '($1)$2$3', $ProsodyText );
			$ProsodyText = preg_replace ( "/([kcTpR]u)(\s*\n)(_[aAiIuUeEoO])/", '($1)$2$3', $ProsodyText );
			$_POST ['ttxt'] = Roman_to_Tamil ( $ProsodyText );
		}

		$this->InputSourceText = $ProsodyText; // Assigining Source Text to the
		                                       // Variable
		$this->LetterCount = $this->GetLetterCount ( $ProsodyText );
		$this->ParseTreeRoot [] = $this->GetTextSyllablePattern ( $ProsodyText );
		$this->ParseTreeRoot_1 [] = $this->GetTextSyllablePattern_1 ( $ProsodyText );
		$this->VikalpaCount = $this->GetVikalpaCount ($ProsodyText);
		$this->WordBond = $this->GetWordBond ( $this->ParseTreeRoot_1);
		$this->LineClass = $this->GetLineClass ( $this->ParseTreeRoot_1 );
		$this->MetreType = $this->GetMetreType ( $this->ParseTreeRoot_1 );
		$this->WordBond = $this->GetWordBond ( $this->ParseTreeRoot );
		$this->LineClass = $this->GetLineClass ( $this->ParseTreeRoot );
		$this->MetreType = $this->GetMetreType ( $this->ParseTreeRoot );
	
	}
	
	/**
	 * Returns the Various Count of Letters as an Array
	 *
	 * @param String $ProsodyText        	
	 * @return Associaative Array
	 */
	public function GetLetterCount($ProsodyText) {
		$TamilText = trim ( Roman_to_Tamil ( $ProsodyText ) );
		//return "hai";
		//exit;
		$this->lat = "Vinodh" . $TamilText;
		
		/* Initialize Variables */
		
		$VowelCount = 0;
		$ConsonantVowelCount = 0;
		$VowelSignCount = 0;
		$AMeyCount = 0;
		$LetterCount = array ();
		$ShortCount = 0;
		$LongCount = 0;
		$VowelList = array (
				"அ",
				"ஆ",
				"இ",
				"ஈ",
				"உ",
				"ஊ",
				"எ",
				"ஏ",
				"ஐ",
				"ஒ",
				"ஓ",
				"ஔ" 
		);
		$VowelSignList = array (
				"ா",
				"ி",
				"ீ",
				"ு",
				"ூ",
				"ெ",
				"ே",
				"ை",
				"ொ",
				"ோ",
				"ௌ" 
		);
		$AMeyList = array (
				"க",
				"ங",
				"ச",
				"ஜ",
				"ஞ",
				"ட",
				"ண",
				"த",
				"ந",
				"ன",
				"ப",
				"ம",
				"ய",
				"ர",
				"ற",
				"ல",
				"ள",
				"ழ",
				"வ",
				"ஶ",
				"ஷ",
				"ஸ",
				"ஹ" 
		);
		
		/*
		 * Count Vowels
		 */
		
		foreach ( $VowelList as $Vowel )
			$VowelCount += substr_count ( $TamilText, $Vowel );
			
			/*
		 * Count Mey-s
		 */
		
		$ConsonantCount = substr_count ( $TamilText, "்" );
		
		/*
		 * Count Aytham
		 */
		
		$AythamCount = substr_count ( $TamilText, "ஃ" );
		
		/*
		 * Count A Mey
		 */
		 
		 /* Aikaara-kurukkam and Aukaara-kurukkam with Romamized Text */
		 
		 /* ai - First Syllable - 1.5 Matra (hence Long)
		        - Middle and Final Syllable - 1 Matra (hence Short) */
		        
		$ProsodyText = str_replace ( array (
						"W",
						"Y" 
				), array (
						"B",
						"Q" 
				), $ProsodyText ); // B-aukarakurukkam
				            // Q-Aikaarakurukkam
				
		$ProsodyText = preg_replace ( "/(\b.)B/", "$1W", $ProsodyText );		
		$ProsodyText = preg_replace ( "/(\b.)Q/", "$1Y", $ProsodyText );		        
		 	
		$shortVowels = array("a","i","u","e","o","B","Q");
		$longVowels = array("A","I","U","E","O","Y","W");
		$extraLong = array("A_a","I_i","U_u","E_e","O_o","B_i");

		foreach ( $extraLong as $extra )
			{
				$LongCount += substr_count ( $ProsodyText, $extra );		
				$ProsodyText = str_replace( $extra,"",$ProsodyText );
			}

		foreach ( $longVowels as $long )
			$LongCount += substr_count ( $ProsodyText, $long );		
			
		
		foreach ( $shortVowels as $short )
			$ShortCount += substr_count ( $ProsodyText, $short );					
						
		foreach ( $AMeyList as $amy )
			$AMeyCount += substr_count ( $TamilText, $amy );
		
		$ConsonantVowelCount = $AMeyCount - $ConsonantCount;
		
		$LetterCount ['Vowel'] = $VowelCount;
		$LetterCount ['Consonant'] = $ConsonantCount;
		$LetterCount ['ConsonantVowel'] = $ConsonantVowelCount;
		$LetterCount ['Aytham'] = $AythamCount;
		$LetterCount ['Short'] = $ShortCount;
		$LetterCount ['Long'] = $LongCount;
				
		return $LetterCount;
	}
	
	/* Returns the number of Matras in the word */
	public function GetMatraCount($word) {
		$Count1 = 0;
		$Count1half = 0;
		$Count2 = 0;
	
		$word = str_replace ( array (
						"W",
						"Y" 
				), array (
						"B",
						"Q" 
				), $word ); // B-aukarakurukkam
				            // Q-Aikaarakurukkam
				
		$word = preg_replace ( "/(\b.)B/", "$1W", $word );		
		$word = preg_replace ( "/(\b.)Q/", "$1Y", $word );

		$word = preg_replace ( "/W(\b.)/", "*$1", $word );		
		$word = preg_replace ( "/Y(\b.)/", "&$1", $word );
		
		$matra1 = array("a","i","u","e","o","B","Q");
		$matra1half = array("Y","W"); 
		$matra2 = array("A","I","U","E","O","*","&"); // Complete ai's and au's
		$matrahalf = "_";
		$kutrya_uk	=	array("ku","cu","Tu","tu","pu","Ru");

		foreach($matra1 as $letter)
		{
			$Count1 += substr_count ( $word, $letter );
			$word = str_replace("_".$letter,"",$word);
		}

		foreach($matra1half as $letter)
		{
			$Count1half += substr_count ( $word, $letter );
			$word = str_replace("_".$letter,"",$word);			
		}
				
		foreach($matra2 as $letter)
		{
			$Count2 += substr_count ( $word, $letter );
			$word = str_replace("_".$letter,"",$word);			
		}
			
		$Counthalf = substr_count($word,$matrahalf);
		
		$MatraCount = ($Count1 * 1) + ($Count1half * 1.5) + ($Count2 * 2) + ($Counthalf * 0.5);
		//return substr($word,-2);
		//return $word;
		if(in_array(substr($word,-2),$kutrya_uk))
			$MatraCount = $MatraCount-0.5;
		return $MatraCount;
	
	}
	
	/**
	 * Returns the Class of each Prosody Line as an Array .
	 *
	 * ..
	 *
	 * @return multitype:String
	 *
	 */
	public function GetLineClass($ParseTreeRoot) 

	{
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $ParseTreeRoot ), RecursiveIteratorIterator::SELF_FIRST );
		
		foreach ( $rit as $key => $value )
			if ($rit->hasChildren () === FALSE)
				if ($key == "smeta")
					$LineClass [] = $this->LineType [$value];
		
		return $LineClass;
	}
	
	/**
	 * Returns the Talai information as an Associative Array
	 *
	 * @param ParseTree $root        	
	 * @return multitype:string
	 */
	public function GetWordBond($root) 

	{
		$SyllableBond = array ();
		
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::LEAVES_ONLY );
		
		$WordClass = array ();
		$Syllable = "";
		$Word = array ();
		$SyllableClass = array ();
		$FirstSyllable = TRUE;
		
		/*
		 * Push the Word with Divides, WordClass (Tema, Pulima, etc) & First
		 * Syllable Class (ner nirai) into two Arrays to calculate the Talai.
		 */
		
		foreach ( $rit as $key => $value ) {
			
			if ($key == "nE_r" || $key == "nirY") {
				
				$Syllable = $Syllable . $value . "/";
				
				if ($FirstSyllable) {
					array_push ( $SyllableClass, $key );
					$FirstSyllable = FALSE;
				}
			}
			
			if ($key == "meta") {
				array_push ( $WordClass, $value );
				array_push ( $Word, $Syllable );
				$Syllable = "";
				$FirstSyllable = TRUE;
			}
		}
		
		$Bond = "";
		
		/*
		 * Compare the Word Class & Syllable Class to calculate the Talai
		 */
		
		for($i = 0; $i < count ( $Word ) - 1; $i ++) 

		{
			
			$Bond ['word1'] = $Word [$i];
			$Bond ['word2'] = $Word [$i + 1];
			$Bond ['class1'] = $WordClass [$i];
			$Bond ['class2'] = $SyllableClass [$i + 1];
			
			// $tl[$seer[$i]]=$vayp[$i];
			// $tl[$seer[$i+1]]=$asai[$i+1];
			
			if (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 2 ) == "mA" && ($SyllableClass [$i + 1] == "nE_r")) 

			{
				$Bond ['bond'] = "நேரொன்றிய ஆசிரியத்தளை";
			} 

			else if (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 6 ) == "viLa_m" && ($SyllableClass [$i + 1] == "nirY")) 

			{
				
				$Bond ['bond'] = "நிரையொன்றிய ஆசிரியத்தளை";
			} 

			else if ((substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 2 ) == "mA" && ($SyllableClass [$i + 1] == "nirY")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 6 ) == "viLa_m" && ($SyllableClass [$i + 1] == "nE_r"))) 

			{
				$Bond ['bond'] = "இயற்சீர் வெண்டளை";
			} 

			else if ((substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 4 ) == "kA_y" && ($SyllableClass [$i + 1] == "nE_r")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 2 ) == "pU" && ($SyllableClass [$i + 1] == "nE_r"))) 

			{
				
				$Bond ['bond'] = "வெண்சீர் வெண்டளை";
			} 

			else if ((substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 4 ) == "kaVi" && ($SyllableClass [$i + 1] == "nirY")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 6 ) == "niZa_l" && ($SyllableClass [$i + 1] == "nirY")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 6 ) == "NiZa_l" && ($SyllableClass [$i + 1] == "nirY"))) 

			{
				$Bond ['bond'] = "ஒன்றிய வஞ்சித்தளை";
			} 
			
			else if ((substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 4 ) == "kaVi" && ($SyllableClass [$i + 1] == "nE_r")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 6 ) == "niZa_l" && ($SyllableClass [$i + 1] == "nE_r")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 6 ) == "NiZa_l" && ($SyllableClass [$i + 1] == "nE_r"))) 

			{
				$Bond ['bond'] = "ஒன்றா வஞ்சித்தளை";
			} 

			else if ((substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 4 ) == "kA_y" && ($SyllableClass [$i + 1] == "nirY")) || (substr ( $WordClass [$i], strlen ( $WordClass [$i] ) - 2 ) == "pU" && ($SyllableClass [$i + 1] == "nirY"))) 

			{
				$Bond ['bond'] = "கலித்தளை";
			}
			
			$SyllableBond [] = $Bond;
			
			$Bond = "";
		}
		
		return $SyllableBond;
	}
	
	/**
	 * Displays Talai Information as a Table
	 */
	public function DisplayWordBond() 

	{
		$val .= "<table border=0 CELLSPACING=10>";
		
		$val .= <<<CWS
<tr>
CWS;
		$val .= "<th><span class=\"uiTran\">" . "சீர்கள்". "</span></th>";
		$val .= "<th><span class=\"uiTran\">" . "வாய்ப்பாடு - அசை" . "</span></th>";
		$val .= "<th><span class=\"uiTran\">" .  "தளை". "</span></th>";
		$val .= "</tr>";
		
		foreach ( $this->WordBond as $Bond ) 

		{
			
			$val .= "<tr>";
			$val .= "<td><span class=\"tal-seer uiTrant\">";
			
			$val .= Roman_to_Tamil ( $Bond ['word1'] ). " - " . Roman_to_Tamil ( $Bond ['word2'] );
			
			$val .= "</span></td>";
			//exit;
			$val .= "<td><span class=\"tal-asai uiTrant\">";
			
			$val .= Roman_to_Tamil ( $Bond ['class1'] ). " - " . Roman_to_Tamil ( $Bond ['class2'] );
			
			$val .= "</span></td>";
			
			$val .= "<td>";
			
			if ($Bond ['bond'] == "நேரொன்றிய ஆசிரியத்தளை" || $Bond ['bond'] == "நிரையொன்றிய ஆசிரியத்தளை")
				
				$val .= "<span class=\"aatalai uiTrant\">";
			
			else if ($Bond ['bond'] == "இயற்சீர் வெண்டளை" || $Bond ['bond'] == "வெண்சீர் வெண்டளை")
				
				$val .= "<span class=\"vetalai uiTrant\">";
			
			else if ($Bond ['bond'] == "ஒன்றிய வஞ்சித்தளை" || $Bond ['bond'] == "ஒன்றா வஞ்சித்தளை")
				
				$val .= "<span class=\"vatalai uiTrant\">";
			
			else if ($Bond ['bond'] == "கலித்தளை")
				
				$val .= "<span class=\"katalai uiTrant\">";
			
			$val .= $Bond ['bond'];
			
			$val .= "</td>";
			$val .= "</span>";
			$val .= "</tr>";
			//exit;
		}
		
		$val .= "</table>";
		
		$thalai_detail = $val;
		return ($thalai_detail);
		//exit;
	}
	
	//for getting thalais
	
public function thalais()
	{
		
		$uyir_yeluthu = array('_a', '_A','_i', '_I','_u','_U','_e','_E','_Y','_o','_O','_W');
		$AllowedWordClass = array (
				"tEmA",
				"puLimA",
				"kUviLa_m",
				"karuviLa_m",
				"tEmA_GkA_y",
				"puLimA_GkA_y",
				"kUviLa_GkA_y",
				"karuviLa_GkA_y" 
		); 
		$Lines = explode (PHP_EOL, trim ( $this->InputSourceText ) );
		
		foreach($Lines as $line)
		{
			
			$word[] = explode(" ",$line);	
			
		}
		//return $word;
		//for checking adi_wise
		$tot_lines = count($word);
		$last_line = $tot_lines - 1;
		for($a=0;$a<$tot_lines;$a++)
			{
				
				$ati[$a] = RemovePunctuation(str_replace("-"," ",$word[$a]));
				
			}
			
		//for checking last adi and last asai vaipattu_wise
		foreach($ati[$last_line] as $at_words)
			{
				
				$a_words[] = $at_words;
				
			}
		//return $a_words;	
		$t_a_words = count($a_words);
		//return $t_a_words;
		if($t_a_words == 2)
		{
			
			$word_frm_splitted = end($a_words);
			$word_frm_splitted_syllable[] = $this->GetTextSyllablePattern($word_frm_splitted);
			//return $word_frm_splitted_syllable;
			$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($word_frm_splitted_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
			foreach ( $rit as $key => $value ) 
				{
				
			 	$word_frm_splitted_keys[] = $key;  	
				
				}
			
			foreach ( $rit as $key => $value ) 
				{
				
			 	$word_frm_splitted_values[] = $value;  	
				
				}
				
			//return $word_frm_splitted_values;	
			$T_word_frm_splitted_values = count($word_frm_splitted_values)-4;
			$T_one_more_word_join = count($word_frm_splitted_values)-3;
			$one_more_word_join = $word_frm_splitted_values[$T_one_more_word_join];
			$one_more_word_join = str_replace('Q','Y',$one_more_word_join);
			//return Roman_to_Tamil($one_more_word_join);
			if(strlen($one_more_word_join) > 2)
				{
					
					foreach($a_words as $a_word)
						{
				
							$fin_ati_words1[] = str_replace($one_more_word_join,"",$a_word);
				
						}
				array_push($fin_ati_words1,$one_more_word_join);
				
				foreach($fin_ati_words1 as $fin_ati_word_1)
					{
						
						$last_ati .= $fin_ati_word_1." ";
						
						
					}	
				//return Roman_to_Tamil($last_ati);	
					
				}
			else
			{
				
			$word_frm_splitted = $word_frm_splitted_values[$T_word_frm_splitted_values];
			$final_splitted_word = $word_frm_splitted.$one_more_word_join;
				foreach($a_words as $a_word)
				{
				
					$fin_ati_words[] = str_replace($final_splitted_word,"",$a_word);
				
				}
				array_push($fin_ati_words,$final_splitted_word);
				
				foreach($fin_ati_words as $fin_ati_words_1)
				{
				
				$last_ati .= $fin_ati_words_1." ";
				
				}
			//return $last_ati;
			}
			
			unset($word_frm_splitted_syllable);
			unset($word_frm_splitted_keys);
			unset($word_frm_splitted_values);
		}
		else
			{
			//getting lastword from given sentence
			$a_l_word = $a_words[$t_a_words -1];
			//return $a_l_word;
			//checking last word asai
			$a_l_w_syllable[] = $this->GetTextSyllablePattern_1($a_l_word);
			//return $a_l_w_syllable;
			//return $a_l_w_syllable;
			//checking syllable keys only ner,niry,nerpu and nirypu 
			$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($a_l_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
			foreach ( $rit as $key => $value ) 
				{
					
					$a_w_keys[] = $key;  	
					
				}
				
			foreach ( $rit as $key => $value ) 
				{
					
					$a_w_values[] = $value;  	
					
				}
			//return Roman_to_Tamil($a_w_values);	
			
			//Forming the sentence according with vaaipattu seer	
			if(count($a_w_values) >= 3)
			{
			//return $a_w_values;				
			//return $l_a_words;
			
			$t_a_w_values = count($a_w_values);
			for($i=0;$i<$t_a_w_values;$i++)
				{
					
					if($i == $t_a_w_values - 3)
					{
	
						$splitted_word =$a_w_values[$i]; 
						
					}
					
					
				}
			$splitted_word = str_replace('Q','Y',$splitted_word);
			foreach($a_words as $a_word)
				{
					
				$a_words1[] =str_replace($splitted_word,"",$a_word);
					
					
				}
			//return Roman_to_Tamil($a_words1);
			
			//return Roman_to_Tamil($word_frm_splitted);
			
			
			if(count($a_words1) >=4)
			{
				
						//return $a_words1;
						$to_join_word = end($a_words1);
						//return $to_join_word;
						foreach($a_words1 as $a_word1)
							{
								
							$f_words .= str_replace($to_join_word,"",$a_word1)." ";
								
							}
						$f_words = rtrim($f_words).$to_join_word." ".$splitted_word;
						$chk_f_words = explode(" ",$f_words);
							//return count($chk_f_words);
						if(count($chk_f_words) == 3)
							{
								$last_ati = $f_words;
									
							}
						else if(count($chk_f_words) == 4)
							{
									$i=0;
									foreach($chk_f_words as $chk_f_word1)
										{
											if($i==0 || $i==1)
											{
											$chk_f_word .= $chk_f_word1;
											}
											else
											{
											$chk_f_word .= " ".$chk_f_word1;	
												
											}
											$i++;
											
										}
									$last_ati = $chk_f_word;
									//return $last_ati;
									//return Roman_to_Tamil($final_ati."<br>".$chk_f_word);
									
									
								}
								else if(count($chk_f_words) > 4)
									{
										$T_chk_f_words = count($chk_f_words)-2;
										for($i=$T_chk_f_words;$i>=0;$i--)
										{
											$j=$i-1;
											if($j>=0)
											{
												$l_a_j = $chk_f_words[$j]." ".$chk_f_words[$i];
												$jo_l_a = $this->exactjoin($l_a_j);
												$syll_jo_l_a = $this->GetTextSyllablePattern(Tamil_to_Roman($jo_l_a));
												$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_jo_l_a), RecursiveIteratorIterator::LEAVES_ONLY );
				
												foreach ( $rit as $key => $value ) 
													{
					
														$jo_l_avalues[] = $value;  	
					
													}
												$T_jo_l_avalues = count($jo_l_avalues)-2;
												$asai_jo_l_a = $jo_l_avalues[$T_jo_l_avalues];
												unset($syll_jo_l_a);
												unset($jo_l_avalues);
												//return $asai_jo_l_a;	
												$syll_splitted_word = $this->GetTextSyllablePattern(Tamil_to_Roman($splitted_word));
												foreach ( $rit as $key => $value ) 
													{
					
														$jo_l_akey[] = $key;  	
					
													}
												$seer_last_word = $jo_l_akey[0];
												unset($syll_splitted_word);
												unset($jo_l_akey);
												//return $seer_last_word;	
												if((($asai_jo_l_a == 'kUviLa_m' ||$asai_jo_l_a == 'karuviLa_m' || $asai_jo_l_a == 'tEmA_GkA_y' || $asai_jo_l_a == 'puLimA_GkA_y' || $asai_jo_l_a == 'kUviLa_GkA_y' || $asai_jo_l_a == 'karuviLa_GkA_y' || $asai_jo_l_a == 'viLa_m') && ($seer_last_word == 'nE_r'))|| (($asai_jo_l_a == 'tEmA' || $asai_jo_l_a == 'puLimA' || $asai_jo_l_a == 'mA') && ($seer_last_word== 'nirY')))
												{
													
													
													foreach($chk_f_words as $chk_f_word)
													{
														if($chk_f_word == $chk_f_words[$j])
														{
															$la_ati[] =  $jo_l_a;
														}
														elseif($chk_f_word == $chk_f_words[$i])
														{
															unset($chk_f_word);
														}
														else
														{
															$la_ati[] = $chk_f_word;
														}
		
														
													}
													//return Roman_to_Tamil($la_ati);
													if(count($la_ati_1)== 4)
													{
														foreach($la_ati_1 as $la_ati_w)
														{
															
															$la_atis .= $la_ati_w." ";
														}
														
														$last_ati = $la_atis;
													}
													else
													{
														
														foreach($la_ati as $la_ati_w) 
														{
															
															if($la_ati_w == $jo_l_a)
															break;
															else
															$rem_words[] = $la_ati_w;
															
														}
														
														$rem_join_l = $rem_words[0].$rem_words[1];
														$la_ati[0] = $rem_join_l;
														unset($la_ati[1]);
														
														if(count($la_ati) == 3)
														{
															foreach($la_ati as $la_ati_w)
															{
															
																$la_ati_f .= $la_ati_w." ";
															}
															
															 $last_ati = $la_ati_f;
														}
														
														
														
														
														
														
													}
													
													
													
													
													
												}
												else
												{
												  continue;	
												}	
												
											}
												
											
										}
										
										//return "Yet to Modified";
										
									}
									
					
				
				
			}
			else if(count($a_words1) < 4)
				{
				
					$to_join_word_t = $a_words1[2];
					$to_join_word_s = $a_words1[1];
					$to_join_word_f = $a_words1[0];
					$l_at_join = $to_join_word_s." ".$to_join_word_t;
					$f_to_join_word = $this->exactjoin($l_at_join);
					//return $f_to_join_word;
					if($l_at_join != $f_to_join_word )
					{
						
						$a_words1[1]  = 	$f_to_join_word;
						unset($a_words1[2]);
						foreach($a_words1 as $a_words_w)
						{
							
							$last_ati .= $a_words_w." ";
							
							
						}
						$last_ati .= $splitted_word;
						//return Roman_to_Tamil($last_ati);
						
					}
					else
					{
						
						$l_at_join = $this->exactjoin($to_join_word_f." ".$to_join_word_s);
						//return Roman_to_Tamil($l_at_join);
						$a_words1[0] = $l_at_join;
						unset($a_words1[1]);
						
						foreach($a_words1 as $a_words_w)
						{
							
							$last_ati .= $a_words_w." ";
							
						}
						
						$last_ati .= $splitted_word;
						
						
					}
					
					//return Roman_to_Tamil($last_ati);
					//return Roman_to_Tamil($to_join_word);
					/*foreach($a_words1 as $a_word1)
						{
								
							$f_words	.= str_replace($to_join_word,"",$a_word1)." ";
								
						}
					//return Roman_to_Tamil($f_words);	
					$f_words = rtrim($f_words).$to_join_word." ".$splitted_word;
					//return Roman_to_Tamil($f_words);		
					$last_ati = $f_words;*/
					//return $last_ati;
				   //return Roman_to_Tamil($final_ati)."<br>".Roman_to_Tamil($f_words);
				  //return $a_words1;	
				
				}
			
			
			}
			//return count($a_words);
			else if(count($a_words) == 3)
				{
					
					
					foreach($a_words as $f_a_word1)
					{
						
						$f_a_word .= $f_a_word1." ";
						
					}
					$last_ati = $f_a_word;
					//return $last_ati;
					//return Roman_to_Tamil($final_ati)."<br>".Roman_to_Tamil($f_a_word);
					
					
				}
			else if(count($a_words) == 4)
				{
					$i=0;
					foreach($a_words as $a_word1)
						{
							if($i==0 || $i==1)
								{
									$a_word .= $a_word1;
								}
							else
								{
									$a_word .= " ".$a_word1;	
												
								}
							$i++;
						}
					 $last_ati = $a_word;
					// return Roman_to_Tamil($a_words);
					//return Roman_to_Tamil($final_ati)."<br>".Roman_to_tamil($a_word);
					
					
				}
			else if(count($a_words) > 4)
				 {
					 
					 
					return Roman_to_Tamil($a_words);
					 
					 
				}	
				
				unset($a_w_values);
				unset($a_l_w_syllable);
				unset($a_w_keys);
				
				
				
			}
		//return Roman_to_Tamil($last_ati);
		
		//forming the first ati as kural format
		
		foreach($ati[0] as $sam_ati1)
			{
				
				$samp_ati1 .= $sam_ati1." ";				
				
			}
			$ati1 = rtrim($samp_ati1);
			//return $ati1;
			$f_ati1 = explode(" ",$ati1);
			$l_ati = explode(" ",$last_ati);
			
			$T_f_ati1 = count($f_ati1)-1;
			$T_f_ati2 = count($f_ati1)-2;
			
			if(substr($f_ati1[$T_f_ati2],-1) == 'u')
				{
					
				 	$last_word  = $this->exactjoin($f_ati1[$T_f_ati2]." ".$f_ati1[$T_f_ati1]);
					//return $last_word;
					$letters = substr($f_ati1[$T_f_ati2],0,-2);
					//return $letters;
					$f_split = explode($letters,$last_word);
					$f_split[0] = $letters;
					$f_ati1[$T_f_ati2] = $f_split[0];
					$f_ati1[$T_f_ati1] = $f_split[1];
					//return $f_split;
					
				}	
			//return Roman_to_Tamil($f_ati1);
			
			/*taking firstword of second ati*/ 
			
			$l_ati_fword =  $l_ati[0];
			
			$l_ati_w_syllable[] = $this->GetTextSyllablePattern($l_ati_fword);
			
			$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($l_ati_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
			
			foreach ( $rit as $key => $value ) 
				{
				
			 		$l_ati_w_keys[] = $key;  	
				
				}
				
			$sec_ati_f_asai = $l_ati_w_keys[0]; /*second ati first word seer*/
			//return 	$sec_ati_f_asai;
			$f_a_l_w = end($f_ati1);/*first ati last word */
			//return $f_a_l_w;	
			$f_a_l_w_syllable[] = $this->GetTextSyllablePattern($f_a_l_w);
				
			$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($f_a_l_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
			
			foreach ( $rit as $key => $value ) 
				{
				
			 		$f_a_l_w_values[] = $value;  	
				
				}
					
			$t_f_a_l_w    =  count($f_a_l_w_values)-2;
				
			/* ---- asai for first ati last seer---- */
				
			$seer_lastword_firstati = $f_a_l_w_values[$t_f_a_l_w]; 
			unset($l_ati_w_syllable);
			unset($l_ati_w_keys);
			unset($f_a_l_w_values);
			
			//return $seer_lastword_firstati;
				
				
				/*---------Compare asai of first ati first word with second ati first word seer----------*/
								 
			if((($seer_lastword_firstati == 'kUviLa_m' ||$seer_lastword_firstati == 'karuviLa_m' || $seer_lastword_firstati == 'tEmA_GkA_y' || $seer_lastword_firstati == 'puLimA_GkA_y' || $seer_lastword_firstati == 'kUviLa_GkA_y' || $seer_lastword_firstati == 'karuviLa_GkA_y' || $seer_lastword_firstati == 'viLa_m') && ($sec_ati_f_asai == 'nE_r'))|| (($seer_lastword_firstati == 'tEmA' || $seer_lastword_firstati == 'puLimA' || $seer_lastword_firstati == 'mA') && ($sec_ati_f_asai== 'nirY')))		
						  {
								
								$T_f_ati1  = count($f_ati1)-1;
								//return $T_f_ati1;
								for($i=$T_f_ati1;$i>=0;$i--)
									{
										
										$j = $i-1;
										if($j>=0)
										{
										 $cons_word = $f_ati1[$i];
										 $prev_word = $f_ati1[$j];
										//return $cons_word;
										//return $prev_word;
										 $cons_word_syllable = $this->GetTextSyllablePattern(Tamil_to_Roman($cons_word));
										 //$k[] = $cons_word_syllable;
										 //return $cons_word_syllable;
										 $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($cons_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
										 
										  foreach ( $rit as $key => $value ) 
											{
				
			 										$cons_word_key[] = $key;  	
				
											}
										 //$k[] = $cons_word_key;	
										  $seer_cons_word = $cons_word_key[0];
										  //$k[] = $seer_cons_word;
										  unset($cons_word_syllable);
										  unset($cons_word_key);
										  //return $seer_cons_word;
										  
										  $prev_word_syllable = $this->GetTextSyllablePattern(Tamil_to_Roman($prev_word));
										  
										  $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($prev_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
										 
										  foreach ( $rit as $key => $value ) 
											{
				
			 										$prev_word_value[] = $value;  	
				
											}
										  	
										  $T_prev_word_value = count($prev_word_value)-2;
										   
										  $asai_prev_word = $prev_word_value[$T_prev_word_value];
										  unset($prev_word_syllable);
										  unset($prev_word_value);
										  //return $asai_prev_word;
										 // $k[] = $asai_prev_word." ".$seer_cons_word;
										  if((($asai_prev_word == 'kUviLa_m' ||$asai_prev_word == 'karuviLa_m' || $asai_prev_word == 'tEmA_GkA_y' || $asai_prev_word == 'puLimA_GkA_y' || $asai_prev_word == 'kUviLa_GkA_y' || $asai_prev_word == 'karuviLa_GkA_y' || $asai_prev_word == 'viLa_m') && ($seer_cons_word == 'nE_r'))|| (($asai_prev_word == 'tEmA' || $asai_prev_word == 'puLimA' || $asai_prev_word == 'mA') && ($seer_cons_word== 'nirY')))
											  {
												
											     //return $cons_word;
												 $j_w = $prev_word." ".$cons_word;
												 
												 $key_cons_word = array_keys($f_ati1,$cons_word);
												 
												 $key_fn_nxt = end($key_cons_word);
												 
												 $f_j_w  = $this->exactjoin($j_w);
												 
												 //return Roman_to_Tamil($f_j_w);
												 
												 if($f_j_w != $j_w)
												  {
												    
												   $chk_word = $f_ati1[$key_fn_nxt+1];
												   if($chk_word == "")
												   {
													   
													  $chk_word = $l_ati[0];
													   
													}
												   //return $chk_word;
												   $chk_word_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($chk_word));
												   $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($chk_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
												   foreach ( $rit as $key => $value ) 
														{
						
															$chk_word_key[] = $key;  	
						
														}
												   $seer_chk_word = $chk_word_key[0];
												   unset($chk_word_syllable);
												   unset($chk_word_key);
												   //return  $seer_chk_word;	
												   $f_j_w_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($f_j_w));
												   //return $f_j_w_syllable;
												   $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($f_j_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
						
												   foreach ( $rit as $key => $value) 
													{
						
															$f_j_w_value[] = $value;  	
						
													}
												   $T_f_j_w_value = count($f_j_w_value)-2;
												   $asai_f_j_w = $f_j_w_value[$T_f_j_w_value];
												   unset($f_j_w_syllable);
												   unset($f_j_w_value);
												   //return  $asai_f_j_w;	
												   if((($asai_f_j_w == 'kUviLa_m' ||$asai_f_j_w == 'karuviLa_m' || $asai_f_j_w == 'tEmA_GkA_y' || $asai_f_j_w == 'puLimA_GkA_y' || $asai_f_j_w == 'kUviLa_GkA_y' || $asai_f_j_w == 'karuviLa_GkA_y' || $asai_f_j_w == 'viLa_m') && ($seer_chk_word == 'nE_r'))|| (($asai_f_j_w == 'tEmA' || $asai_f_j_w == 'puLimA' || $asai_f_j_w == 'mA') && ($seer_chk_word== 'nirY')))
													   {
														 
														 foreach($f_ati1 as $fi_ati1)
															{
															 
															 if($fi_ati1 == $prev_word )
																 {
																	 
																	$fin_ati1[] = $f_j_w;
																	 
																 }
															 else if($fi_ati1 == $cons_word)
																 {
																	 
																	unset($fi_ati1); 
																	 
																 }
															 else
																 {
																	 
																	 $fin_ati1[] = $fi_ati1;
																	 
																 }	 	 
																 
															 
															}
															//return Roman_to_Tamil($fin_ati1);
															if(count($fin_ati1) == 4)
															{
																
																foreach($fin_ati1 as $fin_ati_w)
																	{
																	
																	   $f_ati_1 .= $fin_ati_w." ";
																	
																	}
																$kural = Roman_to_Tamil($f_ati_1).PHP_EOL.Roman_to_Tamil($last_ati);
																return $kural;	
																
															}
															else
																{
																	
																	
																	return Roman_to_Tamil($fin_ati1);
																	
																	
																	
																
																}  	
																
																
																
															
															}
															else
															{
															  
															  continue;	
																
															}
															
															
														 
														 
														 
														   
														}
														
														
												
											 	 continue;
												 
												 
											 
											  }
											  
										   else
											 {   
											     //return $cons_word;
												 $j_w = $prev_word." ".$cons_word;
												 
												 $key_cons_word = array_keys($f_ati1,$cons_word);
												 
												 $key_fn_nxt = end($key_cons_word);
												 
												 $f_j_w  = $this->exactjoin(Tamil_to_Roman($j_w));
												 
												 //return Roman_to_Tamil($f_j_w);
												 
												 if($f_j_w != Tamil_to_Roman($j_w))
												  {
												    
												   $chk_word = $f_ati1[$key_fn_nxt+1];
												   if($chk_word == "")
												   {
													   
													  $chk_word = $l_ati[0];
													   
													}
													 
												   //return $chk_word;
												   $chk_word_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($chk_word));
												   //$k[] = $chk_word_syllable;
												   $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($chk_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
												   foreach ( $rit as $key => $value ) 
														{
						
															$chk_word_key[] = $key;  	
						
														}
												   $seer_chk_word = $chk_word_key[0];
												   unset($chk_word_syllable);
												   unset($chk_word_key);
												   //$k[] =  $seer_chk_word;
												   //return  $seer_chk_word;
												   	
												   $f_j_w_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($f_j_w));
												  
												   //return $f_j_w_syllable;
												   $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($f_j_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
						
												   foreach ( $rit as $key => $value) 
													{
						
															$f_j_w_value[] = $value;  	
						
													}
												   $T_f_j_w_value = count($f_j_w_value)-2;
												   $asai_f_j_w = $f_j_w_value[$T_f_j_w_value];
												   unset( $f_j_w_syllable);
												   unset($f_j_w_value);
												   //return  $asai_f_j_w;
												  // $k[] = $asai_f_j_w.$seer_chk_word;	
												   if((($asai_f_j_w == 'kUviLa_m' ||$asai_f_j_w == 'karuviLa_m' || $asai_f_j_w == 'tEmA_GkA_y' || $asai_f_j_w == 'puLimA_GkA_y' || $asai_f_j_w == 'kUviLa_GkA_y' || $asai_f_j_w == 'karuviLa_GkA_y' || $asai_f_j_w == 'viLa_m') && ($seer_chk_word == 'nE_r'))|| (($asai_f_j_w == 'tEmA' || $asai_f_j_w == 'puLimA' || $asai_f_j_w == 'mA') && ($seer_chk_word== 'nirY')))
													   {
														
														 foreach($f_ati1 as $fi_ati1)
															{
															 
															 if($fi_ati1 == $prev_word )
																 {
																	 
																	$fin_ati1[] = $f_j_w;
																	 
																 }
															 else if($fi_ati1 == $cons_word)
																 {
																	 
																	unset($fi_ati1); 
																	 
																 }
															 else
																 {
																	 
																	 $fin_ati1[] = $fi_ati1;
																	 
																 }	 	 
																 
															 
															}
															//return "hai"; 
															//return Roman_to_Tamil($fin_ati1);
															if(count($fin_ati1) == 4)
															{
																
																foreach($fin_ati1 as $fin_ati_w)
																	{
																	
																	   $f_ati_1 .= $fin_ati_w." ";
																	
																	}
																$kural = Roman_to_Tamil($f_ati_1).PHP_EOL.Roman_to_Tamil($last_ati);
																return $kural;	
																
															}
															else
																{
														/* --------Determine Remaining Words To Join --------*/
															
																	$R_fin_ati1 =array_reverse($fin_ati1);
																	foreach($R_fin_ati1 as $fin_ati_wr)
																		{
																			
																		if($fin_ati_wr == $f_j_w)
																		break;
																		else
																		$part_1[] = $fin_ati_wr;
																				
																		}
																	foreach($fin_ati1 as $fin_ati_wr)
																		{
																			
																		if($fin_ati_wr == $f_j_w)
																		break;
																		else
																		$part_2[] = $fin_ati_wr;
																				
																		}
																		
																	if(count($part_1)==2)
																		{
																			$rem_join = $part_2[0]." ".$part_2[1];
																			$join_word = $this->exactjoin($rem_join);
																			$fin_ati1[0] = $join_word;
																			unset($fin_ati1[1]);
																			foreach($fin_ati1 as $fin_ati_w)
																				{
																	
																	 				  $f_ati_1 .= $fin_ati_w." ";
																	
																				}
																			$kural = Roman_to_Tamil($f_ati_1).PHP_EOL.Roman_to_Tamil($last_ati);
																			return $kural;
																			
																		}
																	else if(count($part_1)==1)
																		{
																			$T_part_2 = count($part_2)-1;
																			
																			for($i=$T_part_2;$i>=0;$i--)
																				{
																					
																					$j=$i-1;
																					if($j>=0) 
																					{
																						
																						$j_rem_word = $part_2[$j]." ".$part_2[$i];
																						$join_rem_word = $this->exactjoin($j_rem_word);
																						if($join_rem_word != $j_rem_word )
																							{
																							
																								$j_rem_word_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($join_rem_word));
												   												//return $f_j_w_syllable;
												 												$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($j_rem_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
						
												 												foreach ( $rit as $key => $value) 
																									{
						
																										$j_rem_word_value[] = $value;  	
						
																									}	
																								$T_j_rem_word_value = count($j_rem_word_value)-2;
																								$asai_join_rem_word = $j_rem_word_value[$T_j_rem_word_value];
																								unset($j_rem_word_syllable);
																								unset($j_rem_word_value);
																								/*---syllable of last join word---*/
																								$f_j_w_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($f_j_w));
																								$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($f_j_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
						
												 												foreach ( $rit as $key => $value) 
																									{
						
																										$j_rem_word_key[] = $key;  	
						
																									}
																								$seer_join_rem_word =  $j_rem_word_key[0];
																								unset($f_j_w_syllable);
																								unset($j_rem_word_key);
																								if((($asai_join_rem_word == 'kUviLa_m' ||$asai_join_rem_word == 'karuviLa_m' || $asai_join_rem_word == 'tEmA_GkA_y' || $asai_join_rem_word == 'puLimA_GkA_y' || $asai_join_rem_word == 'kUviLa_GkA_y' || $asai_join_rem_word == 'karuviLa_GkA_y' || $asai_join_rem_word == 'viLa_m') && ($seer_join_rem_word == 'nE_r'))|| (($asai_join_rem_word == 'tEmA' || $asai_join_rem_word == 'puLimA' || $asai_join_rem_word == 'mA') && ($seer_join_rem_word== 'nirY')))
																								 {
																									
																									foreach($fin_ati1 as $fin_ati_w)
																										{
																											
																											if($fin_ati_w == $part_2[$j])
																											$fin_first_ati[] = $join_rem_word;
																											else if($fin_ati_w == $part_2[$i])
																											unset($fin_ati_w);
																											else
																											$fin_first_ati[] = $fin_ati_w;
																																																						
																										}
																										//return Roman_to_Tamil($fin_first_ati);
																										if(count($fin_first_ati) == 4)
																										{
																										
																										 foreach($fin_first_ati as $fin_first_ati_w)
																											 {
																												
																												$fin_first_ati1 .= $fin_first_ati_w." ";
																												 
																											 }
																										 $kural .= Roman_to_Tamil($fin_first_ati1).PHP_EOL;
																									 	 $kural .= Roman_to_Tamil($last_ati);
																									 	 return $kural;	
																								 		}
																										else
																										{
																										//Getting One More Word
																											$r_fin_first_ati = array_reverse($fin_first_ati);
																											foreach($r_fin_first_ati as $fin_first_ati_w)
																											{
																												if($fin_first_ati_w == $join_rem_word)
																												break;
																												else
																												$l_part1[] .= $fin_first_ati_w;
																												
																											}
																											foreach($fin_first_ati as $fin_first_ati_w)
																											{
																												if($fin_first_ati_w == $join_rem_word)
																												break;
																												else
																												$l_part2[] .= $fin_first_ati_w;
																												
																											}
																											if(count($l_part1) == 2)
																											{
																												
																												 $j_l_part2 = $l_part2[0]." ".$l_part2[1];
																												 	
																												 $j_l_part2 = $this->exactjoin($j_l_part2);
																												 $fin_first_ati[0] = $j_l_part2;
																												 unset($fin_first_ati[1]); 
 																												 foreach($fin_first_ati as $fin_first_ati_w)
																												{
																													
																												 $fin_fir_ati .= $fin_first_ati_w." ";
																														
																												} 
																												$kural = Roman_to_Tamil($fin_fir_ati).PHP_EOL.Roman_to_Tamil($last_ati);
																												return $kural;
																												
																											}
																											
																											
																										}
																										
																								 }
																								 
																								 else
																								 {
																								continue;	
																								 }
																								 
																								 		
																								
																								
																							}
																						else
																							{
																								
																								continue;
																									
																							}	
																								
																						
																						
																					}
																					
																				}
																			
																			
																			
																		}	
																	
																	
																	
																
																}  	
																
																
																
															
															}
															else
															{
															  
															  continue;	
																
															}
															
															
														 
														 
														 
														   
														}
														
														
														
													
												 }
												
											 
										 }
										 
										 
											
									    
										
									}
									
									}
									
									
									/* <------- Not Matching  Last Ati First Word With First Ati Last Word -------> */
		
							else 
								{
									//return $f_ati1;
								   $no_prev = count($f_ati1)-2;
								   // return $f_ati1;
								   $pre_word_ati1 = $f_ati1[$no_prev];
								   //return $pre_word_ati1;
								   $last_word_ati1 = end($f_ati1);
								   //return $last_word_ati1;
								   $single_word = $pre_word_ati1." ".$last_word_ati1;
								   //return $single_word;
								   $join_fist_ati = $this->exactjoin($single_word);
								   //return Roman_to_Tamil($join_fist_ati);
								   foreach($f_ati1 as $sam_f_atis)
									   {
										   
										   if($last_word_ati1 == $sam_f_atis)
														{
													
															$f_ati_1 .= $join_fist_ati;
													
														}
										 	else if($pre_word_ati1 != $sam_f_atis)
											   {
												    
												   $f_ati_1 .= $sam_f_atis." ";
												   
												}
												
											   
										   
									   }
									   
								  //return Roman_to_Tamil($f_ati_1); 
								  $t_f_ati_1 = explode(" ",$f_ati_1);
								  //return  $t_f_ati_1;
								  if(count($t_f_ati_1) == 4)
									  {
										 foreach($t_f_ati_1 as $t_f_ati_w) 
										 {
										  
										  	$f_ati_2 .= $t_f_ati_w." ";
										  
										  }
											$kural .=  Roman_to_Tamil($f_ati_2).PHP_EOL;
											$kural .=  Roman_to_Tamil($last_ati);
										
										 return $kural;

									  }
									  
									
									  /*------- Get the Third words  --------- */
									  else 
										  {
											  //return Roman_to_Tamil($t_f_ati_1);
											$T_t_f_ati_1 = count($t_f_ati_1)-1; 
											 
											for($i=$T_t_f_ati_1;$i>=0;$i--)
											
												{
													
													$j=$i-1;
													if($j >=0)
													{
														$cons_word = $t_f_ati_1[$i];
														$prev_word = $t_f_ati_1[$j];
														$k[] =  Roman_to_Tamil($prev_word." ".$cons_word);
														//return $prev_word; 
														$syll_cons_word= $this->GetTextSyllablePattern($cons_word);
														$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_cons_word), RecursiveIteratorIterator::LEAVES_ONLY );
														 foreach ( $rit as $key => $value ) 
															{
						
															$cons_word_key[] = $key;  	
						
															}
															
															$seer_cons_word = $cons_word_key[0];
															//return $seer_cons_word;
															unset($cons_word_key);
															unset($syll_cons_word);
															$syll_prev_word= $this->GetTextSyllablePattern($prev_word);
															$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_prev_word), RecursiveIteratorIterator::LEAVES_ONLY );
															foreach ( $rit as $key => $value ) 
																{
						
															$prev_word_value[] = $value;  	
						
																}
																
															$T_prev_word_value = count($prev_word_value)-2;
															$asai_prev_word     = $prev_word_value[$T_prev_word_value];
															//return $asai_prev_word;
															unset($syll_prev_word);	
															unset($prev_word_value);
															if((($asai_prev_word == 'kUviLa_m' ||$asai_prev_word == 'karuviLa_m' || $asai_prev_word == 'tEmA_GkA_y' || $asai_prev_word == 'puLimA_GkA_y' || $asai_prev_word == 'kUviLa_GkA_y' || $asai_prev_word == 'karuviLa_GkA_y' || $asai_prev_word == 'viLa_m') && ($seer_cons_word == 'nE_r'))|| (($asai_prev_word == 'tEmA' || $asai_prev_word == 'puLimA' || $asai_prev_word == 'mA') && ($seer_cons_word== 'nirY')))
											  				{
												
																$j_w = $prev_word." ".$cons_word;
																$key_cons_word = array_keys($t_f_ati_1,$cons_word);
																$key_fn_nxt = end($key_cons_word);
												 				$f_j_w  = $this->exactjoin($j_w);
																//return Roman_to_Tamil($f_j_w);
																 if($f_j_w != $j_w)
																 {
																	$chk_word = $t_f_ati_1[$key_fn_nxt+1];
																	if($chk_word == "")
																	{
																		$chk_word = $l_ati[0];
																		
																	}
																	$chk_word_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($chk_word));
																	$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($chk_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
																	//return $chk_word; 
																	foreach ( $rit as $key => $value ) 
																	{
						
																		$chk_word_key[] = $key;  	
						
																	}
												  				 $seer_chk_word = $chk_word_key[0];
												  				 //return  $seer_chk_word;
																 unset($chk_word_syllable);
																 unset($chk_word_key);	
												  				 $f_j_w_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($f_j_w));
												   				 //return $f_j_w_syllable;
												   				 $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($f_j_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
						
												 				 foreach ( $rit as $key => $value) 
																	{
						
																		$f_j_w_value[] = $value;  	
						
																	}
												  				 $T_f_j_w_value = count($f_j_w_value)-2;
												  				 $asai_f_j_w = $f_j_w_value[$T_f_j_w_value];
																 unset($f_j_w_syllable);
																 unset($f_j_w_value);
												  				 //return  $asai_f_j_w;	
												  				 if((($asai_f_j_w == 'kUviLa_m' ||$asai_f_j_w == 'karuviLa_m' || $asai_f_j_w == 'tEmA_GkA_y' || $asai_f_j_w == 'puLimA_GkA_y' || $asai_f_j_w == 'kUviLa_GkA_y' || $asai_f_j_w == 'karuviLa_GkA_y' || $asai_f_j_w == 'viLa_m') && ($seer_chk_word == 'nE_r'))|| (($asai_f_j_w == 'tEmA' || $asai_f_j_w == 'puLimA' || $asai_f_j_w == 'mA') && ($seer_chk_word== 'nirY')))
													 				  {
														 
																		 foreach($t_f_ati_1 as $t_fi_ati_1)
																			{
															 
																				 if($t_fi_ati_1 == $prev_word )
																					 {
																	 
																						$fin_ati1[] = $f_j_w;
																	 
																					 }
															 					else if($t_fi_ati_1 == $cons_word)
																					 {
																	 
																							unset($t_fi_ati_1); 
																	 
																					 }
																				 else
																					 {
																	 
																	 					$fin_ati1[] = $t_fi_ati_1;
																	 
																					 }	 	 
																 	
															 
																				}
																				if(count($fin_ati1) == 4)
																				{
																
																					foreach($fin_ati1 as $fin_ati_w)
																						{
																	
																	 						  $f_ati_2 .= $fin_ati_w." ";
																	
																						}
																					$kural = Roman_to_Tamil($f_ati_2).PHP_EOL.Roman_to_Tamil($last_ati);
																					return $kural;	
																
																			 	}
																				
																	 
																 }
												
															 }
											 	 				continue;
												 
											 				 }
															 else
															 {
											    				
																 $j_w = $prev_word." ".$cons_word;
												 				 
												 				 $key_cons_word = array_keys($t_f_ati_1,$cons_word);
												 
																 $key_fn_nxt = end($key_cons_word);
												 
												 				 $f_j_w  = $this->exactjoin($j_w);
																 
																 //return Roman_to_Tamil($f_j_w);
																 if($f_j_w != $j_w)
												  					{
												    
												  				 $chk_word = $t_f_ati_1[$key_fn_nxt+1];
												  				 
												  				 $chk_word_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($chk_word));
																 
												   				 $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($chk_word_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
												   				 foreach ( $rit as $key => $value ) 
																	{
						
																		$chk_word_key[] = $key;  	
						
																	}
												  				 $seer_chk_word = $chk_word_key[0];
																 unset($chk_word_syllable);
																 unset($chk_word_key);
												  				 //return  $seer_chk_word;	
												  				 $f_j_w_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($f_j_w));
												   				 //return $f_j_w_syllable;
												   				 $rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($f_j_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
						
												 				 foreach ( $rit as $key => $value) 
																	{
						
																		$f_j_w_value[] = $value;  	
						
																	}
												  				 $T_f_j_w_value = count($f_j_w_value)-2;
												  				 $asai_f_j_w = $f_j_w_value[$T_f_j_w_value];
																 unset($f_j_w_syllable);
																 unset($f_j_w_value);
												  				 //return  $asai_f_j_w;	
												  				 if((($asai_f_j_w == 'kUviLa_m' ||$asai_f_j_w == 'karuviLa_m' || $asai_f_j_w == 'tEmA_GkA_y' || $asai_f_j_w == 'puLimA_GkA_y' || $asai_f_j_w == 'kUviLa_GkA_y' || $asai_f_j_w == 'karuviLa_GkA_y' || $asai_f_j_w == 'viLa_m') && ($seer_chk_word == 'nE_r'))|| (($asai_f_j_w == 'tEmA' || $asai_f_j_w == 'puLimA' || $asai_f_j_w == 'mA') && ($seer_chk_word== 'nirY')))
													 				  {
														 
																		 foreach($t_f_ati_1 as $t_fi_ati_1)
																			{
															 
																				 if($t_fi_ati_1 == $prev_word )
																					 {
																	 
																						$fin_ati1[] = $f_j_w;
																	 
																					 }
															 					else if($t_fi_ati_1 == $cons_word)
																					 {
																	 
																							unset($t_fi_ati_1); 
																	 
																					 }
																				 else
																					 {
																	 
																	 					$fin_ati1[] = $t_fi_ati_1;
																	 
																					 }	 	 
																 
															 
																				}
																		//	return Roman_to_Tamil($fin_ati1);
																			if(count($fin_ati1) == 4)
																				{
																
																					foreach($fin_ati1 as $fin_ati_w)
																						{
																	
																	 						  $f_ati_2 .= $fin_ati_w." ";
																	
																						}
																					$kural = Roman_to_Tamil($f_ati_2).PHP_EOL.Roman_to_Tamil($last_ati);
																					return $kural;	
																
																			 	}
																			else
																				{
																	
																					
																	
																	
																	
																	
																			
																				}  	
																
																
																
															
																				}
																			else
																			{
															  					 //return "hai";
															 					 continue;	
																
																			}
															
																			//return $fin_ati1;
														 				
														 
														 
																	   
																	}
																	else
																	{
																		
																	 continue;	
																		
																	}
														
														
													
												 
																 
																 
																 
															  }
															  
															 
															 
															
																
														
													}
													
													
													
													
												}
												
											  
											  
											  
										  } 
												  
												  
										 	  
											  
										  
										  
										 // return $rem_comb;
										   
								   
								}
					
					
					
					 
			
		 	
		
		
		//return $k;
		return "End";
				
		
			
			
			
		
		
		}
		
public function venpaa()

	{
		
		$Lines = explode (PHP_EOL, trim( $this->InputSourceText ));
		$last_word_asai = array("tEmA",
				"puLimA",
				"viLa_m",
				"mA"
				);
		$AllowedWordClass = array (
				"tEmA",
				"puLimA",
				"kUviLa_m",
				"karuviLa_m",
				"tEmA_GkA_y",
				"puLimA_GkA_y",
				"kUviLa_GkA_y",
				"karuviLa_GkA_y" 
		); 		
		$remvechar = array(",","","-","!","'",".",";");
		foreach($Lines as $line)	
		{
			$lines[] = str_replace($remvechar,"",$line);
		}
		
		$last_line = end($lines);
		//return Roman_to_Tamil($last_line);
		$last_ln_words = explode(" ",$last_line);
		if(count($last_ln_words) == 2)
			{
				
				$cons_word = end($last_ln_words);
				$syll_cons_word = $this->GetTextSyllablePattern($cons_word);
				$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_cons_word), RecursiveIteratorIterator::LEAVES_ONLY );
				foreach ( $rit as $key => $value) 
					{
						
						$cons_word_value[] = $value;  
							
					}	
				$T_cons_word_value = count($cons_word_value)-3;
				//return $cons_word_value;
				$last_ln_words[1] = str_replace($cons_word_value[$T_cons_word_value],"",$cons_word);
				$last_ln_words[2] = $cons_word_value[$T_cons_word_value];
				$last_ati = $last_ln_words[0]." ".$last_ln_words[1]." ".$last_ln_words[2];
				unset($syll_cons_word);
				unset($cons_word_value);
				//return Roman_to_Tamil($last_ati);
				
			}
		else if(count($last_ln_words) == 3)
		{
			
			$cons_word = end($last_ln_words);
			$syll_cons_word = $this->GetTextSyllablePattern($cons_word);
			$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_cons_word), RecursiveIteratorIterator::LEAVES_ONLY );
			foreach ( $rit as $key => $value) 
				{
						
					$cons_word_value[] = $value;  	
						
				}
			$T_cons_word_value = count($cons_word_value)-2;
			$asai_cons_word = $cons_word_value[$T_cons_word_value];
			unset($syll_cons_word);
			unset($cons_word_value);
			if(!in_array($asai_cons_word,$last_word_asai))
			{
				
				
				$T_cons_word_value = count($cons_word_value)-3;
				$ori_last_word     = $cons_word_value[$T_cons_word_value];
				//return $ori_last_word;
				$rem_letters       = str_replace($ori_last_word,"",$cons_word); 
				$prev_word  		 = $last_ln_words[1];
				$first_word 		= $last_ln_words[0];
				$chk               = $prev_word." ".$rem_letters; 
				$chk1 = $this->exactjoin($chk);
				if($chk1 != $chk)
				{
				 
				 	$last_ln_words[1] = $chk1;
					$last_ln_words[2] = $ori_last_word;
					foreach($last_ln_words as $last_ln_word)
						{
							
							$last_ati .= $last_ln_word." ";
							
							
						}
						//return Roman_to_Tamil($last_ati);
						
				}
				else
				{
					if(substr($first_word,-1) == 'u')
					{
						
						$last_ln_words[0] = $first_word.substr($prev_word,2);
						$last_ln_words[1] = $rem_letters;
						$last_ln_words[2] = $ori_last_word;
						foreach($last_ln_words as $last_ln_word)
						{
							
							$last_ati .= $last_ln_word." ";
							
							
						}
						//return Roman_to_Tamil($last_ati);

						
					}
					$last_ln_words[0] = $this->exactjoin($first_word.$prev_word);
					$last_ln_words[1] = $rem_letters;
					$last_ln_words[2] = $ori_last_word;
					//$k[] = $last_ln_words[0];
					//	return  $k;
					foreach($last_ln_words as $last_ln_word)
						{
							
							$last_ati .= $last_ln_word." ";
							
							
						}
						//return Roman_to_Tamil($last_ati);
					
				}
				
				
			}
			else
				{
					
					$syll_last_ln_words_2  = $this->GetTextSyllablePattern(Tamil_to_Roman($last_ln_words[0]));
					//return $last_ln_words[1];
					$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_last_ln_words_2), RecursiveIteratorIterator::LEAVES_ONLY );
					foreach ( $rit as $key => $value) 
						{
						
							$last_ln_words2_key[] = $key;  	
						
						} 
					$seer_last_ln_words2 = $last_ln_words2_key[0];
					//return $seer_last_ln_words2;
					unset($syll_last_ln_words_2);
					unset($last_ln_words2_key);	
					$syll_last_ln_words_1  = $this->GetTextSyllablePattern(Tamil_to_Roman($last_ln_words[1]));
					$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_last_ln_words_1), RecursiveIteratorIterator::LEAVES_ONLY );
					foreach ( $rit as $key => $value) 
						{
						
							$last_ln_words1_value[] = $value;  	
						
						} 
					$T_last_ln_words1_value = count($last_ln_words1_value)-2;	
					$asai_last_ln_words1 = $last_ln_words1_value[$T_last_ln_words1_value];	
					unset($syll_last_ln_words_1);
					unset($last_ln_words1_key);
					//return $asai_last_ln_words1;
					if((($asai_last_ln_words1 == 'kUviLa_m' ||$asai_last_ln_words1 == 'karuviLa_m' || $asai_last_ln_words1 == 'tEmA_GkA_y' || $asai_last_ln_words1 == 'puLimA_GkA_y' || $asai_last_ln_words1 == 'kUviLa_GkA_y' || $asai_last_ln_words1 == 'karuviLa_GkA_y' || $asai_last_ln_words1 == 'viLa_m') && ($seer_last_ln_words2 == 'nE_r'))|| (($asai_last_ln_words1 == 'tEmA' || $asai_last_ln_words1 == 'puLimA' || $asai_last_ln_words1 == 'mA') && ($seer_last_ln_words2== 'nirY')))
						{
							
							//return Roman_to_Tamil($last_line);
							
							
						}
						else
						{
							
						if(substr($last_ln_words[1],-1) == "u")
							{
								
								$letter = substr($last_ln_words[1],-2);
								//return Roman_to_Tamil($letter);
								$last_ln_words[2] = $letter.substr($last_ln_words[2],2);
								$last_ln_words[1] = substr($last_ln_words[1],0,-2);
								$last_ati = $last_ln_words[0]." ".$last_ln_words[1]." ".$last_ln_words[2];
								//return Roman_to_Tamil($last_ati);
								
							}
						else
							{
								$syll_last_ln_words_1 = $this->GetTextSyllablePattern(Tamil_to_Roman($last_ln_words[0]));
								$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_last_ln_words_1), RecursiveIteratorIterator::LEAVES_ONLY );
								foreach ( $rit as $key => $value) 
									{
						
										$last_ln_words1_value[] = $value;  	
						
									} 	
								$T_last_ln_words1_value = count($last_ln_words1_value)-3;	
								$sm_words = $last_ln_words1_value[$T_last_ln_words1_value];
								$sm_words = str_replace("Q","Y",$sm_words);	
								//return $sm_words;
								$last_ln_words[0] = str_replace($sm_words,"",$last_ln_words[0]);	
								$last_ln_words[1] = $sm_words.$last_ln_words[1];
								foreach($last_ln_words as $last_ln_word)
									{
								
										$last_ati .= $last_ln_word." ";
								
									}	
								//return Roman_to_Tamil($last_ati);	
							
							}
							
							
						}
						
					
				}
			
			
			
			
		}
		else if(count($last_ln_words) > 3)
			{
				
				$cons_word = end($last_ln_words);				
				$syll_cons_word = $this->GetTextSyllablePattern($cons_word);
				$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_cons_word), RecursiveIteratorIterator::LEAVES_ONLY );
				foreach ( $rit as $key => $value) 
					{
						
						$cons_word_value[] = $value;  	
						
					} 	
				  foreach ( $rit as $key => $value) 
					{
						
						$cons_word_key[] = $key;  	
						
					} 	 	
				 $T_cons_word = count($cons_word_value)-2;				 
				 $asai_cons_word = $cons_word_value[$T_cons_word];
				 unset($cons_word_key);
				 unset($syll_cons_word);
				 unset($cons_word_value);
				// return $asai_cons_word;
				 if(in_array($asai_cons_word,$last_word_asai))
					 {
						 
						foreach($last_ln_words as $last_ln_word)
						{
							if($last_ln_word != $cons_word)
							{
								$rem_words[] = $last_ln_word;
							}
													
						}
						//return $rem_words;
						if(count($rem_words) == 3)
						{
							
							$f_word = $rem_words[0];
							$s_word = $rem_words[1];
							$t_word = $rem_words[2];
							$join_word = $s_word." ".$t_word;
							$join_word_1 = $this->exactjoin($join_word);
							//return Roman_to_Tamil($join_word_1); 
							if($join_word_1 != $join_word)
							{
								
								$syll_join_word = $this->GetTextSyllablePattern(Tamil_to_Roman($join_word_1));
								$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_join_word), RecursiveIteratorIterator::LEAVES_ONLY );
								foreach ( $rit as $key => $value) 
									{
						
										$join_word_value[] = $value;  	
						
									} 
								$T_join_word_value =  count($join_word_value)-2;
								$asai_join_word    = $join_word_value[$T_join_word_value];
								unset($syll_join_word);
								unset($join_word_value);
								//return $cons_word; 
								//return $asai_join_word;
								$syll_cons_word = $this->GetTextSyllablePattern(Tamil_to_Roman($cons_word));
								$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_cons_word), RecursiveIteratorIterator::LEAVES_ONLY );
								foreach ( $rit as $key => $value) 
									{
						
										$syll_cons_word_key[] = $key;  	
						
									} 	
										
								$seer_cons_word = $syll_cons_word_key[0];
								if((($asai_join_word == 'kUviLa_m' ||$asai_join_word == 'karuviLa_m' || $asai_join_word == 'tEmA_GkA_y' || $asai_join_word == 'puLimA_GkA_y' || $asai_join_word == 'kUviLa_GkA_y' || $asai_join_word == 'karuviLa_GkA_y' || $asai_join_word == 'viLa_m') && ($seer_cons_word == 'nE_r'))|| (($asai_join_word == 'tEmA' || $asai_join_word == 'puLimA' || $asai_join_word == 'mA') && ($seer_cons_word== 'nirY')))
								{
									
									$last_ln_words[1] = $join_word_1;
									unset($last_ln_words[2]);
									foreach($last_ln_words as $last_ln_word)
										{
									
											$last_ati .= $last_ln_word." ";
									
										}
									//return Roman_to_Tamil($last_ati);
									
									
									
								}
								else
								{
								
									$join_word = $f_word." ".$s_word;
									$join_word_1 = $this->exactjoin($join_word);
							    	$last_ln_words[0] = $join_word_1;
									unset($last_ln_words[1]);
									foreach($last_ln_words as $last_ln_word)
										{
									
											$last_ati .= $last_ln_word." ";
									
										}
									//return Roman_to_Tamil($last_ati);
								
								
									
									
								}
								
								
							}
							else
							{
								
								$join_word = $f_word." ".$s_word;
								$join_word_1 = $this->exactjoin($join_word);
							    $last_ln_words[0] = $join_word_1;
								unset($last_ln_words[1]);
								foreach($last_ln_words as $last_ln_word)
								{
									
									$last_ati .= $last_ln_word." ";
									
								}
								//return Roman_to_Tamil($last_ati);
								
								
							}
							
							
							
						}
						else if(count($rem_words) >= 4)
						{
						
							return "last ati contains morethan 5 words";
						
							
						}
						
						 
						 
						 
					 }
				else
				{
					
					
					
					
					
				}	 
				 //return  $asai_cons_word; 
				
				
				
				
			}/*-----------------End Of Last aTi---------------------------*/
			
		/*---------------------forming third aTi----------------*/ 
		//return Roman_to_Tamil($lines[2]);
		$Third_ati = explode(" ",$lines[2]);
		//return $Third_ati;
		if(count($Third_ati) > 4)
			{
				
				$T_Third_ati = count($Third_ati)-1;
				$A_last_ati  = explode(" ",$last_ati);
				$T_last_word =  end($Third_ati);
				$syll_T_last_word = $this->GetTextSyllablePattern($T_last_word);
				//return $A_last_ati[0];
				//return $syll_T_last_word;
				$rit = new RecursiveIteratorIterator (new RecursiveArrayIterator ($syll_T_last_word), RecursiveIteratorIterator::LEAVES_ONLY );
				foreach ( $rit as $key => $value) 
					{
						
						$T_last_word_values[] = $value;  	
						
					} 
				$T_T_last_word  = count($T_last_word_values)-2;
				$asai_last_word = $S_last_word_values[$T_T_last_word];
				unset($syll_T_last_word);
				unset($T_last_word_values);
				/*----------------Third ati first word Detail----------------------------*/
				$syll_L_first_word = $this->GetTextSyllablePattern($A_last_ati[0]);
				//return $syll_L_first_word;
				$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_L_first_word), RecursiveIteratorIterator::LEAVES_ONLY );
				foreach ( $rit as $key => $value) 
					{
						
						$L_first_word_key[] = $key;  	
						
					} 
				$seer_L_first_word = $L_first_word_key[0];
				//return $seer_L_first_word;
				unset($syll_L_first_word);
				unset($L_first_word_key);
				if((($asai_last_word == 'kUviLa_m' ||$asai_last_word == 'karuviLa_m' || $asai_last_word == 'tEmA_GkA_y' || $asai_last_word == 'puLimA_GkA_y' || $asai_last_word == 'kUviLa_GkA_y' || $asai_last_word == 'karuviLa_GkA_y' || $asai_last_word == 'viLa_m') && ($seer_L_first_word == 'nE_r'))|| (($asai_last_word == 'tEmA' || $asai_last_word == 'puLimA' || $asai_last_word == 'mA') && ($seer_L_first_word== 'nirY')))
					{
						
						
						
						
						
						
						
					}
				else
					{
						$syll_T_last_word = $this->GetTextSyllablePattern($T_last_word);
						//return $syll_T_last_word;
						$rit = new RecursiveIteratorIterator (new RecursiveArrayIterator ($syll_T_last_word), RecursiveIteratorIterator::LEAVES_ONLY );
						foreach ( $rit as $key => $value) 
						{
						
							$T_last_word_values[] = $value;  	
						
						} 
						$T_last_word = count($T_last_word_values)-2;
						$asai_last_word = $T_last_word_values[$T_last_word];
						if(!in_array($asai_last_word,$AllowedWordClass))
						{
						$split_word = $T_last_word_values[0];
						//return $split_word;
						$T_Third_ati = count($Third_ati)-2;
						$T1_Third_ati = count($Third_ati)-1;
						$Third_ati[$T1_Third_ati] = str_replace($split_word,"",$Third_ati[$T1_Third_ati]);
						$Third_ati[$T_Third_ati] = $Third_ati[$T_Third_ati].$split_word;
						if(count($Third_ati) == 4)
						{
							
							foreach($Third_ati as $Third_ati_w)
							{
								
								
								$fin_third_ati = $Third_ati_w." ";
								
							}	
							return $fin_third_ati; 
							
						}
						
						else
							{
							
								$T_third_ati = count($Third_ati)-1;	
							    for($i=$T_third_ati;$i>=0;$i--)
								{
									
									$j = $i-1;
									if($j>0)
									{
										
										$next_word = $Third_ati[$i];
										$prev_word = $Third_ati[$j];
										
										$syll_next_word = $this->GetTextSyllablePattern($next_word);
										$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_next_word), RecursiveIteratorIterator::LEAVES_ONLY );
										foreach ( $rit as $key => $value) 
											{
						
												$next_word_key[] = $key;  	
						
											} 
										$seer_next_word = $next_word_key[0];
										unset($syll_next_word);
										unset($next_word_key);										
										$syll_prev_word = $this->GetTextSyllablePattern($prev_word);
										$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_prev_word), RecursiveIteratorIterator::LEAVES_ONLY );
										foreach ( $rit as $key => $value) 
											{
						
												$prev_word_values[] = $value;  	
						
											}
										$T_prev_word = count($prev_word_values)-2;	 
										$asai_next_word = $prev_word_values[$T_prev_word];
										if((($asai_next_word == 'kUviLa_m' ||$asai_next_word == 'karuviLa_m' || $asai_next_word == 'tEmA_GkA_y' || $asai_next_word == 'puLimA_GkA_y' || $asai_next_word == 'kUviLa_GkA_y' || $asai_next_word == 'karuviLa_GkA_y' || $asai_next_word == 'viLa_m') && ($seer_next_word == 'nE_r'))|| (($asai_next_word == 'tEmA' || $asai_next_word == 'puLimA' || $asai_next_word == 'mA') && ($seer_next_word== 'nirY')))
											{
												
												continue;
												
												
											}
										else
											{
												
												
												$join_word  = $prev_word." ".$next_word;
												$join_word1 = $this->exactjoin($join_word);
												//return Roman_to_Tamil($join_word1);
												if($join_word != $join_word1)
													{
													
														$key = array_keys($Third_ati,$prev_word);
														//return $key;
														$key_pre_word = end($key);
														//return $key_pre_word;
														$Third_ati[$key_pre_word] = $join_word1;
														unset($Third_ati[$key_pre_word+1]);
														//return Roman_to_Tamil($Third_ati);
														if(count($Third_ati) == 4)
															{
																
																foreach($Third_ati as $Third_ati_w)
																{
																	
																	$fin_third_ati .= $Third_ati_w." ";
																	
																}
																return Roman_to_Tamil($fin_third_ati);
																
															}
														
														
													}
												else
													{
														
														continue;
														
													} 
												
												
												
											}		
											
										
									}
									
								
								}
							//return Roman_to_Tamil($Third_ati);
							
							
							
							}
							
						}
						else
						{
							
								$T_third_ati = count($Third_ati)-1;
								for($i=$T_third_ati;$i>=0;$i--)
								{
									$j = $i-1;
									if($j >=0)
									{
									$next_word = $Third_ati[$i];
									$prev_word = $Third_ati[$j];
									//return $next_word;
									$syll_next_word = $this->GetTextSyllablePattern($next_word);
									$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_next_word), RecursiveIteratorIterator::LEAVES_ONLY );
										foreach ( $rit as $key => $value) 
											{
						
												$next_word_key[] = $key;  	
						
											}
									$seer_next_word = $next_word_key[0];
									//return $seer_next_word;
									unset($syll_next_word);
									unset($next_word_key);
									$syll_prev_word = $this->GetTextSyllablePattern($prev_word);
									//return $syll_prev_word;
									$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_prev_word), RecursiveIteratorIterator::LEAVES_ONLY );
										foreach ( $rit as $key => $value) 
											{
						
												$prev_word_values[] = $value;  	
						
											}
									//return $prev_word_values;				
									$T_prev_word_values = count($prev_word_values)-2;
									$asai_prev_word = $prev_word_values[$T_prev_word_values];	
									//return $asai_prev_word;
									if((($asai_prev_word == 'kUviLa_m' ||$asai_prev_word == 'karuviLa_m' || $asai_prev_word == 'tEmA_GkA_y' || $asai_prev_word == 'puLimA_GkA_y' || $asai_prev_word == 'kUviLa_GkA_y' || $asai_prev_word == 'karuviLa_GkA_y' || $asai_prev_word == 'viLa_m') && ($seer_next_word == 'nE_r'))|| (($asai_prev_word == 'tEmA' || $asai_prev_word == 'puLimA' || $asai_prev_word == 'mA') && ($seer_next_word== 'nirY')))
											{
												
												
												$join_word  = $prev_word." ".$next_word;
												$join_word1 = $this->exactjoin($join_word);
												if($join_word1 != $join_word)
												{
													
												$keys = array_keys($Third_ati,$prev_word);
												$key = end($keys);
												$Third_ati[$key] = $join_word1;
												unset($Third_ati[$key+1]);
												//return Roman_to_Tamil($Third_ati);
												if(count($Third_ati) == 4)
												{
													
													return Roman_to_Tamil($Third_ati);
													
													
												}
												else
												{
													//return Roman_to_Tamil($Third_ati);
													continue;
													
												}
												
												
													
													
												}
												
												
												else
												{
												//return Roman_to_Tamil($Third_ati);
												continue;
												}
												
												
											}	
									
									else
										{
											$join_word  = $prev_word." ".$next_word;
											$join_word1 = $this->exactjoin($join_word);
											//return Roman_to_Tamil($join_word1);
											if($join_word1 != $join_word)
												{
													
												$keys = array_keys($Third_ati,$prev_word);
												$key = end($keys);
												$Third_ati[$key] = $join_word1;
												unset($Third_ati[$key+1]);
												//return Roman_to_Tamil($Third_ati);
												if(count($Third_ati) == 4)
												{
													
													return Roman_to_Tamil($Third_ati);
													
													
												}
												else
												{
													//return Roman_to_Tamil($Third_ati);
													foreach($Third_ati as $Third_ati_w)
													{
														if($Third_ati_w == $join_word1)
														break;
														else
														$part_1[] = $Third_ati_w;	
													}
													//return Roman_to_Tamil($part_1);
													$re_Third_ati = array_reverse($Third_ati);
													//return $re_Third_ati;
													foreach($re_Third_ati as $r_Third_ati_w)
													{
														if($r_Third_ati_w == $join_word1)
														break;
														else
														$part_2[] = $r_Third_ati_w;	
													}
													 //return count($part_2); 
													if(count($part_2) == 1)
													{
														
														if(count($part_1) == 3)
														{
														
														//return $part_1;	
														$syll_part_1 = $this->GetTextSyllablePattern($part_1[1]);
														
														$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syll_part_1), RecursiveIteratorIterator::LEAVES_ONLY );
														foreach ( $rit as $key => $value) 
															{
						
																$part_1_values[] = $value;  	
						
															}
														$T_part_1_values = count($part_1_values)-3;
														$part_1[1] = str_replace($part_1_values[$T_part_1_values],"",$part_1[1]);
														$part_1[0] = $this->exactjoin($part_1[0]." ".$part_1[1]);
														$part_1[2] = $part_1_values[$T_part_1_values].$part_1[2];
														unset($part_1[1]);
														
														$Third_ati[0] = $part_1[0];
														$Third_ati[1] = $part_1[2];
														unset($Third_ati[2]);
														return Roman_to_Tamil($Third_ati);
														//return Roman_to_Tamil($part_1);
														//return Roman_to_Tamil($part_1[0]);
														
															
														}
														
													}
													
													
													//return Roman_to_Tamil($part_2);
													continue;
													
												}
												
												
													
													
												}
											else
											{
												
												$joinword = str_replace(" ","",$join_word1);
												return Roman_to_Tamil($joinword); 
												
												
												continue;
												
												
											}	
											
												
										
										
										
										
										}		
												
											
											
									
									}
									
									
									
									
								}
						
						
						
							
							
							
							
							
						}
						
						
						
						
						
					}
						
			
			
			
			}
			
		
		
	}		
public function exactjoin($words)
	{
		//return "hai"; 
		//return $words; 
		$words_in_line = explode(" ",$words);
		//return $words_in_line;
		foreach($words_in_line as $words1)
		{
			if($words!="")
		$word[] = Tamil_to_Roman($words1); 
			else
			continue;	
		}
			//return $word[0];
			//return $word[1];
			//$word_length = strlen($find_last_char);	
			$lastchar = substr($word[0],-1);
			$no = strpos(substr($word[0],-2),"_");
			//return $lastchar;
			//$count -= strlen($word[1])-1;
			//return $count;
			$first_char_secword = substr($word[1],0,2);
			//return $word[1];
			//return $first_char_secword; 
			$letter_to_match1 = array("i","I","Y");
			$letter_to_match2 = array('_a', '_A','_i', '_I','_u','_U','_e','_E','_Y','_o','_O','_W');
			$match_array = array('' => '_a',
			 'A'  => '_A' ,
			 'i'  => '_i', 
			 'I' =>'_I',
			 'u'  => '_u',
			 'U' => '_U' ,
			 'e' => '_e',
			 'E'  => '_E',
			 'Y'  => '_Y' ,
			 'o' => '_o',
			 'O' => '_O' ,
			 'W' =>'_W'
			 );
			$AllowedWordClass = array (
				"tEmA",
				"puLimA",
				"kUviLa_m",
				"karuviLa_m",
				"tEmA_GkA_y",
				"puLimA_GkA_y",
				"kUviLa_GkA_y",
				"karuviLa_GkA_y" 
		); 
		//first word ends with meiyeluthu	 
			//return $lastchar; 
			
			if(in_array($lastchar,$letter_to_match1))
					{
						
						if(in_array($first_char_secword,$letter_to_match2))
								{
									
								$letter_to_join = array_search($first_char_secword,$match_array);	
								$joinletter = 'y'.$letter_to_join;
								//return $joinletter;
								$final_word = substr($word[0],0).$joinletter .substr($word[1],2);
								$syl_jn_word[] = $this->GetTextSyllablePattern($final_word);
								$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syl_jn_word), RecursiveIteratorIterator::LEAVES_ONLY );
								foreach ( $rit as $key => $value ) 
										{
							 
											if($key == 'meta')
												{
													$seer = $value;
													//check allowed seer
													if(in_array($seer,$AllowedWordClass))
														{
									
																return $final_word;
									
														}
													else
														{
																return $words;	
									
														}
								
								
								
																
												}
							
										}
										unset($syl_jn_word);
					
								}
								else
								{
									
									$j_word = str_replace(" ","",$words);
									$syl_j_word[] = $this->GetTextSyllablePattern($j_word);
									$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syl_j_word), RecursiveIteratorIterator::LEAVES_ONLY );
									foreach ( $rit as $key => $value ) 
										{
											
											$values_j_word[] = $value;
											
										}
									$t_j_word = count($values_j_word)-2;
									if(in_array($values_j_word[$t_j_word],$AllowedWordClass))
										{
											
											return $j_word;
											
											
										}
									else
										{
											
											return $words;
											
											
										}	
										
										unset($syl_j_word);
										unset($values_j_word);
									
									}
								
								
								
								
					
					}
			
					
					
			else if($lastchar == 'u' )
			{
				//return $lastchar;
				$lastchar = substr($word[0],-2,1);
				//return $lastchar;
				//$word = substr($word[0],0,-1).$word[];
				//return $word;
				//$lastchar = substr($lastchar1,-2,1);
				//return $lastchar;
				//return $first_char_secword;
				if(in_array($first_char_secword,$letter_to_match2))
					{
						foreach($letter_to_match2 as $exact_letter)
							{
						if($first_char_secword == $exact_letter)
								{
							$letter_to_join = array_search($exact_letter,$match_array);
							$f_joined_letter = $lastchar.$letter_to_join;
							//return $f_joined_letter;
							$final_word = substr($word[0],0,-2).$f_joined_letter.substr($word[1],2);
							$syl_jn_word[] = $this->GetTextSyllablePattern($final_word);
							$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syl_jn_word), RecursiveIteratorIterator::LEAVES_ONLY );
							foreach ( $rit as $key => $value ) 
								{
							 
										if($key == 'meta')
											{
												$seer = $value;
												//return $seer;
												if(in_array($seer,$AllowedWordClass))
													{
									
														return $final_word;
									
													}
												else
													{
														return $words;	
									
													}
								
								
								
																
											}
							
								}
								unset($syl_jn_word);
							//str_replace(substr($word[1],0),"",$word[1]);
							
								} 
							}
					
					}
					else
						{
							
							
									
									$j_word = str_replace(" ","",$words);
									//return $j_word;
									$syl_j_word[] = $this->GetTextSyllablePattern($j_word);
									//return $syl_j_word;
									$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator($syl_j_word), RecursiveIteratorIterator::LEAVES_ONLY );									foreach ( $rit as $key => $value ) 
										{
											
											$values_j_word[] = $value;
											
										}
									$t_j_word = count($values_j_word)-2;
									//return $values_j_word[$t_j_word];
									if(in_array($values_j_word[$t_j_word],$AllowedWordClass))
										{
											
											return $j_word;
											
											
										}
									else
										{
											
											return $words;
											
											
										}	
									unset($syl_j_word);
									unset($values_j_word);	
									
									
							
							
						}

			}
			
				else if(!in_array($lastchar,$letter_to_match1) && $lastchar != 'u' && $no === false)
					{
				
						if(in_array($first_char_secword,$letter_to_match2))
								{
									
								$letter_to_join = array_search($first_char_secword,$match_array);	
								$joinletter = 'v'.$letter_to_join;
								//return $joinletter;
								$final_word = substr($word[0],0).$joinletter .substr($word[1],2);
								$syl_jn_word[] = $this->GetTextSyllablePattern($final_word);
								$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syl_jn_word), RecursiveIteratorIterator::LEAVES_ONLY );
								foreach ( $rit as $key => $value ) 
									{
							 
										if($key == 'meta')
											{
												$seer = $value;
												//return $seer;
												if(in_array($seer,$AllowedWordClass))
													{
									
														return $final_word;
												
													}
												else
													{
														return $words;	
									
													}
								
								
								
																
											}
							
									}
									
								}
								
								else
									{
										
										
									
									$j_word = str_replace(" ","",$words);
									$syl_j_word[] = $this->GetTextSyllablePattern($j_word);
									$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syl_j_word), RecursiveIteratorIterator::LEAVES_ONLY );
									foreach ( $rit as $key => $value ) 
										{
											
											$values_j_word[] = $value;
											
										}
									$t_j_word = count($values_j_word)-2;
									if(in_array($values_j_word[$t_j_word],$AllowedWordClass))
										{
											
											return $j_word;
											
											
										}
									else
										{
											
											return $words;
											
											
										}	
										
									
										
										
									}
								
								
				
					
					}
			
					else{
						//return $lastchar; 
							foreach($letter_to_match2 as $exact_letter)
							{
							if($first_char_secword == $exact_letter)
								{
							$letter_to_join = array_search($exact_letter,$match_array);
							$f_joined_letter = $lastchar.$letter_to_join;
							//return $f_joined_letter;
							$final_word = substr($word[0],0,-2).$f_joined_letter.substr($word[1],2);
							$syl_jn_word[] = $this->GetTextSyllablePattern($final_word);
							$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($syl_jn_word), RecursiveIteratorIterator::LEAVES_ONLY );
							foreach ( $rit as $key => $value ) 
								{
							 
										if($key == 'meta')
											{
												$seer = $value;
												//return $seer;
												if(in_array($seer,$AllowedWordClass))
													{
									
														return $final_word;
									
													}
												else
													{
														return $words;	
									
													}
								
								
								
																
											}
							
								}	
								}
								else
								{
									
									
									$j_word = str_replace(" ","",$words);
									//return $j_word;
									$syl_j_word[] = $this->GetTextSyllablePattern($j_word);
									//return $syl_j_word;
									$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator($syl_j_word), RecursiveIteratorIterator::LEAVES_ONLY );									foreach ( $rit as $key => $value ) 
										{
											
											$values_j_word[] = $value;
											
										}
									$t_j_word = count($values_j_word)-2;
									//return $values_j_word[$t_j_word];
									if(in_array($values_j_word[$t_j_word],$AllowedWordClass))
										{
											
											return $j_word;
											
											
										}
									else
										{
											
											return $words;
											
											
										}	
										
									
									
							
							
						
									
									}
							}
				
				
				}
				
					/*elseif(in_array($first_char_secword,$letter_to_match2))
							{
								foreach($letter_to_match2 as $exact_letter)
									{
										if($first_char_secword == $exact_letter)
											{
												$letter_to_join = array_search($exact_letter,$match_array);
												$joinletter = 'v'.$letter_to_join;
							
											} 
									}
					
					}*/
	}		
	/**
	 * Return the Metre of the Prosody
	 *
	 * @param unknown_type $root        	
	 * @return Ambigous <NULL, string>
	 */
	public function GetMetreType($root) 

	{
		$Venpaa = $this->CheckVenpaa ();
		$Asiriyappaa = $this->CheckAsiyaripaa ();
		$Kalippaa = $this->CheckKalippaa ();
		$VenKalippaa = $this->CheckVenKalippaa ();
		$Vanjippaa = $this->CheckVanjippaa ();
		$VenInam = $this->CheckVenInam ();
		$AsiriyaInam = $this->CheckAsiriyaInam ();
		$VanjiInam = $this->CheckVanjiInam ();
		$KaliInam = $this->CheckKaliInam ();
		
		if ($Venpaa != NULL)
			$MetreType = $Venpaa;
		else if ($Asiriyappaa != NULL)
			$MetreType = $Asiriyappaa;
		else if ($Kalippaa != NULL)
			$MetreType = $Kalippaa;
		else if ($VenKalippaa != NULL)
			$MetreType = $VenKalippaa;
		else if ($Vanjippaa != NULL)
			$MetreType = $Vanjippaa;
		else if ($VenInam != NULL)
			$MetreType = $VenInam;
		else if ($AsiriyaInam != NULL)
			$MetreType = $AsiriyaInam;
		else if ($KaliInam != NULL)
			$MetreType = $KaliInam;
		else if ($VanjiInam != NULL)
			$MetreType = $VanjiInam;
		else
			$MetreType = NULL;
		
		return $MetreType;
	}
	
	/**
	 * Check if the Prosody Metre is Venpaa - If Venpaa return the exact type,
	 * else return NULL
	 *
	 * @return string NULL
	 */
	public function CheckVenpaa() {
		
		// check and remove the eetrasai class variable
		$root = $this->ParseTreeRoot;
		
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
		// vaanga boss this "maapla array" is here
		//print_r($root);
		$LineClassCheck = TRUE;
		$WordClassCheck = TRUE;
		
		$AllowedWordClass = array (
				"tEmA",
				"puLimA",
				"kUviLa_m",
				"karuviLa_m",
				"tEmA_GkA_y",
				"puLimA_GkA_y",
				"kUviLa_GkA_y",
				"karuviLa_GkA_y" 
		); // ,"mA","viLa_m");
		
		/* Word Count */
		
		$cirs = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
		
		$wordCount = - 1;
		
		foreach ( $cirs as $key => $value )
			if ($key == 'meta')
				$wordCount += 1;
			
			/* Check for Allowed Seers, Line Count */
		
		$wrongWordClasses = array ();
		
		$wordIndex == 0;
		
		foreach ( $rit as $Line => $Words ) {
			
			if ($rit->hasChildren () == FALSE) {
				
				if ($Line == 'meta') {
					$wordIndex += 1;
					
					/* Check for Allowed Seers */
					
					if ($wordIndex != $wordCount && ! in_array ( $Words, $AllowedWordClass )) {
						
						$WordClassCheck = FALSE;
						$wrongWordClasses [] = $Words;
					}
				}
			}
			
			# Check number of lines
			if($this->TotalLines < 2)
				$LineClassCheck = False;
			
			if ($rit->getDepth () == 2) {
				
				/* Check for Allowed Line Classes */
				//return "true";
				if ($Line != ("aTi-" . $this->TotalLines) && $Words ['smeta'] != 4)
					$LineClassCheck = FALSE;
				
				//return $Line."</br>" .($this->TotalLines);
				if(($this->TotalLines >12) && $Words ['smeta'] == 4)
				$LineClassCheck = TRUE;
				else if ($Line == ("aTi-" . ($this->TotalLines)) && $Words ['smeta'] != 3) 
					$LineClassCheck = FALSE;
				
				
				if ($Line == ("aTi-" . $this->TotalLines))
					$LastLine = $Words;
			}
		}
		
		/*
		 * Get`ting Last Syllable to Check for Naal,Kaasu, Malar, Pirappu
		 * patterns
		 */
		foreach ( $LastLine as $key => $value )
			if ($key != "smeta")
				$LastWord = $value;
		
		$LastWord = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $LastWord ), RecursiveIteratorIterator::LEAVES_ONLY );
		
		$LastSyllable = array ();
		$LastSyllableClass = array ();
		
		foreach ( $LastWord as $key => $value ) {
			
			$LastSyllableClass [] = $key;
			$LastSyllable [] = $value;
		}
	 	
		
		$FinalSyllableClassCheck = FALSE;
		
		//return  substr ( $LastSyllable [1], 1 );
		if (empty ( $LastSyllable [2] )) {
			
			$FinalSyllableClassCheck = TRUE;
		} 
		
		else if (strlen ( $LastSyllable [1] ) == 2 && substr ( $LastSyllable [1], 1 ) == 'u') 

		{
			
			$FinalSyllableClassCheck = TRUE;
			$LastSyllableClass [0] .= 'pu';
		}
		//$FinalSyllableClassCheck = TRUE;
		
		$this->VenLastSyllable = $LastSyllableClass [0];
		
		/* Check for Metre Specific Talais */
		//$FinalSyllableClassCheck = TRUE;
		$WordBondClassCheck = TRUE;
		$Bond = array ();
		
		$wrongBonds = array ();
		
		foreach ( $this->WordBond as $Bond ) {
			$BondType = $Bond ['bond'];
			
			if (substr ( $BondType, strlen ( $BondType ) - 21 ) != "வெண்டளை") {
				$WordBondClassCheck = FALSE;
				$wrongBonds [] = $BondType;
			}
		}
		
		/* Classify the Metre */
		
		$this->VenpaError = "";
		
		// Logging and Classifying Errors
		
		$this->VenpaError ['word'] [0] = 'ஈற்றடியின் ஈற்றுச்சீரைத் தவிர்த்து ஈரசைச்சீர்களும் காய்ச்சீர்களும் மட்டுமே பயின்று வருதல் வேண்டும்';
		$this->VenpaError ['bond'] [0] = 'வெண்டளைகள் மட்டுமே பயின்று வருதல் வேண்டும்';
		$this->VenpaError ['line'] [0] = 'ஈற்றடி மூன்று சீர்களும் ஏனைய அடிகள் நான்கு சீர்களும் கொண்டிருத்தல் வேண்டும்';
		$this->VenpaError ['final'] [0] = 'ஈற்றடியின் ஈற்றுச்சீர் நாள், மலர், காசு, பிறப்பு ஆகியவற்றுள் இருத்தல் வேண்டும்';
		
		// Bonds
		if (! $WordBondClassCheck) {
			$wrongBondsList = join ( ",", array_unique ( $wrongBonds ) );
			$this->VenpaError ['bond'] [1] = 'பாவினுள் வெண்டளை அல்லாத ' . $wrongBondsList . ' பயின்று வந்துள்ளது(ன)';
		}
		
		// WordClass
		if (! $WordClassCheck) {
			$wrongWordClassList = Roman_to_Tamil ( join ( ",", array_unique ( $wrongWordClasses ) ) );
			$this->VenpaError ['word'] [1] = $wrongWordClassList . ' ஆகிய வாய்ப்பாடு(கள்) பயின்றுள்ளது(ன)';
		}
		
		// LineClass
		if (! $LineClassCheck) {
			$this->VenpaError ['line'] [1] = "பொருந்தவில்லை";
		}
		
		// Final Syllable
		if (! $FinalSyllableClassCheck) {
			$this->VenpaError ['final'] [1] = "பொருந்தவில்லை";
		}
		
		$this->VenpaaTypeExpl = "";
		
		if ($WordBondClassCheck && $FinalSyllableClassCheck && $LineClassCheck && $WordClassCheck) 

		{
			
			$Vikalpa = $this->VikalpaCount;
			
			$TaniccolExists = $this->CheckTaniccol ( $this->InputSourceText, 2, TRUE );
			
			$this->VenpaaTypeExpl = ( string ) $this->TotalLines . " அடிகளுடன் ";
			
			if ($Vikalpa == 1)
				$this->VenpaaTypeExpl .= ( string ) $Vikalpa . " விகற்பம் கொண்டு ";
			else
				$this->VenpaaTypeExpl .= ( string ) $Vikalpa . " விகற்பங்கள் கொண்டு ";
			
			if ($this->TotalLines == 3 || $this->TotalLines == 4) {
				if ($TaniccolExists)
					$this->VenpaaTypeExpl .= "<em>தனிச்சொல்</em> பெற்று ";
				else
					$this->VenpaaTypeExpl .= "<em>தனிச்சொல்</em> பெறாது ";
			}
			
			if ($this->TotalLines == 4 && $Vikalpa == 1 && $TaniccolExists == TRUE)
				$MetreType = "_oru vika_Rpa nEricY ve_NpA";
			else if ($this->TotalLines == 4 && $Vikalpa == 2 && $TaniccolExists == TRUE)
				$MetreType = "_iru vika_Rpa nEricY ve_NpA";
			else 

			{
				$MetreType = "_i_VVicY ve_NpA";
				
				if ($Vikalpa == 1)
					$MetreType = "_oru vika_Rpa " . $MetreType;
				else
					$MetreType = "pala vika_Rpa " . $MetreType;
			}
			
			if ($this->TotalLines == 2 && $Vikalpa == 1)
				$MetreType = "_oru vika_Rpa_k kuRa_L ve_NpA";
			else if ($this->TotalLines == 2 && $Vikalpa == 2)
				$MetreType = "_iru vika_Rpa_k kuRa_L ve_NpA";
			else if ($this->TotalLines == 3 && $TaniccolExists == TRUE && $Vikalpa == 1)
				$MetreType = "_oru vika_Rpa nEricY ci_ntiya_l ve_NpA";
			else if ($this->TotalLines == 3 && $TaniccolExists == TRUE && $Vikalpa == 2)
				$MetreType = "_iru vika_Rpa nEricY ci_ntiya_l ve_NpA";
			else if ($this->TotalLines == 3 && $TaniccolExists == FALSE && $Vikalpa == 1)
				$MetreType = "_oru vika_Rpa _i_VVicY ci_ntiya_l ve_NpA";
			else if ($this->TotalLines == 3 && $TaniccolExists == FALSE && $Vikalpa > 1)
				$MetreType = "pala vika_Rpa _i_VVicY ci_ntiya_l ve_NpA";
			else if ($this->TotalLines > 4 && $this->TotalLines <= 12 && $Vikalpa == 1)
				$MetreType = "_oru vika_Rpa pa_KRoTY ve_NpA";
			else if ($this->TotalLines > 4 && $this->TotalLines <= 12 && $Vikalpa > 1)
				$MetreType = "pala vika_Rpa pa_KRoTY ve_NpA";
			else if ($this->TotalLines > 12)
				$MetreType = "kalive_NpA";
			
			$this->VenpaaTypeExpl .= "வந்ததால் <strong>" . Roman_to_Tamil ( $MetreType ). "</strong> ஆயிற்று";
			
			return $MetreType;
		} 

		else
			return NULL;
	}
	
	/**
	 * Check if the Prosody Metre is Asiriyapaa - If Asiriyappaa return the
	 * exact type, else return NULL
	 *
	 * @return string NULL
	 */
	public function CheckAsiyaripaa() {
		$root = $this->ParseTreeRoot;
		
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
		
		$WordClassCheck = TRUE;
		$FinalLastSyllableClassCheck = FALSE;
		$LineClassCheck = FALSE;
		
		$AllowedWordClassCount = 0;
		$TotalWordCount = 0;
		
		$DisAllowedWordClass = array (
				"karuviLa_GkaVi",
				"kUviLa_GkaVi" 
		);
		$AllowedWordClass = array (
				"tEmA",
				"puLimA",
				"kUviLa_m",
				"karuviLa_m" 
		);
		
		$AllowedMonoFinalLetters = array (
				"E",
				"O",
				"I",
				"Y",
				"Q" 
		);
		$AllowedTriFinalLetters = array (
				"A_y",
				"e_V" 
		);
		
		$LineWordCount = array ();
		
		/* Check for Allowed Word Class and DisAllowed Word Class */
		
		foreach ( $rit as $Line => $Words ) {
			
			if ($rit->hasChildren () == FALSE) {
				
				if ($Line == 'meta') {
					
					$TotalWordCount ++;
					
					if (in_array ( $Words, $DisAllowedWordClass ))
						$WordClassCheck = FALSE;
					if (in_array ( $Words, $AllowedWordClass ))
						$AllowedWordClassCount ++;
				}
			}
			
			if ($rit->getDepth () == 2) {
				
				$LineWordCount [] = $Words ['smeta'];
			}
		}
		
		/*
		 * Check for Final Syllable ending
		 */
		
		$FinalLettersMono = substr ( $this->InputSourceText, - 1 );
		$FinalLettersTri = substr ( $this->InputSourceText, - 3 );
		
		if (in_array ( $FinalLettersMono, $AllowedMonoFinalLetters ) || in_array ( $FinalLettersTri, $AllowedTriFinalLetters ))
			$FinalLastSyllableClassCheck = TRUE;
			
			/*
		 * Check for Line Count
		 */
		
		if ($this->TotalLines > 2)
			$LineClassCheck = TRUE;
			
			/*
		 * Check if Agavarseers are Majority
		 */
		$WordSyllableCheck = FALSE;
		
		if (($AllowedWordClassCount / $TotalWordCount) > 0.45)
			
			$WordSyllableCheck = TRUE;
			
			/*
		 * Check if all Conditions are TRUE
		 */
		
		if ($WordClassCheck && $FinalLastSyllableClassCheck && $LineClassCheck && $WordSyllableCheck)
			$AsiriyappaaCheck = TRUE;
		else
			$AsiriyappaaCheck = FALSE;
			
			/*
		 * Find the Type of Asiriyappaa
		 */
		
		$AlavadiClass = TRUE;
		$NonAlavadiClassCount = array ();
		
		/*
		 * Validate the count of Words in Each line, to decide the type of
		 * Asiriyappa
		 */
		
		$Vikalpa = $this->VikalpaCount;
		
		for($LineIndex = 0; $LineIndex < count ( $LineWordCount ); $LineIndex ++) {
			if ($LineWordCount [$LineIndex] < 4) {
				$AlavadiClass = FALSE;
				$NonAlavadiClassCount [] = $LineIndex + 1;
				
				if ($LineIndex == 0 || $LineIndex == (count ( $LineWordCount ) - 1))
					$AsiriyappaaCheck = FALSE;
			}
			
			if ($LineWordCount [$LineIndex] > 4)
				$AsiriyappaaCheck = FALSE;
		}
		
		if ($AsiriyappaaCheck) 

		{
			//return "true";
			/*
			 * If Vikalpa = 1 the it must be considered as Kali Vritta rather
			 * than Asiriyappaa
			 */
			
			if ($AlavadiClass) {
				if ($Vikalpa != 1)
					$MetreType = "nilYma_NTila _Aciriya_ppA";
				else if ($this->TotalLines == 4)
					$MetreType = "_atimRima_NTila _Aciriya_ppA";
				else
					$MetreType = NULL;
			} 

			else {
				if (count ( $NonAlavadiClassCount ) == 1 && $NonAlavadiClassCount [0] == ($this->TotalLines - 1))
					
					$MetreType = "nEricY _Aciriya_ppA";
				
				else
					
					$MetreType = "_iNY_kkuRa_L _Aciriya_ppA";
			}
			
			return $MetreType;
		} 

		else
			
			return NULL;
	}
	
	/**
	 * Check if the Prosody Metre is Kalipaa - If the metre matches return the
	 * exact type, else return NULL
	 *
	 * @return string NULL
	 */
	public function CheckKalippaa() 

	{
		$root = $this->ParseTreeRoot;
		
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
		
		$LineClassCheck = TRUE;
		$WordClassCheck = TRUE;
		$WordSyllableClassCheck = FALSE;
		$LineCountCheck = FALSE;
		
		$DisAllowedWordClass = array (
				"karuviLa_GkaVi",
				"kUviLa_GkaVi",
				"tEmA",
				"puLimA" 
		);
		$AllowedWordClass = array (
				"tEmA_GkA_y",
				"puLimA_GkA_y",
				"kUviLa_GkA_y",
				"karuviLa_GkA_y" 
		);
		
		$TotalWordCount = 0;
		
		$AllowedWordClassCount = 0;
		
		/*
		 * Check for Line Count
		 */
		
		if ($this->TotalLines > 3)
			$LineCountCheck = TRUE;
			
			/*
		 * Check for Allowed Word Class
		 */
		
		foreach ( $rit as $Line => $Words ) {
			
			if ($rit->hasChildren () == FALSE) {
				
				if ($Line == 'meta') {
					
					$TotalWordCount ++;
					
					if (in_array ( $Words, $DisAllowedWordClass ))
						$WordClassCheck = FALSE;
					if (in_array ( $Words, $AllowedWordClass ))
						$AllowedWordClassCount ++;
				}
			}
			
			if ($rit->getDepth () == 2) {
				
				if ($Words ['smeta'] != 4)
					$LineClassCheck = FALSE;
			}
		}
		
		/*
		 * Check for Allowed Word Syllable Types is Majority
		 */
		
		if ($AllowedWordClassCount / $TotalWordCount > 0.45)
			$WordSyllableClassCheck = TRUE;
		
		if ($WordClassCheck && $LineClassCheck && $WordSyllableClassCheck && $LineCountCheck)
			return "taravu ko_ccaka_k kali_ppA";
		else
			return NULL;
	}
	
	/**
	 * Check if the Prosody Metre is Kalivenpaa - If the metre matches return
	 * the exact type, else return NULL
	 *
	 * @return string NULL
	 */
	public function CheckVenKalippaa() 

	{
		$root = $this->ParseTreeRoot;
		
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
		
		$LineClassCheck = TRUE;
		$WordClassCheck = TRUE;
		$WordSyllableClassCheck = FALSE;
		$VenkalippaaEndCheck = FALSE;
		$LineCountCheck = FALSE;
		
		$DisAllowedWordClass = array (
				"karuviLa_GkaVi",
				"kUviLa_GkaVi",
				"tEmA",
				"puLimA" 
		);
		$NonFinalWordClass = array (
				"karuviLa_GkaVi",
				"kUviLa_GkaVi" 
		);
		$AllowedWordClass = array (
				"tEmA_GkA_y",
				"puLimA_GkA_y",
				"kUviLa_GkA_y",
				"karuviLa_GkA_y" 
		);
		
		$TotalWordCount = 0;
		$AllowedWordClassCount = 0;
		$FinalWords = array ();
		
		$LineIndex = 0;
		
		/*
		 * Check for Line Count
		 */
		
		if ($this->TotalLines > 3)
			$LineCountCheck = TRUE;
			
			/*
		 * Check for Allowed Word Classes
		 */
		
		foreach ( $rit as $Line => $Words ) {
			
			if ($rit->hasChildren () == FALSE) {
				
				if ($Line == 'meta' && $LineIndex != $this->TotalLines) {
					
					$TotalWordCount ++;
					
					if (in_array ( $Words, $DisAllowedWordClass ))
						$WordClassCheck = FALSE;
					if (in_array ( $Words, $AllowedWordClass ))
						$AllowedWordClassCount ++;
				}
				if ($Line == 'meta' && $LineIndex == $this->TotalLines) 

				{
					$FinalWords [] = $Words;
					
					if (in_array ( $Words, $AllowedWordClass ))
						$AllowedWordClassCount ++;
				}
			}
			
			if ($rit->getDepth () == 2) {
				
				$LineIndex ++;
				
				if ($Words ['smeta'] != 4 && $Line != ("aTi-" . $this->TotalLines)) {
					$LineClassCheck = FALSE;
				}
				if ($Line == ("aTi-" . $this->TotalLines)) {
					
					$FinalWordsCount = $Words ['smeta'];
				}
			}
		}
		
		/*
		 * Check if Final Line Word Coutn is 3 and prsence of DisallowedWord
		 * Class
		 */
		if ($FinalWordsCount == 3 && (! in_array ( $FinalWords [0], $DisAllowedWordClass )) && (! in_array ( $FinalWords [1], $DisAllowedWordClass )) && (! in_array ( $FinalWords [2], $NonFinalWordClass ))) {
			$VenkalippaaEndCheck = TRUE;
		}
		
		if ($TotalWordCount > 0 && $AllowedWordClassCount / $TotalWordCount > 0.45)
			$WordSyllableClassCheck = TRUE;
		
		if ($WordClassCheck && $LineClassCheck && $WordSyllableClassCheck && $VenkalippaaEndCheck && $LineCountCheck)
			return "ve_Nkali_ppA";
		else
			return NULL;
	}
	
	/**
	 * Check if the Prosody Metre is Vanjipaa - If the metre matches return the
	 * exact type, else return NULL
	 *
	 * @return string NULL
	 */
	public function CheckVanjippaa() 

	{
		$root = $this->ParseTreeRoot;
		
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
		
		$WordSyllableClassCheck = FALSE;
		$LineClassCheck = TRUE;
		$LoneWord = FALSE;
		$LineWordCount = array ();
		$AllowedWordClass = array (
				"tEmA",
				"puLimA",
				"kUviLa_m",
				"karuviLa_m" 
		);
		$AllowedWordClassCount = 0;
		$TotalWordCount = 0;
		
		/*
		 * Check for Taniccol, Allowed Word Class in Asiriya Surithakam
		 */
		
		foreach ( $rit as $Line => $Words ) {
			
			if ($rit->hasChildren () == FALSE) {
				
				if ($Line == 'meta' && $LoneWord) {
					
					$TotalWordCount ++;
					
					if (in_array ( $Words, $AllowedWordClass ))
						$AllowedWordClassCount ++;
				}
			}
			
			if ($rit->getDepth () == 2) {
				
				if ($Words ['smeta'] == 1)
					$LoneWord = TRUE;
				
				$LineWordCount [] = $Words ['smeta'];
			}
		}
		
		/*
		 * Check if Allowed Word Class is Majority in Asiriyasurithakam
		 */
		if ($LoneWord)
			if ($AllowedWordClassCount / $TotalWordCount > 0.45)
				$WordSyllableClassCheck = TRUE;
			
			/*
		 * Validate the Words in Each line
		 */
		
		for($LineIndex = 0; $LineIndex < count ( $LineWordCount ); $LineIndex ++) {
			
			if ($LineWordCount [$LineIndex] != $LineWordCount [$LineIndex + 1])
				$LineClassCheck = FALSE;
			
			if ($LineWordCount [$LineIndex + 2] == 1)
				break;
		}
		
		if ($LineIndex < 1 || $LineWordCount [$LineIndex + 2] != 1)
			$LineClassCheck = FALSE;
		
		for($NextLineIndex = $LineIndex + 3; $NextLineIndex < count ( $LineWordCount ); $NextLineIndex ++) {
			if ($LineWordCount [$NextLineIndex] != 3 && $LineWordCount [$NextLineIndex] != 4)
				$LineClassCheck = FALSE;
		}
		
		$SuridhagamWordCount = ($NextLineIndex - ($LineIndex + 3));
		
		if ($SuridhagamWordCount != 2)
			$LineClassCheck = FALSE;
			
			/*
		 * Check the Type of Vanjippa
		 */
		
		if ($LineClassCheck && $WordSyllableClassCheck) {
			if ($LineWordCount [$LineIndex] == 2)
				$MetreType = "kuRaLaTi va_Jci_ppA";
			if ($LineWordCount [$LineIndex] == 3)
				$MetreType = "ci_ntaTi va_Jci_ppA";
			
			return $MetreType;
		} 

		else
			return NULL;
	}
	
	/**
	 * Check if the Prosody Metre is VenpaaInam - If the metre matches return
	 * the exact type, else return NULL
	 *
	 * @return Ambigous <string, NULL>
	 */
	public function CheckVenInam() {
		$KuralTaazhisaiCheck = FALSE;
		$KuralTuraiCheck = FALSE;
		
		$TaazhisaiCheck = TRUE;
		$TuraiCheck = TRUE;
		$ViruttamCheck = TRUE;
		
		$LineTypeReverse = array_flip ( $this->LineType );
		
		/*
		 * Check Kural Turai & Thaazhisai
		 */
		
		if ($this->TotalLines == 2) {
			if ($LineTypeReverse [$this->LineClass [0]] == $LineTypeReverse [$this->LineClass [1]])
				$KuralTuraiCheck = TRUE;
			
			if ($LineTypeReverse [$this->LineClass [0]] > $LineTypeReverse [$this->LineClass [1]])
				$KuralTaazhisaiCheck = TRUE;
		}
		
		/*
		 * Check for Ven Thaazhisai
		 */
		
		if ($this->TotalLines == 3) {
			if (($this->LineClass [0] != "_aLavaTi") || ($this->LineClass [1] != "_aLavaTi") || $this->LineClass [2] != "ci_ntaTi")
				$TaazhisaiCheck = FALSE;
		} 

		else
			$TaazhisaiCheck = FALSE;
			
			/*
		 * Check for Ven Thurai
		 */
		
		$ProsodyLineTypes = $this->LineClass;
		$LinesCount = array ();
		
		foreach ( $ProsodyLineTypes as $key => $value )
			$LinesCount [] = ($LineTypeReverse [$value]);
		
		$RevLinesCount = $LinesCount;
		rsort ( $RevLinesCount );
		
		if ($LinesCount != $RevLinesCount)
			$TuraiCheck = FALSE;
		
		$LineClassCheck = $this->CheckLineWordCount ( $this->TotalLines, $LinesCount [0] );
		
		if ($this->TotalLines < 3 || $this->TotalLines > 7 || $LineClassCheck)
			$TuraiCheck = FALSE;
			
			/*
		 * Check for Veli Viruttam
		 */
		
		$TaniccolCheck = array ();
		
		for($LineIndex = 1; $LineIndex <= $this->TotalLines; $LineIndex ++) {
			$TaniccolCheck = $this->CheckTaniccol ( $this->InputSourceText, $LineIndex, FALSE );
			
			if (! $TaniccolCheck)
				$ViruttamCheck = FALSE;
		}
		
		$LineClassCheck = $this->CheckLineWordCount ( $this->TotalLines, 5 );
		
		if ($this->TotalLines != 3 && $this->TotalLines != 4 && $LineClassCheck)
			$ViruttamCheck = FALSE;
		
		if ($KuralTaazhisaiCheck)
			$MetreType = "kuRa_TTAZicY";
		else if ($KuralTuraiCheck)
			$MetreType = "kuRa_L ve_Nce_ntuRY";
		else if ($TaazhisaiCheck)
			$MetreType = "ve_NTAZicY";
		else if ($TuraiCheck)
			$MetreType = "ve_NTuRY";
		else if ($ViruttamCheck)
			$MetreType = "veLi viru_tta_m";
		else
			$MetreType = NULL;
		
		return $MetreType;
	}
	
	/**
	 * Check if the Prosody Metre is Aasiriyapaainam - If the metre matches
	 * return the exact type, else return NULL
	 *
	 * @return Ambigous <string, NULL>
	 */
	public function CheckAsiriyaInam() {
		$TaazhisaiCheck = FALSE;
		$TuraiCheck = FALSE;
		$ViruttamCheck = FALSE;
		
		for($LineIndex = 6; $LineIndex <= 24; $LineIndex ++) 

		{
			$ViruttamCheck = $this->CheckLineWordCount ( 4, $LineIndex );
			
			if ($ViruttamCheck)
				break;
		}
		
		/*
		 * Check for Thaazhisai
		 */
		
		for($WordCount = 2; $WordCount <= 9; $WordCount ++)
			$TaazhisaiCheck = $TaazhisaiCheck || $this->CheckLineWordCount ( 3, $WordCount );
			
			/*
		 * Check for Turai
		 */
		
		$LineLevelCheck = FALSE;
		
		if ($this->TotalLines == 4) 

		{
			for($WordCount = 2; $WordCount <= 24; $WordCount ++)
				$LineLevelCheck = $LineLevelCheck || $this->CheckLineWordCount ( 4, $WordCount );
			
			$TuraiCheck = ! $LineLevelCheck;
			
			$ProsodyLineTypes = $this->LineClass;
			$LineTypeReverse = array_flip ( $this->LineType );
			
			/* Check if it isn't a Kalittaazhisai */
			
			foreach ( $ProsodyLineTypes as $key => $value ) {
				if (($key + 1) != $this->TotalLines)
					$LineWordCount [] = ($LineTypeReverse [$value]);
				else
					$FinalLineCount = ($LineTypeReverse [$value]);
			}
			
			if (max ( $LineWordCount ) < $FinalLineCount)
				$TuraiCheck = FALSE;
		} 

		else
			$TuraiCheck = FALSE;
		
		if ($TaazhisaiCheck)
			$MetreType = "_Aciriya_ttAZicY";
		else if ($TuraiCheck)
			$MetreType = "_Aciriya_ttuRY";
		else if ($ViruttamCheck)
			$MetreType = $this->LineType [$LineIndex] . " _Aciriya viru_tta_m";
		else
			$MetreType = NULL;
		
		return $MetreType;
	}
	
	/**
	 * Check if the Prosody Metre is KalipaaInam - If the metre matches return
	 * the exact type, else return NULL
	 *
	 * @return Ambigous <string, NULL>
	 */
	public function CheckKaliInam() {
		$TaazhisaiCheck = TRUE;
		$KattalaiCheck = FALSE;
		$TuraiCheck = $this->CheckLineWordCount ( 4, 5 );
		$ViruttamCheck = $this->CheckLineWordCount ( 4, 4 );
		
		/* Check for Kattalai Kaliththurai */
		
		if ($TuraiCheck) 

		{
			
			/*
			 * Check for Letter count in Each line
			 */
			
			$Lines = explode ( PHP_EOL, trim ( $this->InputSourceText ) );
			$LinesMetre = array ();
			
			$root = $this->ParseTreeRoot;
			
			$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $root ), RecursiveIteratorIterator::SELF_FIRST );
			
			$NewSentence = TRUE;
			
			foreach ( $rit as $key => $value ) {
				
				if ($rit->hasChildren () === FALSE) {
					
					if ($NewSentence)
						if ($key == "nE_r" || $key == "nirY") {
							
							$LinesMetre [] = $key;
							$NewSentence = FALSE;
						}
				} 

				else {
					if ($rit->getDepth () == 2)
						$NewSentence = TRUE;
				}
			}
			
			$WordCountCheck = TRUE;
			
			for($LineIndex = 0; $LineIndex < count ( $Lines ); $LineIndex ++) {
				
				$LetterCount = $this->GetLetterCount ( $Lines [$LineIndex] );
				$KattalaiCount = $LetterCount ['Vowel'] + $LetterCount ['ConsonantVowel'];
				
				// echo $KattalaiCount;
				
				if ($LinesMetre [$LineIndex] == "nE_r" && $KattalaiCount != 16)
					$WordCountCheck = FALSE;
				if ($LinesMetre [$LineIndex] == "nirY" && $KattalaiCount != 17)
					$WordCountCheck = FALSE;
			}
			
			/*
			 * Check for Vendalai in each line.. but not inbetween lines
			 */
			
			$WordBondClassCheck = TRUE;
			$WCount = 1;
			
			foreach ( $this->WordBond as $Bond ) {
				$BondType = $Bond ['bond'];
				
				if ($WCount % 5 != 0)
					if (substr ( $BondType, strlen ( $BondType ) - 21 ) != "வெண்டளை")
						$WordBondClassCheck = FALSE;
				
				$WCount ++;
			}
			
			/*
			 * Check if LastSyllableEnds with E
			 */
			
			$LastSyllableCheck = TRUE;
			$LastSyllable = substr ( $this->InputSourceText, - 1 );
			
			if ($LastSyllable != "E")
				$LastSyllableCheck = FALSE;
			
			if ($WordBondClassCheck && $WordCountCheck && $LastSyllableCheck)
				$KattalaiCheck = TRUE;
		}
		
		/*
		 * Check for Kalittaazhisai
		 */
		
		if ($this->TotalLines < 2)
			$TaazhisaiCheck = FALSE;
		
		$LineTypeReverse = array_flip ( $this->LineType );
		$ProsodyLineTypes = $this->LineClass;
		
		$LineWordCount = array ();
		
		foreach ( $ProsodyLineTypes as $key => $value ) {
			if (($key + 1) != $this->TotalLines)
				$LineWordCount [] = ($LineTypeReverse [$value]);
			else
				$FinalLineCount = ($LineTypeReverse [$value]);
		}
		
		if (count ( $LineWordCount ) > 0)
			if (max ( $LineWordCount ) >= $FinalLineCount)
				$TaazhisaiCheck = FALSE;
		
		if ($TaazhisaiCheck)
			$MetreType = "kali_ttAZicY";
		else if ($KattalaiCheck)
			$MetreType = "ka_TTaLY kali_ttuRY";
		else if ($TuraiCheck)
			$MetreType = "kali_ttuRY";
		else if ($ViruttamCheck)
		    {
			//CheckAsiyaripaa();
			$MetreType = "kali viru_tta_m";
			
			}
		else
			$MetreType = NULL;
		
		return $MetreType;
	}
	
	/**
	 * Check if the Prosody Metre is VanjippaaInam - If the metre matches return
	 * the exact type, else return NULL
	 *
	 * @return Ambigous <string, NULL>
	 */
	public function CheckVanjiInam() {
		$TaazhisaiCheck = $this->CheckLineWordCount ( 12, 2 );
		$TuraiCheck = $this->CheckLineWordCount ( 4, 2 );
		$ViruttamCheck = $this->CheckLineWordCount ( 4, 3 );
		
		if ($TaazhisaiCheck)
			$MetreType = "va_Jci_ttAZicY";
		else if ($TuraiCheck)
			$MetreType = "va_Jci_ttuRY";
		else if ($ViruttamCheck)
			$MetreType = "va_Jci viru_tta_m";
		else
			$MetreType = NULL;
		
		return $MetreType;
	}
	
	/**
	 * Parses the Text and constructs the Parse Tree with the Information on
	 * Sentence, WordClass, Syllable Class
	 *
	 * @param String $ProsodyText        	
	 * @return AssociativeArray ParseTree
	 */
	 public function GetTextSyllablePattern_1( $ProsodyText )
		 
		 {
			 
			 
			 
		
		$ProsodyText = preg_replace ( "/\(.{1,2}\)/", "", $ProsodyText ); // remov
		                                                                 // paranthesized
		                                                                  // words
		
		$ProsodyText = RemovePunctuation ( $ProsodyText ); // Removing Punctuation
		                                                   // and
		                                                   // reformatting the
		//return $ProsodyText;                                                   // text.
		
		$Lines = explode ( PHP_EOL, trim ( $ProsodyText ) ); // Seperating the
		                                                     // lines of the
		                                                     // text.
		
		$Lines = preg_replace ( "/\s$/", "", $Lines ); // remove unnecessary
		                                               // spaces
		
		$LineList = array ();
		$LineCount = 1;
		
		foreach ( $Lines as $Line ) {
			$Words = explode ( " ", trim ( $Line ) );
			
			$WordList = array ();
			$WordCount = 1;
			
			foreach ( $Words as $Word ) {
				$WordSyllable = array ();
				
				$Word = str_replace ( array (
						"W",
						"Y" 
				), array (
						"B",
						"Q" 
				), $Word ); // B-aukarakurukkam
				            // Q-Aikaarakurukkam
				
				$Word = preg_replace ( "/(\b.)B/", "$1W", $Word );
				
				$Word = preg_replace ( "/(\b.)Q/", "$1Y", $Word );
				
				/* Get Niraipu Words */
				
				preg_match_all ( '/([kGcJTNtnpmyrlvZLRVjSsh]?_?[aiueoBQ])([kGcJTNtnpmyrlvZLRVjSsh][aAiIuUeEoOYWBQ])(_[KkGcJTNtnpmyrlvZLRVjSsh])*([kGcJTNtnpmyrlvZLRVjSsh]u)/', $Word, $WordClassNiraipu, PREG_OFFSET_CAPTURE );
				
				foreach ( $WordClassNiraipu [0] as $Niraipu ) {
					$WordSyllable [$Niraipu [1]] = array (
							'nirYpu' => $Niraipu [0] 
					);
					
					$chr = "";
					
					for($i = 0; $i < strlen ( $Niraipu [0] ); $i ++)
						$chr = $chr . "^";
					
					$Word = preg_replace ( "/" . $Niraipu [0] . "/", $chr, $Word, 1 );
					
				}
				
				/* Get Nerpu Words */
				
				preg_match_all ( '/[kGcJTNtnpmyrlvZLRVjSsh]?_?[AIUEOQYBW](_[KkGcJTNtnpmyrlvZLRVjSsh])*([kGcJTNtnpmyrlvZLRVjSsh]u)/', $Word, $WordClassNerpu, PREG_OFFSET_CAPTURE );
				 preg_match_all('/[kGcJTNtnpmyrlvZLRVjSsh]?[aAiIuUeEoOYWBQ](_[KkGcJTNtnpmyrlvZLRVjSsh])*/',$wrd,$ner,PREG_OFFSET_CAPTURE);
				
				if (! empty ( $WordClassNerpu ))
					foreach ( $WordClassNerpu [0] as $Nerpu ) {
						$WordSyllable [$Nerpu [1]] = array (
								'nE_rpu' => $Nerpu [0] 
						);
						
						$chr = "";
						
						for($i = 0; $i < strlen ( $Nerpu [0] ); $i ++)
							$chr = $chr . "^";
						
						$Word = preg_replace ( "/" . $Nerpu [0] . "/", $chr, $Word, 1 );
					}
					
						/* Get Nirai Words */
				
				preg_match_all ( '/([kGcJTNtnpmyrlvZLRVjSsh]?_?[aiueoBQ])([kGcJTNtnpmyrlvZLRVjSsh][aAiIuUeEoOYWBQ])(_[KkGcJTNtnpmyrlvZLRVjSsh])*/', $Word, $WordClassNirai, PREG_OFFSET_CAPTURE );
				
				foreach ( $WordClassNirai [0] as $Nirai ) {
					$WordSyllable [$Nirai [1]] = array (
							'nirY' => $Nirai [0] 
					);
					
					$chr = "";
					
					for($i = 0; $i < strlen ( $Nirai [0] ); $i ++)
						$chr = $chr . "^";
						
						// $Word=str_replace($Nirai,$chr,$Word);
					$Word = preg_replace ( "/" . $Nirai [0] . "/", $chr, $Word, 1 );
				}
				
				/* Get Ner Words */
				
				preg_match_all ( '/[kGcJTNtnpmyrlvZLRVjSsh]?_?[aAiIuUeEoOQYBW](_[KkGcJTNtnpmyrlvZLRVjSsh])*/', $Word, $WordClassNer, PREG_OFFSET_CAPTURE );
				// preg_match_all('/[kGcJTNtnpmyrlvZLRVjSsh]?[aAiIuUeEoOYWBQ](_[KkGcJTNtnpmyrlvZLRVjSsh])*/',$wrd,$ner,PREG_OFFSET_CAPTURE);
				
				if (! empty ( $WordClassNer ))
					foreach ( $WordClassNer [0] as $Ner ) {
						$WordSyllable [$Ner [1]] = array (
								'nE_r' => $Ner [0] 
						);
					}
				
				ksort ( $WordSyllable );
				
				$Syllable = array ();
				$SyllableCount = 1;
				$WordPattern = "";
				
				foreach ( $WordSyllable as $key => $value ) {
					$Syllable ["acY-" . $SyllableCount ++] = $value;
					
					foreach ( $value as $Class => $ClassWord )
						$WordPattern = $WordPattern . $Class;
				}
				
				if (! empty ( $WordPattern ))
					$Syllable ["meta"] = $this->WordType [$WordPattern];
				else
					$WordCount --;
				
				$WordList ["cI_r-" . $WordCount ++] = $Syllable;
			}
			
			$WordList ["smeta"] = -- $WordCount;
			
			$LineList ["aTi-" . $LineCount ++] = $WordList;
		}
		
		$this->TotalLines = -- $LineCount;
		
		return array (
				"pA" => $LineList 
		);
	
			 
			 
			 
		  }
		 
		 
	 
	public function GetTextSyllablePattern($ProsodyText) 

	{
		//return $ProsodyText;
		$ProsodyText = preg_replace ( "/\(.{1,2}\)/", "", $ProsodyText ); // remov
		                                                                 // paranthesized
		                                                                  // words
		
		$ProsodyText = RemovePunctuation ( $ProsodyText ); // Removing Punctuation
		                                                   // and
		                                                   // reformatting the
		                                                   // text.
		
		$Lines = explode ( PHP_EOL, trim ( $ProsodyText ) ); // Seperating the
		                                                     // lines of the
		                                                     // text.
		
		$Lines = preg_replace ( "/\s$/", "", $Lines ); // remove unnecessary
		                                               // spaces
		
		$LineList = array ();
		$LineCount = 1;
		
		foreach ( $Lines as $Line ) {
			$Words = explode ( " ", trim ( $Line ) );
			
			$WordList = array ();
			$WordCount = 1;
			
			foreach ( $Words as $Word ) {
				$WordSyllable = array ();
				
				$Word = str_replace ( array (
						"W",
						"Y" 
				), array (
						"B",
						"Q" 
				), $Word ); // B-aukarakurukkam
				            // Q-Aikaarakurukkam
				
				$Word = preg_replace ( "/(\b.)B/", "$1W", $Word );
				
				$Word = preg_replace ( "/(\b.)Q/", "$1Y", $Word );
				/* Get Nirai Words */
				
				preg_match_all ( '/([kGcJTNtnpmyrlvZLRVjSsh]?_?[aiueoBQ])([kGcJTNtnpmyrlvZLRVjSsh][aAiIuUeEoOYWBQ])(_[KkGcJTNtnpmyrlvZLRVjSsh])*/', $Word, $WordClassNirai, PREG_OFFSET_CAPTURE );
				
				foreach ( $WordClassNirai [0] as $Nirai ) {
					$WordSyllable [$Nirai [1]] = array (
							'nirY' => $Nirai [0] 
					);
					
					$chr = "";
					
					for($i = 0; $i < strlen ( $Nirai [0] ); $i ++)
						$chr = $chr . "^";
					
					$Word = preg_replace ( "/" . $Nirai [0] . "/", $chr, $Word, 1 );
				}
				
				
				/* Get Ner Words */
				
				preg_match_all ( '/[kGcJTNtnpmyrlvZLRVjSsh]?_?[aAiIuUeEoOQYBW](_[KkGcJTNtnpmyrlvZLRVjSsh])*/', $Word, $WordClassNer, PREG_OFFSET_CAPTURE );
				// preg_match_all('/[kGcJTNtnpmyrlvZLRVjSsh]?[aAiIuUeEoOYWBQ](_[KkGcJTNtnpmyrlvZLRVjSsh])*/',$wrd,$ner,PREG_OFFSET_CAPTURE);
				
				if (! empty ( $WordClassNer ))
					foreach ( $WordClassNer [0] as $Ner ) {
						$WordSyllable [$Ner [1]] = array (
								'nE_r' => $Ner [0] 
						);
					}
				
				ksort ( $WordSyllable );
				
				$Syllable = array ();
				$SyllableCount = 1;
				$WordPattern = "";
				
				foreach ( $WordSyllable as $key => $value ) {
					$Syllable ["acY-" . $SyllableCount ++] = $value;
					
					foreach ( $value as $Class => $ClassWord )
						$WordPattern = $WordPattern . $Class;
				}
				
				if (! empty ( $WordPattern ))
					$Syllable ["meta"] = $this->WordType [$WordPattern];
				else
					$WordCount --;
				
				$WordList ["cI_r-" . $WordCount ++] = $Syllable;
			}
			
			$WordList ["smeta"] = -- $WordCount;
			
			$LineList ["aTi-" . $LineCount ++] = $WordList;
		}
		
		$this->TotalLines = -- $LineCount;
		
		return array (
				"pA" => $LineList 
		);
	}
	
	/**
	 * Calculates the number of Vikalpa (Adi Etukai) in the Text
	 *
	 * @return number
	 */
	public function GetVikalpaCount($ProsodyText) 

	{
		$ProsodyText = RemovePunctuation ( $ProsodyText ); // Removing
		                                                             // Punctuation
		                                                             // and
		                                                             // reformatting
		                                                             // the
		                                                             // text.
		$Lines = explode ( PHP_EOL, trim ( $ProsodyText ) );
		
		$FeetWords = array ();
		$VikalpaCount = 1;
		
		foreach ( $Lines as $Line ) {
			$Words = explode ( " ", $Line );
			$FeetWords [] = $Words [0];
		}
		
		for($WordIndex = 0; $WordIndex < count ( $FeetWords ) - 1; $WordIndex ++)
			if (! $this->CheckEtukai ( $FeetWords [$WordIndex], $FeetWords [$WordIndex + 1] ))
				$VikalpaCount ++;
		
		return $VikalpaCount;
	}
	
	/**
	 * Checks if the Taniccol is present in a give Line, and whether it should
	 * rhyme (etukai) with the line
	 *
	 * @param String $SourceText        	
	 * @param Number $LineIndex        	
	 * @param Boolean $RhymeCheck        	
	 * @return boolean
	 */
	public function CheckTaniccol($SourceText, $LineIndex, $RhymeCheck) 

	{
		$SourceText = str_replace ( "--", "-", $SourceText );
		$SourceText = str_replace ( "–", "-", $SourceText );
		
		$Lines = explode ( PHP_EOL, trim ( $SourceText ) );
		$Words = explode ( "-", $Lines [$LineIndex - 1] );
		
		$TaniccolExists = TRUE;
		$TaniccolVikalpaExists = TRUE;
		
		// echo $words[1];
		
		if (count ( $Words ) != 2)
			$TaniccolExists = FALSE;
		
		$LongVowels = array (
				"A",
				"I",
				"U",
				"E",
				"O",
				"W",
				"Y" 
		);
		$ShortVowels = array (
				"a",
				"i",
				"u",
				"e",
				"o" 
		);
		
		if (! $this->CheckEtukai ( trim ( $Words [0] ), trim ( $Words [1] ) ))
			$TaniccolVikalpaExists = FALSE;
		
		if (! $RhymeCheck)
			$TaniccolVikalpaExists = TRUE;
		
		if ($TaniccolExists && $TaniccolVikalpaExists)
			return TRUE;
		else
			return FALSE;
	}

public function DisplayLetterCount() {
		$LetterCount = $this->LetterCount;
		$DivTag = <<<CWS

<div class="ui-state-highlight ui-corner-all"
	style="margin-top: 5px; padding: 0 .7em;">
<p><span class="ui-icon ui-icon-info"
	style="float: left; margin-right: .3em;"></span>

CWS;

		$val .= $DivTag;
		$val .= "<span class=\"uiTran\">" . "எழுத்து எண்ணிக்கை". "</span>";
		$val .= "</p></div>";
		$val .= "<br/>";	

		
		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "உயிரெழுத்துக்கள்". "</span>: </span>";
		$val .= $LetterCount ['Vowel'];
		
		$val .= " | ";
		
		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "மெய்யெழுத்துக்கள்". "</span>: </span>";
		$val .= $LetterCount ['Consonant'];
		
		$val .= " | ";
		
		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "உயிர்மெய்யெழுத்துக்கள்". "</span>: </span>";
		$val .= $LetterCount ['ConsonantVowel'];
		
		$val .= " | ";
		
		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "ஆய்த எழுத்து". "</span>: </span>";
		$val .= $LetterCount ['Aytham'];
		
		$val .= "<br/><br/>";	

		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "குறில் எழுத்துக்கள்". "</span>: </span>";
		$val .= $LetterCount ['Short'];
		
		$val .= " | ";
		
		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "நெடில் எழுத்துக்கள்". "</span>: </span>";
		$val .= $LetterCount ['Long'];
		
		$val .= "<br/><br/>";	
		
		$val .= $DivTag;
		$val .= "<span class=\"uiTran\">" .  "மாத்திரை எண்ணிக்கை". "</span>";
		$val .= "</p></div>";
		$val .= "<br/>";	
		
		$Lines = explode ( PHP_EOL, trim ( $this->InputSourceText ) );		
		
		$MatraCountAll = 0;		
		
		foreach($Lines as $Line)
		{
			$Words = explode(" ",$Line);			
			
			foreach($Words as $Word)
			{
				$MatraCount = $this->GetMatraCount($Word);
				$val .= "<ruby>"."<span class=\"uiTrant\">" . Roman_to_Tamil($Word) . "</span>"."<rt>";
				if($MatraCount > 0)
					$val .= $MatraCount;
				$val .= "</rt></ruby>"." ";
				$MatraCountAll += $MatraCount;						
			}
			
			$val .= "<br/><br/>";
		}
		
		$val .= "<span class=\"letterTitle\"> <span class=\"uiTran\">" . "மொத்த மாத்திரைகள்" . "</span>: </span>";
		$val .= $MatraCountAll;
		$leetercount_detail = $val;
		return $leetercount_detail;
	}
	


	/**
	 * Displays the Count of Letters
	 */
	/** Display count of Tokappiyam Lineclasses **/
	
public function DisplayLineClassTol() {
	
	$Lines = explode ( PHP_EOL, trim ( $this->InputSourceText ) );
		
	foreach($Lines as $Line)
		{
			$Words = explode(" ",$Line);
			
			echo Roman_to_Tamil($Line)." ";
			
			$LineCount = 0;
			
			foreach($Words as $Word)
			{
			#echo "Before removal: ".$Word."<br/>";
			
			$Word = preg_replace("/([AIUEOYW])([kcTtpR]u$)/","$1#",$Word);
			$Word = preg_replace("/(_[kGcJTNtnpmyrlvZLRV])([kcTtpR]u$)/","$1#",$Word);
			$Word = preg_replace("/([aAiIuUeEoOYW])([kGcJTNtnpmyrlvZLRV][aiueo])([kcTtpR]u$)/","$1$2#",$Word);
			$Word = preg_replace("/_[kGcJTNtnpmyrlvZLRV]/","",$Word);
			
			#echo "After removal: ".Roman_to_Tamil($Word)." "."<br/>";
			
			$Word = preg_replace("/[kGcJTNtnpmyrlvZLRV]/","",$Word);
			$Word = preg_replace("/_/","",$Word);
			$Word = preg_replace("/#/","",$Word);
			$Word = preg_replace("/ /","",$Word);
			
			#echo "$".$Word."$";
			
			$LineCount += strlen(trim($Word));
			
			#echo ": Count".$LineCount."<br/>";
			
		}
			echo $LineCount." ".Roman_to_Tamil($this->TolLineClass[$LineCount])."<br/>";
		}
	}
	

	/**
	 * Displays the Line class
	 */
public function DisplayLineClass() {
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $this->ParseTreeRoot ), RecursiveIteratorIterator::SELF_FIRST );
		
		foreach ( $rit as $key => $value ) {
			
			if ($rit->hasChildren () === FALSE) {
				
				if ($key == "nE_r" || $key == "nirY")
					$val .= "<span class=\"uiTrant\">" . Roman_to_Tamil ( $value ). "</span>";
				
				if ($key == "smeta")
					$val .= "&nbsp;&nbsp;| <span class=\"ati uiTrant\">" . Roman_to_Tamil ( $this->LineType [$value] ). "</span><br/>";
			} 

			else {
				if ($rit->getDepth () == 3)
					$val .= "&nbsp;&nbsp;";
				if ($rit->getDepth () == 2)
					$val .= "<br/>";
			}
		}
		$adi_detail = $val;
		return $adi_detail;
	}
	
	/**
	 * Displays the Vaypaadu, Asai & Seer information as a Table
	 */

function Displayyappuwordclass() 
	{
		$VenpaaIndicator = $this->CheckVenpaa ( $this->ParseTreeRoot );
		
		$LastLine = FALSE;
		$VenpaaWordCntr = 0;
		$VenpaaSyllableCntr = 0;
		
$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $this->ParseTreeRoot ), RecursiveIteratorIterator::CHILD_FIRST );
		
		$WordClass = "";
		$Syllable = "";
		echo "<table border=0 CELLSPACING=15>";		
		$NewWord = TRUE;
		$NewSentence = TRUE;
		
		foreach ( $rit as $key => $value ) {
			
			if ($rit->hasChildren () === FALSE) {
				
				if ($NewSentence) {
					echo "<tr>";
					$tr = "<tr>";
				}
				
				if (in_array ( $key, $this->SyllableTypes )) {
					if ($NewWord) {
						echo "<td>";
						$td = "<td>";
					}
					
					$NewWord = FALSE;
					$NewSentence = FALSE;
					
					if ($VenpaaWordCntr == 2)
						$VenpaaSyllableCntr ++;
					echo "<span class=\"" . $key . "asai uiTrant\">" . Roman_to_Tamil ( $value ). " </span>";
					
			if ($VenpaaSyllableCntr == 2) {
						
			$Syllable = $Syllable . $tr . $td . "<span class=\"" . $key . "asai2 uiTrant\">" . Roman_to_Tamil ( "pu" ). " </span>";
				} 

			else {
						
			$Syllable = $Syllable . $tr . $td . "<span class=\"" . $key . "asai2 uiTrant\">" . Roman_to_Tamil ( $key ). " </span>";
 				 }
					
					$td = "";
					$tr = "";
				} 

				else if ($key == "meta") {
					if ($VenpaaSyllableCntr > 0)
				$WordClass = $WordClass . "<td><span class=\"uiTrant\">" . Roman_to_Tamil ( $this->VenpaaWordClass [$this->VenLastSyllable] ). "</span></td>";
					else
						$WordClass = $WordClass . "<td><span class=\"uiTrant\">" . Roman_to_Tamil ( $value ). "</span></td>";				}					
			} 

			else 

			{
				if ($key == "aTi-" . (($this->TotalLines) - 1) && $key != "")
					$LastLine = TRUE;
				
				if ($rit->getDepth () == 3) {
					
					if ($LastLine == TRUE && $VenpaaIndicator != NULL)
						$VenpaaWordCntr ++;
					
					$NewWord = TRUE;
					$Syllable = $Syllable . "</td>";
					$td = "";
				} 

				else if ($rit->getDepth () == 2) {
					
					$NewSentence = TRUE;
					$WordClass = "";
					$Syllable = "";
				}
			}
		}
		
		echo "</table>";
	}
	 
	 
	public function DisplaySyllableWordClass() 
	{
		$VenpaaIndicator = $this->CheckVenpaa ( $this->ParseTreeRoot );
		
		$LastLine = FALSE;
		$VenpaaWordCntr = 0;
		$VenpaaSyllableCntr = 0;
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $this->ParseTreeRoot ), RecursiveIteratorIterator::CHILD_FIRST );
		$WordClass = "";
		$Syllable = "";
		$val = "<table border=0 CELLSPACING=15>";
		$NewWord = TRUE;
		$NewSentence = TRUE;
		$word_tamil=array();
		foreach ( $rit as $key => $value ) {
			
			if ($rit->hasChildren () === FALSE) {
				
				if ($NewSentence) {
					$val .= "<tr>";
					$tr = "<tr>";
				}
				
				if (in_array ( $key, $this->SyllableTypes )) {
					if ($NewWord) {
						$val .= "<td>";
						$td = "<td>";
					}
					
					$NewWord = FALSE;
					$NewSentence = FALSE;
					
					if ($VenpaaWordCntr == 2)
						$VenpaaSyllableCntr ++;
					//echo "see ".$key." ".$value."<br>";
					
					$val .= "<span class=\"" . $key . "asai uiTrant \">" . Roman_to_Tamil ( $value )." /"." </span>";
					$word_tamil[]=Roman_to_Tamil ( $value );
					if ($VenpaaSyllableCntr == 2) {
						
						$Syllable = $Syllable . $tr . $td . "<span class=\"" . $key . "asai2 uiTrant\">" . Roman_to_Tamil ( "pu" ). " </span>";
					} 

					else {
						
					$Syllable = $Syllable . $tr . $td . "<span class=\"" . $key . "asai2 uiTrant\">" . Roman_to_Tamil ( $key ). " </span>";
					}
					
					$td = "";
					$tr = "";
				} 

				else if ($key == "meta") {
					
					if ($VenpaaSyllableCntr > 0)
						$WordClass = $WordClass . "<td><span class=\"uiTrant\">" . Roman_to_Tamil ( $this->VenpaaWordClass [$this->VenLastSyllable] ). "</span></td>";
					else{
						
						$WordClass = $WordClass . "<td><span class=\"uiTrant\">" . Roman_to_Tamil ( $value ). "</span></td>";
						//$NewWord = TRUE;
						
//						Yet to be modified in the array YWordtype after that print part is clear for yapparungala karigai
						//$eng=$eng."<td><span class=\"uiTrant\">" .Roman_to_Tamil($this->YWordType[$value])."</span></td>";

					}
						
				}
			} 

			else 

			{
				if ($key == "aTi-" . (($this->TotalLines) - 1) && $key != "")
					$LastLine = TRUE;
				
				if ($rit->getDepth () == 3) {
					$val .= "</td>";
					
					if ($LastLine == TRUE && $VenpaaIndicator != NULL)
						$VenpaaWordCntr ++;
					
					$NewWord = TRUE;
					$Syllable = $Syllable . "</td>";
					$td = "";
				} 

				else if ($rit->getDepth () == 2) {
					$val .= "</tr>";
					$val .= $Syllable . "<tr><span class=\"vaypatu uiTrant\">" . $WordClass . "</span></tr>";
					//$connection = mysqli_connect("localhost","root","","ods_db");
					//mysqli_set_charset($connection,"utf8");
					//$query=mysqli_query($connection, "SELECT `C` FROM `word` ");
					//$val .= $eng;
					$NewSentence = TRUE;
					$WordClass = "";
					$Syllable = "";
					//$eng="";
				}
			}
		}
		
		$val .= "</table>";
		$asai_detail = $val;
		return $asai_detail; 
	}
	
	public function seeronly()
	{
		$VenpaaIndicator = $this->CheckVenpaa ( $this->ParseTreeRoot );
		$LastLine = FALSE;
		$VenpaaWordCntr = 0;
		$VenpaaSyllableCntr = 0;
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ( $this->ParseTreeRoot ), RecursiveIteratorIterator::CHILD_FIRST );
		$WordClass = "";
		$Syllable = "";
		$val = "";
		$NewWord = TRUE;
		$NewSentence = TRUE;
		$word_tamil=array();
		foreach ( $rit as $key => $value ) {
			
			if ($rit->hasChildren () === FALSE) {
				
				if ($NewSentence) {
					$val .= "";
					$tr = "<tr>";
				}
				
				if (in_array ( $key, $this->SyllableTypes )) {
					if ($NewWord) {
						$val .= "";
						$td = "<td>";
					}
					
					$NewWord = FALSE;
					$NewSentence = FALSE;
					
					if ($VenpaaWordCntr == 2)
						$VenpaaSyllableCntr ++;
					//echo "see ".$key." ".$value."<br>";
					
					$val .= "";
					$word_tamil[]=Roman_to_Tamil ( $value );
					if ($VenpaaSyllableCntr == 2) {
						
						$Syllable = $Syllable .Roman_to_Tamil ( "pu" )." ";
					} 

					else {
						
					$Syllable = $Syllable.Roman_to_Tamil ( $key )." ";
					}
					
					$td = "";
					$tr = "";
				} 

				else if ($key == "meta") {
					
					if ($VenpaaSyllableCntr > 0)
						$WordClass = $WordClass . "<td><span class=\"uiTrant\">" . Roman_to_Tamil ( $this->VenpaaWordClass [$this->VenLastSyllable] ). "</span></td>";
					else{
						
						$WordClass = $WordClass . "<td><span class=\"uiTrant\">" . Roman_to_Tamil ( $value ). "</span></td>";
						//$NewWord = TRUE;
						
//						Yet to be modified in the array YWordtype after that print part is clear for yapparungala karigai
						//$eng=$eng."<td><span class=\"uiTrant\">" .Roman_to_Tamil($this->YWordType[$value])."</span></td>";

					}
						
				}
			} 

			else 

			{
				if ($key == "aTi-" . (($this->TotalLines) - 1) && $key != "")
					$LastLine = TRUE;
				
				if ($rit->getDepth () == 3) {
					$val .= "";
					
					if ($LastLine == TRUE && $VenpaaIndicator != NULL)
						$VenpaaWordCntr ++;
					
					$NewWord = TRUE;
					$Syllable = $Syllable . "";
					$td = "";
				} 

				else if ($rit->getDepth () == 2) {
					$val .= "";
					$val .= $Syllable . "";
					//$connection = mysqli_connect("localhost","root","","ods_db");
					//mysqli_set_charset($connection,"utf8");
					//$query=mysqli_query($connection, "SELECT `C` FROM `word` ");
					//$val .= $eng;
					$NewSentence = TRUE;
					$WordClass = "";
					$Syllable = "";
					//$eng="";
				}
			}
		}
		
		$val .= "";
		$asai_detail = $val;
		return $asai_detail; 
	
	}
	// # Displaying Errors occured on Checking with Venpa Rules
	public function displayError($verseError) {
		echo "<table order=0 CELLSPACING=20>";
		
		echo "<tr>";
		echo "<td> <big><b> விதி  </b></big> </td>";
		echo "<td> <big><b> பொருத்தம் </b></big> </td>";
		echo "</tr>";
		
		foreach ( $verseError as $rules => $results ) {
			
			echo "<tr>";
			echo "<td>" . $results [0] . "</td>";
			
			if (isset ( $results [1] ))
				echo "<td><div class=\"wrong\">" . $results [1] . "</div></td>";
			else
				echo "<td> <div class=\"right\"> பொருந்துகிறது </div> </td>";
		}
		
		echo "</table>";
		
		if ($this->VenpaaTypeExpl != "")
			echo "<hr/>";
		
		echo "<p>" . $this->VenpaaTypeExpl . "</p>";
	}

	/**
	 * Displays the todai information as a Table
	 */

	

	public function DisplayTodai($TodaiType) {
		$MonaiArray = $this->GetTodai ( $this->InputSourceText, $TodaiType );
		$ProsodyText = RemovePunctuation ( $this->InputSourceText ); // Removing
		                                                             // Punctuation
		                                                             // and
		                                                             // reformatting
		                                                             // the
		                                                             // text.
		$Lines = explode ( PHP_EOL, trim ( $ProsodyText ) );
		
		$MonaiExists = FALSE;
		
		$DivTag = <<<CWS

<div class="ui-state-highlight ui-corner-all"
	style="margin-top: 5px; padding: 0 .7em;">
<p><span class="ui-icon ui-icon-info"
	style="float: left; margin-right: .3em;"></span>

CWS;
		
		$val .= $DivTag;
		$val .= "<span class=\"uiTran\">" . Roman_to_Tamil ( "cI_r " . $TodaiType ). "</span>";
		$val .= "</div><br/>";
		
		$val .=$Ornament [] = $this->DisplayTodaiElements ( $MonaiArray, $Lines, $TodaiType, "Line" );
		
		$val .= $DivTag;
		$val .= "<span class=\"uiTran\">" . Roman_to_Tamil ( "_aTi " . $TodaiType ) . "</span>";
		$val .= "</div><br/>";
		
		$FeetLine = "";
		
		foreach ( $Lines as $Line ) {
			$FeetWords = explode ( " ", $Line );
			
			$FeetLine .= $FeetWords [0] . " ";
		}
		
		$FeetTodai = $this->GetTodai ( $FeetLine, $TodaiType );
		
		$val .=$Ornament [] = $this->DisplayTodaiElements ( $FeetTodai, $Lines, $TodaiType, NULL );
		
		return $val;
	}

	/**
	 * Displays the Todai sub elementinformation as a Table
	 */

	public function DisplayTodaiElements($TodaiArray, $Lines, $TodaiType, $TodaiClass) {
		$TodadiPatternName = array (
				"12" => "_iNY",
				"13" => "poZi_ppu",
				"14" => "_orU_u",
				"123" => "kUZY",
				"134" => "mE_RkatuvA_y",
				"124" => "kI_Z_kkatuvA_y",
				"1234" => "mu_RRu" 
		);
		
		$TodaiExists = FALSE;
		
		$Ornament = array ();
		
		for($LineIndex = 0; $LineIndex < count ( $TodaiArray ); $LineIndex ++) {
			
			if ($TodaiClass == "Line") {
				$val .= "<em><span class=\"uiTran\">" . "அடி". "</span> </em>" . ($LineIndex + 1) . " | ";
				$val .= "<span class=\"todailine uiTrant\">";
				$val .= Roman_to_Tamil ( $Lines [$LineIndex] );
				$val .= "</span>" . "<br/><br/>";
			}
			
			$TodaiLine = $TodaiArray [$LineIndex];
			
			$LineWordCount = count ( explode ( " ", trim ( $Lines [$LineIndex] ) ) );
			
			foreach ( $TodaiLine as $TodaiSeer ) {
				if (count ( $TodaiSeer ) > 1) {
					$TodaiExists = true;
					
					for($TodaiIndex = 0; $TodaiIndex < count ( $TodaiSeer ); $TodaiIndex ++) {
						foreach ( $TodaiSeer [$TodaiIndex] as $Index => $Word )
							;
						{
							
							$val .= "<span class=\"todaiindex\">";
							$val .= ($Index + 1) . " ";
							$val .= "</span>";
							
							$TodaiPattern = $TodaiPattern . ($Index + 1);
							
							if ($TodaiType == "mOVY") {
								//$val .=$Ornament [$LineIndex] [0] [$Index] = Roman_to_Tamil ( $Word );
								
								$val .= "<span class=\"todaiword uiTrant\">";
								$val .= Roman_to_Tamil ( substr ( $Word, 0, 2 ) );
								$val .= "</span>";
								$val .= "<span class=\"uiTrant\">" . Roman_to_Tamil ( substr ( $Word, 2 ) ). "</span>" . " ";
							}
							
							if ($TodaiType == "_etukY") {
								
								$val .=$Ornament [$LineIndex] [0] [$Index] = Roman_to_Tamil ( $Word );
								
								$val .= "<span class=\"uiTrant\">" . Roman_to_Tamil ( substr ( $Word, 0, 2 ) ) . "</span>";
								$val .= "<span class=\"todaiword uiTrant\">";
								$val .= Roman_to_Tamil ( substr ( $Word, 2, 2 ) );
								$val .= "</span>";
								$val .= "<span class=\"uiTrant\">" . Roman_to_Tamil ( substr ( $Word, 4 ) ). "</span>" . " ";
							}
							
							if ($TodaiType == "_iyYpu") {
								//$val .=$Ornament [$LineIndex] [0] [$Index] = Roman_to_Tamil ( $Word );
								$Word = trim($Word);
								$val .= "<span class=\"uiTrant\">" . Roman_to_Tamil ( substr ( $Word, 0,-2 )) . "</span>";
								$val .= "<span class=\"todaiword uiTrant\">";
								$val .= Roman_to_Tamil ( substr ( $Word,-2 ) );
								$val .= "</span>"." ";
								
							}

						}
					}
					
					$val .= "<span class=\"todaipattern uiTrant\">";
					
					if ($TodadiPatternName [$TodaiPattern] != "" && $TodaiClass == "Line" && $LineWordCount == 4) {
						$val .= " | " . Roman_to_Tamil ( $TodadiPatternName [$TodaiPattern] . " " . $TodaiType );
						
						$val .=$Ornament [$LineIndex] [1] = Roman_to_Tamil ( $TodadiPatternName [$TodaiPattern] . " " . $TodaiType );
					}
					
					$val .= "</span>";
					$val .= "<br/>";
					$TodaiPattern = "";
				}
			}
			if (! $TodaiExists) {
				$val .= "<span class=\"uiTran\">" . Roman_to_Tamil ( $TodaiType ). "</span> " . "<span class=\"uiTran\">" .  "இல்லை". "</span></br/>";
			}
			
			$TodaiExists = FALSE;
			$val .= "<br/>";
		}
		
		return $val;
	}



	public function CheckLineWordCount($LineCount, $WordCount) {
		$ProsodyLineTypes = $this->LineClass;
		
		$LineClassCheck = TRUE;
		
		foreach ( $ProsodyLineTypes as $ProsodyLineClass )
			if ($ProsodyLineClass != $this->LineType [$WordCount])
				$LineClassCheck = FALSE;
		
		if ($this->TotalLines != $LineCount)
			$LineClassCheck = FALSE;
		
		return $LineClassCheck;
	}
	
	public function GetTodai($ProsodyText, $TodaiType) {
		$ProsodyText = RemovePunctuation ( $ProsodyText ); // Removing Punctuation
		                                                   // and
		                                                   // reformatting the
		                                                   // text.
		$Lines = explode ( PHP_EOL, trim ( $ProsodyText ) ); // Seperating the
		                                                     // lines of the
		                                                     // text.
		
		$TodaiLineIndex = array ();
		
		$TodaiList = array ();
		
		/*
		 * Compare each word in a line, with the rest of the words if words
		 * match, place them in an array iterate again with the next word skip
		 * already matched words
		 */
		
		foreach ( $Lines as $Line ) {
			$Words = explode ( " ", $Line );
			
			$TodaiWordIndex = array ();
			
			$TodaiIndex = array ();
			
			$TodaiIndex [] = array (
					0 => $Words [0] 
			);
			
			for($NewIndex = 1; $NewIndex < count ( $Words ); $NewIndex ++) {
				if ($TodaiType == "mOVY")
					$TodaiCheck = $this->CheckMonai ( $Words [0], $Words [$NewIndex] );
				if ($TodaiType == "_etukY")
					$TodaiCheck = $this->CheckEtukai ( $Words [0], $Words [$NewIndex] );
				if ($TodaiType == "_iyYpu")
					$TodaiCheck = $this->CheckIyaipu ( $Words [0], $Words [$NewIndex] );

				
				if ($TodaiCheck) {
					$TodaiIndex [] = array (
							$NewIndex => $Words [$NewIndex] 
					);
					$TodaiList [] = $NewIndex;
				}
			}
			
			$TodaiWordIndex [] = $TodaiIndex;
			
			$TodaiLineIndex [] = $TodaiWordIndex;
			$TodaiList = array ();
		}
		
		return $TodaiLineIndex;
	}
	
	public function CheckMonai($FirstWord, $SecondWord) 

	{
		$MonaiAksharaVow = array ();
		
		// Monai Equivalents
		
		$MonaiAksharaVow [] = array (
				"a",
				"A",
				"Y",
				"W" 
		);
		$MonaiAksharaVow [] = array (
				"i",
				"I",
				"e",
				"E" 
		);
		$MonaiAksharaVow [] = array (
				"u",
				"U",
				"o",
				"O" 
		);
		
		$MonaiAksharaCons [] = array (
				"J",
				"n" 
		);
		$MonaiAksharaCons [] = array (
				"m",
				"v" 
		);
		$MonaiAksharaCons [] = array (
				"t",
				"c" 
		);
		
		$MonaiFirstLtr = FALSE;
		$MonaiSecondLtr = FALSE;
		
		// Compare First Letter
		
		if (substr ( $FirstWord, 0, 1 ) == substr ( $SecondWord, 0, 1 )) 

		{
			$MonaiFirstLtr = TRUE;
		} 

		else {
			foreach ( $MonaiAksharaCons as $Monai ) {
				if (in_array ( substr ( $FirstWord, 0, 1 ), $Monai ) && in_array ( substr ( $SecondWord, 0, 1 ), $Monai ))
					$MonaiFirstLtr = TRUE;
			}
		}
		
		// if first letter matches, then compare second letter
		
		if ($MonaiFirstLtr) {
			foreach ( $MonaiAksharaVow as $Monai ) {
				if (in_array ( substr ( $FirstWord, 1, 1 ), $Monai ) && in_array ( substr ( $SecondWord, 1, 1 ), $Monai )) {
					$MonaiSecondLtr = TRUE;
				}
			}
		}
		
		return $MonaiSecondLtr;
	}
	
	public function CheckEtukai($FirstWord, $SecondWord) 

	{
		$EtukaiLetterCheck = FALSE;
		
		$LongVowels = array (
				"A",
				"I",
				"U",
				"E",
				"O",
				"W",
				"Y" 
		);
		$ShortVowels = array (
				"a",
				"i",
				"u",
				"e",
				"o" 
		);
		
		$FirstWordInit = substr ( $FirstWord, 1, 1 );
		$SecondWordInit = substr ( $SecondWord, 1, 1 );
		
		$FirstWordSuff = substr ( $FirstWord, 2, 2 );
		$SecondWordSuff = substr ( $SecondWord, 2, 2 );
		
		$InLongVowels = (in_array ( $FirstWordInit, $LongVowels ) && in_array ( $SecondWordInit, $LongVowels ));
		$InShortVowels = (in_array ( $FirstWordInit, $ShortVowels ) && in_array ( $SecondWordInit, $ShortVowels ));
		
		$VowelLengthCheck = $InLongVowels || $InShortVowels;
		
		if (substr ( $FirstWordSuff, 0, 1 ) == "_" || substr ( $SecondWordSuff, 0, 1 ) == "_") {
			
			if ($FirstWordSuff == $SecondWordSuff) {
				$EtukaiLetterCheck = TRUE;
			}
		} 

		else 

		{
			if (substr ( $FirstWordSuff, 0, 1 ) == substr ( $SecondWordSuff, 0, 1 ))
				$EtukaiLetterCheck = TRUE;
		}
		
		$EtukaiCheck = $VowelLengthCheck && $EtukaiLetterCheck;
		
		return $EtukaiCheck;
	}
		
	public function CheckIyaipu($FirstWord, $SecondWord) 
	
	{

	if(substr ( trim($FirstWord), -2) == substr ( trim($SecondWord), -2 ))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	
	}
	
public function recheck($text)
	{
	//return $text;
	$uyir_yeluthu = array('_a', '_A','_i', '_I','_u','_U','_e','_E','_Y','_o','_O','_W');
		$Lines = explode ( "<br>", trim ( $text) );
		//return (count($Lines));
		foreach($Lines as $line)
		{
			
			$word[] = explode(" ",$line);	
			
		}
		//return $word;
		//for checking adi_wise
		$tot_lines = count($word);
		$last_line = $tot_lines - 1;
		for($a=0;$a<$tot_lines;$a++)
			{
				
				$ati[$a] = RemovePunctuation(str_replace("-"," ",$word[$a]));
				
			}
		//return $ati[0];	
		//for checking last adi vaipattu_wise
		foreach($ati[$last_line] as $at_words)
			{
				
				$a_words[] = $at_words;
				
			}
		//return $a_words;	
		$t_a_words = count($a_words);
		//return $t_a_words;
		$a_l_word = $a_words[$t_a_words -1];
		$a_l_w_syllable[] = $this->GetTextSyllablePattern($a_l_word);
		//return $a_l_w_syllable;
		//checking syllkable keys only ner,niry,nerpu and nirypu 
		$rit = new RecursiveIteratorIterator ( new RecursiveArrayIterator ($a_l_w_syllable), RecursiveIteratorIterator::LEAVES_ONLY );
		foreach ( $rit as $key => $value ) 
			{
				
			 	$a_w_keys[] = $key;  	
				
			}
			
		foreach ( $rit as $key => $value ) 
			{
				
			 	$a_w_values[] = $value;  	
				
			}
		//return $a_w_values;
		//return count($a_w_keys);
		if($t_a_words == 3)
		{
		if(count($a_w_keys) == 3)
				{
					//return $a_w_keys[0];
					if(in_array($a_w_keys[0],$this->SyllableTypes)) 
					{
						
						return $a_words;
						
					}
					else
					{
						return $a_l_word;
					}
				}
			else
				{
					for($i=0;$i<$t_a_words;$i++)
					{
						
						
						if($i == $t_a_words-2 )
							{
							//return $a_w_values[0];	
							$f_adi[] = $a_words[$i].$a_w_values[0];
								
							}
							else
							{
							$f_adi[] = str_replace($a_w_values[0],"",$a_words[$i]);	
								
							}
							
					}
					
					$f_atis = array_merge($ati[0],$f_adi);
					$t_f_atis = count($f_atis);
					$i=0;
					foreach($f_atis as $f_atis1)
						{
							$f_l_ati .= Roman_to_Tamil($f_atis1)." ";
							if($i == 4)
								{
									
									$f_l_ati .= "<br>";
									
								}
								
							
							$i++;
						}
						
					return $f_l_ati;
				}	
				
				
				
			}	
		return $a_w_keys;
		//return $word;
		$keys = array_keys($word);
		foreach($keys as $key)
			{
				
			foreach($word[$key] as $m_word)
				
				{
					
					$m_word = str_replace("-"," ",$m_word);
					$words_given[] = RemovePunctuation($m_word);
									
				}
			
			
			
			}
			//return $words_given;
			foreach($words_given as $word)
			
				{
				
					$words[] = explode(" ",$word);
				
				
				}
				//return $words;
				$tot = count($words);
				
			for($i=0;$i<$tot;$i++)
			{
				$tot1 = count($words[$i]);
				for($j=0;$j<$tot1;$j++)
				{	
				$given_words[] =  str_replace(",","",$words[$i][$j]);
				
				}
			}
			//return $given_words;
			$total_words = count($given_words);
			for($i=0;$i<$total_words;$i++)
				{
					
					$words_given1 .=$given_words[$i]." ";
					
				}
			//return $words_given1;
			$get_syllable[] = $this->GetTextSyllablePattern(Tamil_to_Roman($words_given1));
			$syllable_name = $this->GetWordBond($get_syllable);
			//return $get_syllable;
			foreach($syllable_name as $syllable)
				{
				
				
				
					//$thalias[] = $syllable['word2'];	
					
					
					if(($syllable['bond'] != "இயற்சீர் வெண்டளை") && ($syllable['bond'] != "வெண்சீர் வெண்டளை"))
					
					{
						//return "hai";
						$word1 = $syllable['word1'];	
						$word2 = $syllable['word2'];
						$mis_thalai_word1 = $word1." ".$word2;
						$mis_thalai_word[] =str_replace("/","",$mis_thalai_word1);
						
					}
					else
					{
						
						//return $text;
						
						
					}
									
				
				
				}
			//return $mis_thalai_word;
			//return Roman_to_Tamil($mis_thalai_word);
			//return $given_words;
			/*foreach($given_words as $words1)
			{
			$given_words_encode[] = Tamil_to_Roman($words1);
			}*/
			//return $given_words;
			//return $mis_thalai_word;
			//for replacing the joined words to set rule
			foreach($mis_thalai_word as $thalai_word)
			{
			$joined_word = $this->exactjoin($thalai_word);
			
			
			
			if($joined_word != "")
			{
				//return "hai";	
			$forcheck_word  = explode(" ",$thalai_word);
			//return $forcheck_word[0]; 
			//return str_replace("Q","Y",$forcheck_word[0]);
			$key = array_search(str_replace("Q","Y",$forcheck_word[0]),$given_words);
			$replacement = array($key =>$joined_word,$key+1 =>"");
			$f_sentence1 = array_replace($given_words,$replacement);
			$del_key = array_search("",$f_sentence1);
			unset($f_sentence1[$del_key]); 
			
			}
			break;
				
				
				
			}
			//formming KURAL VENPAA
			$i=0;
			foreach($f_sentence1 as $r1_sentence)
			{
				
				$r_sentence .= Roman_to_Tamil($r1_sentence)." ";
				
				
				if($i==3)
				{
				$r_sentence .= "<br>";	
					
				}
				
				
				
				
				$i++;
				
			}			
			//return $r_sentence;
			$chk_line = explode("<br>",$r_sentence);
			//return $chk_line;
			if(count($chk_line) < 3)
			{
				return $chk_lines[0];
				$chk_words1 = explode(" ",$chk_lines[0]);
				$chk_words2 = explode(" ",$chk_lines[1]);
				
				if((count($chk_words) == 4) && (count($chk_words2) == 3))
					{
						
					return $text = $this->recheck($r_sentence);		
						
					}	
				
	
	
	
	
	}
	}


	

}

// Class declaration over
function RemovePunctuation($text) 

{
	$punct = array (
			"-",
			"!",
			";",
			"?",
			".",
			"(",
			"\,",
			"\'",
			":",
			"\"",
			"–",
			")",
			"[",
			"]",
			","
	);
	
	foreach ( $punct as $p )
		$text = str_replace ( $p, "", $text );
	
	$text = preg_replace ( '/  */', ' ', $text );
	
	return $text;
}

/*
new included function from trans 
*/
function Roman_to_Tamil($text)
{

$tameng=array(
'அ' => '_a',
'ஆ' => '_A',
'இ' => '_i',
'ஈ' => '_I',
'உ' => '_u',
'ஊ' => '_U',
'எ' => '_e',
'ஏ' => '_E',
'ஐ' => '_Y',
'ஒ' => '_o',
'ஓ' => '_O',
'ஔ' => '_W',
'க' => 'k',
'ங' => 'G',
'ச' => 'c',
'ஜ' => 'j',
'ஞ' => 'J',
'ட' => 'T',
'ண' => 'N',
'த' => 't',
'ந' => 'n',
'ன' => 'V',
'ப' => 'p',
'ம' => 'm',
'ய' => 'y',
'ர' => 'r',
'ற' => 'R',
'ல' => 'l',
'ள'=> 'L',
'ழ' => 'Z',
'வ' => 'v',
'ஶ' => 'F',
'ஷ' => 'S',
'ஸ' => 's',
'ஹ' => 'h',
'ா' => 'A',
'ி' => 'i',
'ீ' => 'I',
'ு' => 'u',
'ூ' => 'U',
'ெ' => 'e',
'ே' => 'E',
'ை' => 'Y',
'ொ' => 'o',
'ோ' => 'O',
'ௌ' => 'W',
'ஃ' => '_K',
);

//return($text);

$text=preg_replace('/_([kGcJTNtnpmyrlvZLRVjSsh])/','$1்',$text);


foreach($tameng as $key=>$value)
{
	$text=str_replace($value,$key,$text);
}

$text=str_replace(array("a","B","Q"),array("","ௌ","ை"),$text);
$text=str_replace("_","",$text);

return($text);

}

/*Roman_to_Tamil over now begins Tamil_to_Roman*/
function Tamil_to_Roman($text)
{

$tameng=array(
'அ' => '_a',
'ஆ' => '_A',
'இ' => '_i',
'ஈ' => '_I',
'உ' => '_u',
'ஊ' => '_U',
'எ' => '_e',
'ஏ' => '_E',
'ஐ' => '_Y',
'ஒ' => '_o',
'ஓ' => '_O',
'ஔ' => '_W',
'க' => 'k',
'ங' => 'G',
'ச' => 'c',
'ஜ' => 'j',
'ஞ' => 'J',
'ட' => 'T',
'ண' => 'N',
'த' => 't',
'ந' => 'n',
'ன' => 'V',
'ப' => 'p',
'ம' => 'm',
'ய' => 'y',
'ர' => 'r',
'ற' => 'R',
'ல' => 'l',
'ள'=> 'L',
'ழ' => 'Z',
'வ' => 'v',
'ஶ' => 'F',
'ஷ' => 'S',
'ஸ' => 's',
'ஹ' => 'h',
'ா' => 'A',
'ி' => 'i',
'ீ' => 'I',
'ு' => 'u',
'ூ' => 'U',
'ெ' => 'e',
'ே' => 'E',
'ை' => 'Y',
'ொ' => 'o',
'ோ' => 'O',
'ௌ' => 'W',
'்' => 'X',
'ஃ' => '_K'
);

foreach($tameng as $key=>$value)
{
	$text=str_replace($key,$value,$text); 
}
//print_r();
$text=preg_replace('/([kGcJTNtnpmyrlvZLRVjSsh])X/','_$1',$text);

$text=preg_replace('/(?<!_)([kGcJTNtnpmyrlvZLRVjSsh])(?![aAiIuUeEoOYW])/','$1a',$text);

$text = preg_replace('/(_[kGcJTNtnpmyrlvZLRVjSsh])(_[aAiIuUeEoOYW])/','$1_$2',$text);

return($text);

}
function lat2tam($text)
{

$tameng=array(
'அ' => '_a',
'ஆ' => '_A',
'இ' => '_i',
'ஈ' => '_I',
'உ' => '_u',
'ஊ' => '_U',
'எ' => '_e',
'ஏ' => '_E',
'ஐ' => '_Y',
'ஒ' => '_o',
'ஓ' => '_O',
'ஔ' => '_W',
'க' => 'k',
'ங' => 'G',
'ச' => 'c',
'ஜ' => 'j',
'ஞ' => 'J',
'ட' => 'T',
'ண' => 'N',
'த' => 't',
'ந' => 'n',
'ன' => 'V',
'ப' => 'p',
'ம' => 'm',
'ய' => 'y',
'ர' => 'r',
'ற' => 'R',
'ல' => 'l',
'ள'=> 'L',
'ழ' => 'Z',
'வ' => 'v',
'ஶ' => 'F',
'ஷ' => 'S',
'ஸ' => 's',
'ஹ' => 'h',
'ா' => 'A',
'ி' => 'i',
'ீ' => 'I',
'ு' => 'u',
'ூ' => 'U',
'ெ' => 'e',
'ே' => 'E',
'ை' => 'Y',
'ொ' => 'o',
'ோ' => 'O',
'ௌ' => 'W',
'ஃ' => '_K',
);

//return($text);

$text=preg_replace('/_([kGcJTNtnpmyrlvZLRVjSsh])/','$1்',$text);


foreach($tameng as $key=>$value)
{
	$text=str_replace($value,$key,$text);
}

$text=str_replace(array("a","B","Q"),array("","ௌ","ை"),$text);
$text=str_replace("_","",$text);

return($text);

}
/*$data=new Yappuanalyzer();
$c=$data->CheckAsiriyaInam();
print_r($c);*/
?>