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
                    $ucword = ucfirst($word);

                    if ( !strcmp($ucword[1],'\'') ) {
                        $res = $ucword[2];
                        $ucword[2] = strtoupper($res);
                        // echo "word-char2 is:" . $word[2] . "word is:" . $word;
                    }

                    array_push($output_titlecased, $ucword);
                    // echo "word has been upper cased and pushed into the array" . $ucword;
                } else {
                    array_push($output_titlecased, $word);
                }


            }

            $var = ucfirst($input_array_of_words[0]);
            $output_titlecased[0] = $var;
            // echo "Output is:" . $output_titlecased[0];

            return implode(" ", $output_titlecased);

        }
    }

?>
