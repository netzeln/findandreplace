<?php
	 class WordReplace
		{
		private $string;
		private $word;
		private $replacement;

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


	}
 ?>
