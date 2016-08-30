PHP NATO Alphabet Translator
=======================

This is a PHP class that translates phrases into the NATO(ICAO) Phonetic Alphabet. Fork of [justindmartin/NATO-ICAO-Alphabet-Translator](https://github.com/justindmartin/NATO-ICAO-Alphabet-Translator) but rewritten, simplified and a small bit improved :).

## Usage Example

```PHP
// initialize NATOAlphabetTranslator class
require('src/NATOAlphabetTranslator.php');
$mNATOAlphabetTranslator = new NATOAlphabetTranslator();

// translate a phrase using the NATO/ICAO alphabet
echo $mNATOAlphabetTranslator->translateToICAO("aiF9a-iqu");
> alpha india Foxtrot nine alpha [dash] india quebec uniform
```

<img src="http://upload.wikimedia.org/wikipedia/commons/e/e0/FAA_Phonetic_and_Morse_Chart2.svg"/>
