<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $lower_case_string = strtolower($input_title);
            $input_array_of_words = explode(" ", $lower_case_string);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {

                if( strcmp($word, 'and') && strcmp($word, 'from')
                    && strcmp($word, 'or') && strcmp($word, 'but')
                    && strcmp($word, 'to') && strcmp($word, 'the') ) {
                    array_push($output_titlecased, ucfirst($word));
                } else {
                    array_push($output_titlecased, $word);
                }

            }

            $output_titlecased[0] = ucfirst($input_array_of_words[0]);

            return implode(" ", $output_titlecased);

        }
    }

?>
