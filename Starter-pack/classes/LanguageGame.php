<?php

class LanguageGame
{
    private array $words;
    public Word $chosenWord;
    public string $message = '';

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $word = new Word($frenchTranslation, $englishTranslation);
            $this->words[] = $word;
        }
    }

    public function run()
    {
        // TODO: check for option A or B
        $guessSubmitted = isset($_GET["submit"]) && !empty($_GET["userAnswer"]);

        if (!$guessSubmitted) {
            $this->gameSetup();
        } else
        {
            $this->guessWasSubmitted();
        }
    }

    private function gameSetup()
    {
        $this->chosenWord = $this->words[array_rand($this->words, 1)];
        var_dump($this->chosenWord);
        $_SESSION['translation'] = serialize($this->chosenWord);

    }
    // Option A: user visits site first time (or wants a new word)
    // TODO: select a random word for the user to translate
    // Option B: user has just submitted an answer
    // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
    //TODO: use Sessions to save answer
    //TODO: use verify to get true and false and then display message based on that
    // TODO: generate a message for the user that can be shown

    private function guessWasSubmitted()
    {
        $this->chosenWord = unserialize($_SESSION['translation']);
        $userAnswer = $_GET["userAnswer"];
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first

        if ($this->chosenWord->verify($userAnswer) === true)
        {
            $this->message = "Correct! It's " . $this->chosenWord->translation . "!";
        } else
        {
            $this->message = "Wrong! It's " . $this->chosenWord->translation . "!";
        }
    }
}