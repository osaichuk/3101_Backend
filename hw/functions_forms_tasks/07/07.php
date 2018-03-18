<?php

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}

function createComment($author, $text)
{
    return compact('author', 'text');
}

function loadComments()
{
    if (!file_exists('comments.txt')) {
        return [];
    }
    $comments = file_get_contents('comments.txt');

    return unserialize($comments);
}

function saveComment(array $comment)
{
    $comments = loadComments();
    $comments[] = $comment;
    $comments = serialize($comments);
    file_put_contents('comments.txt', $comments);
}

function isFormValid($author, $text)
{

    $messageAuthor = $messageText = '';
    $textFieldsValid = !empty($author) && !empty($text);

    if (empty($author)){
        $messageAuthor = 'fill the author';
    }
    if (empty($text)){
        $messageText = 'fill the comment';
    }

    return ['result' => $textFieldsValid, 'messageAuthor' => $messageAuthor, 'messageText' => $messageText];
}

function redirect($to)
{
    header('Location: ' . $to);
    die;
}

$message = requestGet('message');
$author = requestPost('author');
$text = requestPost('text');
$comments = loadComments();

if ($_POST){
    $validation = isFormValid($author, $text);
    if ($validation['result']){
        $comment = createComment($author, $text);
        saveComment($comment);
        $message = 'Saved';
        redirect('/3101/Backend/hw/functions_forms_tasks/07/07.php?message=' . $message);
    }
    $message = 'Form invalid';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        ul {
            list-style-type: none;
        }
        span {
            color: red;
        }
    </style>
    <title>Guest book</title>
</head>
<body>
    <h1>Comments</h1>
    <ul>
        <?php foreach ($comments as $item): ?>
            <li><b><?=$item['author']?></b></li>
            <li><?=$item['text']?></li><br>
        <?php endforeach; ?>
    </ul>
    <h2>add new comment</h2>
    <h4><?=$message ?></h4>

<form method='post' >
    <input type="text" name="author" placeholder="author" size="30px" value="<?=$author?>"> <span><?= isset($validation) ? $validation['messageAuthor'] : null ?></span><br><br>
    <textarea name="text" placeholder="your comment" cols="50" rows="5"><?=$text?></textarea> <span><?= isset($validation) ? $validation['messageText'] : null ?></span><br><br>

    <button type='submit'>Add comment</button>
</form>


</body>
</html>