<?php

	require_once 'src/WordReplace.php';

	class WordReplaceTest extends PHPUnit_Framework_TestCase
	{

		function test_findAndReplace_oneWord()
		{
		//Arrange
		$test_wordReplace = new WordReplace("cat", "cat", "dog");

		//Act
		$result = $test_wordReplace->findAndReplace();

		//Assert
		$this->assertEquals('dog', $result);
		}

		function test_findAndReplace_multipleWords()
		{
		//Arrange
		$test_wordReplace = new WordReplace("I have a cat and my cat is awesome", "cat", "dog");

		//Act
		$result = $test_wordReplace->findAndReplace();

		//Assert
		$this->assertEquals('I have a dog and my dog is awesome', $result);
		}

		function test_findAndReplace_wordLongerThan3Characters()
		{
		//Arrange
		$test_wordReplace = new WordReplace("I am a crocodilevelociraptor and I like crocodilevelociraptor", "crocodilevelociraptor", "kangaroo");

		//Act
		$result = $test_wordReplace->findAndReplace();

		//Assert
		$this->assertEquals('I am a kangaroo and I like kangaroo', $result);
		}

		function test_findAndReplace_wordWithinReplacement()
		{
			//Arrange
			$test_wordReplace = new WordReplace("I am a bee in a bee kingdom", "bee", "bumblebee");

			//Act
			$result = $test_wordReplace->findAndReplace();

			//Assert
			$this->assertEquals('I am a bumblebee in a bumblebee kingdom', $result);
		}

		function test_findAndReplace_wordWithinotherword()
		{
			//Arrange
			$test_wordReplace = new WordReplace("I catlog concatened muscats", "cat", "mouse");

			//Act
			$result = $test_wordReplace->findAndReplace();

			//Assert
			$this->assertEquals('I mouselog conmouseened musmouses', $result);
		}
	}

?>
