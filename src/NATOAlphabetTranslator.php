<?php

class NATOAlphabetTranslator {

	private $translationAlphabet = array(
		'a' => 'Alpha',
		'b' => 'Bravo',
		'c' => 'Charlie',
		'd' => 'Delta',
		'e' => 'Echo',
		'f' => 'Foxtrot',
		'g' => 'Golf',
		'h' => 'Hotel',
		'i' => 'India',
		'j' => 'Juliet',
		'k' => 'Kilo',
		'l' => 'Lima',
		'm' => 'Mike',
		'n' => 'November',
		'o' => 'Oscar',
		'p' => 'Papa',
		'q' => 'Quebec',
		'r' => 'Romeo',
		's' => 'Sierra',
		't' => 'Tango',
		'u' => 'Uniform',
		'v' => 'Victor',
		'w' => 'Whiskey',
		'x' => 'X-ray',
		'y' => 'Yankee',
		'z' => 'Zulu',
		'0' => 'Zero',
		'1' => 'One',
		'2' => 'Two',
		'3' => 'Three',
		'4' => 'Four',
		'5' => 'Five',
		'6' => 'Six',
		'7' => 'Seven',
		'8' => 'Eight',
		'9' => 'Nine',
		'-' => '[dash]',
		'.' => '[dot]',
		' ' => '[space]'
	); //English to NATO Phonetic translation alphabet

	function translateToICAO($str) {
		$nato = [];
		foreach (str_split($str) as $char) {
			$tr = isset($this->translationAlphabet[strtolower($char)]) ? $this->translationAlphabet[strtolower($char)] : $char;
			array_push($nato,  ctype_upper($char) ? $tr : strtolower($tr));
		}
		return implode(" ", $nato);
	}
}
