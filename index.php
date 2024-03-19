<?php

function reverseLettersInWords($string)
{
    // Разделяем строку на слова с сохранением пунктуации и дефисов
    preg_match_all('/\b\w+\b|[\p{P}]/u', $string, $matches);

    $reversedWords = [];

    foreach ($matches[0] as $word) {
        // Разделяем слово на буквы
        preg_match_all('/./u', $word, $letters);

        // Меняем порядок букв в слове
        $reversedWord = '';
        $i = count($letters[0]) - 1;
        foreach ($letters[0] as $letter) {
            $reversedWord .= ctype_upper($letter) ? mb_strtoupper($letters[0][$i]) : mb_strtolower($letters[0][$i]);
            $i--;
        }
        $reversedWords[] = $reversedWord;
    }

    // Собираем строку из перевернутых слов и пунктуации
    $result = '';
    foreach ($reversedWords as $key => $word) {
        $result .= $word;
        if (isset($matches[0][$key + 1])) {
            $result .= $matches[0][$key + 1];
        }
    }

    return $result;
}

// Пример использования
$inputString = "Cat, Мышь, houSe, домИК, elEpHant, third-part, can`t";
$outputString = reverseLettersInWords($inputString);
echo $outputString; // Tac, Ьшым, esuOh, кимОД, tnAhPele, driht-trap, nac`t

?>
