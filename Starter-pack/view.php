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

<form method="get">

    <p class="chosenWord"> The word to translate: <?= $game->chosenWord->word ?> </p>

    <label for="answer">Translation in English:</label>
<!--    <input type="text" id="answer" name="answer" value="--><?php //echo isset($_GET["answer"]) ? $_GET["answer"] : ''; ?><!--">-->

    <br>
    <button type="submit">Go</button>
</form>

</body>
</html>