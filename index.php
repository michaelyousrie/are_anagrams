<?php

/**
 * check if two input words are anagrams (contain the exact same words)
 *
 * @param string $word1
 * @param string $word2
 * @return boolean
 */
function are_anagrams(string $word1, string $word2): bool
{
    return count_chars($word1, 1) == count_chars($word2, 1);
}

var_dump(are_anagrams('test', 'best')); // false
var_dump(are_anagrams('race', 'face')); // false
var_dump(are_anagrams('face', 'mace')); // false

var_dump(are_anagrams('program', 'grampro')); // true
var_dump(are_anagrams('acer', 'care')); // true
var_dump(are_anagrams('race', 'care')); // true
