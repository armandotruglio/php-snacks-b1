<?php

function isPalindrome($word)
{
    $len = strlen($word);

    for ($i = 0; $i < $len / 2; $i++) {
        if ($word[$i] != $word[$len - 1 - $i]) {
            return false;
        }
    }

    return true;
}
