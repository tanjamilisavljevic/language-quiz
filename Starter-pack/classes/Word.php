<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $word;
    public string $answer;

    public function __construct(string $word, string $answer)
    {
        $this->word = $word;
        $this->answer = $answer;
    }


    public function verify()
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one
//        $word = $_GET['word'];
//        $answer = $_GET['answer'];
//        $this->words = Data::words();
//
//        $result = array_rand($this->words, 1);
//        echo $result;



        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }

}