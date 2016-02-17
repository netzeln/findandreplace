<?php
	 class WordReplace
		{
		private $string;
		private $word;
		private $replacement;

		function __construct($string, $word, $replacement)
			{
					$this->string = $string;
					$this->word = $word;
					$this->replacement = $replacement;
			}

		function getString()
			{
				return $this->string;
			}

		function setString($string)
			{
				$this->string = $string;
			}

		function getWord()
			{
				return $this->word;
			}

		function setWord($word)
			{
			 	$this->word = $word;
			}

		function getReplacement()
			{
				return $this->replacement;
			}

		function setReplacement($replacement)
			{
				$this->replacement = $replacement;
			}

		function findAndReplace()
			{
				$lengthWord = strlen($this->word);
				$lengthReplacement = strlen($this->replacement);
				$newString = $this->string;
				$offset = 0;

				while(strpos($newString, $this->word, $offset) !==  FALSE)
				{
					$start = strpos($newString, $this->word, $offset);
					$newString = substr_replace($newString, $this->replacement, $start, $lengthWord);
					$offset = $start + $lengthReplacement;
				}
				return $newString;
			}

	}
 ?>
