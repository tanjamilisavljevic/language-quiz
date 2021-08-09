<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $word;
    public string $answer;

    public function __construct(string $frenchWord, string $translation)
    {
        $this->word = $frenchWord;
        $this->answer = $translation;
    }


    public function verify(string $userAnswer)
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one

        if ($userAnswer == $this->translation)
        {
            echo "Correct";
        }
        else
        {
            echo "Wrong";
        }


        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }

}