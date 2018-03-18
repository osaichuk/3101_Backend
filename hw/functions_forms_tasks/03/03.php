<?php
/*
 *  Я не знаю как сделать, что бы корректно работать с кириллицей
 */
function requestPost($key)
{
    if (isset($_POST[$key])){
        return $_POST[$key];
    }

    return null;
}

function requestFiles($key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }

    return null;
}

function isValuesValid($maxLengthWord, $file)
{
    if (empty($file) || !is_array($file)) {
        return false;
    }

    if (!isset($file['error'])) {
        return false;
    }

    $messageLenght = $messageFile = '';
    $allowedFormats = ['text/plain'];
    $textFieldsValid = !empty($maxLengthWord) && $maxLengthWord > 0;
    $fileTypeValid = in_array($file['type'], $allowedFormats);

    if (empty($maxLengthWord)){
        $messageLenght = 'fill the lenght';
    }
    if ($maxLengthWord < 0){
        $messageLenght = 'fill the correct lenght';
    }
    if (!$fileTypeValid){
        $messageFile = 'upload a file format .txt';
    }
    $result =  !$file['error'] && $fileTypeValid && $textFieldsValid;

    return ['result' => $result, 'messageLenght' => $messageLenght, 'messageFile' => $messageFile];
}

function loadFileContents($file)
{
    if (!file_exists($file)) {
        return [];
    }
    $fileContents = file_get_contents($file);

    return mb_split("\s", $fileContents);
}

function deleteWords($arr, $strLength)
{
    foreach ($arr as &$item){
        $test = trim($item, ".,?!\"'(){}[]-");
        if (mb_strlen($test) > $strLength){
            $item = '';
        }
    }

    return array_filter($arr);
}

function saveFileContents($arr, $fileName)
{
    $str = implode(' ', $arr);
    file_put_contents($fileName, $str);
}

$file = requestFiles('file');
$maxLengthWord = requestPost('length');
$message = '';
if ($_POST){
    $validation = isValuesValid($maxLengthWord, $file);
    if ($validation['result']){
        $fileName = $file['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $fileName);
        $fileContents = loadFileContents($fileName);
        $correctFileContents = deleteWords($fileContents, $maxLengthWord);
        saveFileContents($correctFileContents, $fileName);
        $message = 'Done';
    } else {
        $message = 'Form invalid';
    }

}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 03</title>
</head>
<body>
<h1>Delete words longer than ' ' characters</h1>
<h4><?=$message ?></h4>
<form method='post' enctype="multipart/form-data">
    <br><input type="number" name="length" placeholder="word length"><span> <?= isset($validation) ? $validation['messageLenght'] : null ?></span><br><br>

    <input type="file" name="file"><span> <?= isset($validation) ? $validation['messageFile'] : null ?></span> <br><br>

    <button type='submit'>Go</button>
</form>
</body>
</html>
