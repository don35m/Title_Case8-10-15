<?php

	require_once "src/TitleCaseGenerator.php";

	class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
	{

			function test_makeTitleCase_oneWord()
			{
				//Arrange
				$test_TitleCaseGenerator = new TitleCaseGenerator;
				$input = "beowulf";

				//Act
				$result = $test_TitleCaseGenerator->makeTitleCase($input);

				//Assert
				$this->assertEquals("Beowulf", $result);
			}

			function test_makeTitleCase_multipleWords()
			{
				//Arrange
				$test_TitleCaseGenerator = new TitleCaseGenerator;
				$input = "the little mermaid";

				//Act
				$result = $test_TitleCaseGenerator->makeTitleCase($input);

				//Assert
				$this->assertEquals("The Little Mermaid", $result);
			}

			function test_makeTitleCase_designatedWords()
			{
				  //Arrange
			    $test_TitleCaseGenerator = new TitleCaseGenerator;
		    	$input = "beowulf from brighton beach";

		 	    //Act
			    $result = $test_TitleCaseGenerator->makeTitleCase($input);

					//Assert
					$this->assertEquals("Beowulf from Brighton Beach", $result);

			}

			function test_makeTitleCase_firstWords()
			{
					//Arrange
					$test_TitleCaseGenerator = new TitleCaseGenerator;
					$input = "the car went to the beach";

					//Act
					$result = $test_TitleCaseGenerator->makeTitleCase($input);

					//Assert
					$this->assertEquals("The Car Went to the Beach", $result);

			}

			function test_makeTitleCase_allCaps()
			{
					//Arrange
					$test_TitleCaseGenerator = new TitleCaseGenerator;
					$input = "THE CAR WENT TO THE BEACH";

					//Act
					$result = $test_TitleCaseGenerator->makeTitleCase($input);

					//Assert
					$this->assertEquals("The Car Went to the Beach", $result);

	    }

	}

?>
