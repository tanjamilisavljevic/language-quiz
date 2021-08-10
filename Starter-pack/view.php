<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>
<body>
<!-- TODO: add a form for the user to play the game -->

<form method="get" action="./">

    <p class="chosenWord"> The word to translate: <?= $game->chosenWord->word ?> </p>

    <label for="userAnswer">Translation in English:</label>
    <input type="text" id="userAnswer" name="userAnswer">
    <button type="submit" name="submit">Go</button>

    <p class="answerCheck"> <?= $game->message ?> </p>

</form>

</body>
</html>