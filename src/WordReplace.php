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
				$pattern = "/($this->word)/i";

				$newString = preg_replace($pattern, $this->replacement, $this->string);


			// {
			// 	$lengthWord = strlen($this->word);
			// 	$lengthReplacement = strlen($this->replacement);
			// 	$newString = $this->string;
			// 	$offset = 0;
			//
			// 	while(stripos($newString, $this->word, $offset) !==  FALSE)
			// 	{
			// 		$start = stripos($newString, $this->word, $offset);
			// 		$newString = substr_replace($newString, $this->replacement, $start, $lengthWord);
			// 		$offset = $start + $lengthReplacement;
			// 	}
				return $newString;
			}

	}
 ?>
