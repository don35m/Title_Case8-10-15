<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {

            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {

                if( strcmp($word, 'and') && strcmp($word, 'from')
                    && strcmp($word, 'or') && strcmp($word, 'but')
                    && strcmp($word, 'to') ) {
                    array_push($output_titlecased, ucfirst($word));
                } else {
                    array_push($output_titlecased, $word);
                }
      
            }

            return implode(" ", $output_titlecased);

        }
    }

?>
