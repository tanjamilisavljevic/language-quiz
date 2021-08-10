<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $word;
    public string $translation;

    public function __construct(string $frenchWord, string $translation)
    {
        $this->word = $frenchWord;
        $this->translation = $translation;
    }


    public function verify(string $userAnswer) : bool
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one

        if ($userAnswer == $this->translation)
        {
            return true;
        }
        else
        {
            return false;
        }

        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }

}