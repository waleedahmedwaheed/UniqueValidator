<?php

namespace UniqueValidator;

class Validator
{
    public static function isPalindrome(string $string): bool
    {
        $cleaned = strtolower(preg_replace('/\W+/', '', $string));
        return $cleaned === strrev($cleaned);
    }

    public static function isIsogram(string $string): bool
    {
        $cleaned = strtolower(preg_replace('/\W+/', '', $string));
        $letters = str_split($cleaned);
        return count($letters) === count(array_unique($letters));
    }

    public static function isAnagram(string $string1, string $string2): bool
    {
        $cleaned1 = strtolower(preg_replace('/\W+/', '', $string1));
        $cleaned2 = strtolower(preg_replace('/\W+/', '', $string2));
        return count_chars($cleaned1, 1) === count_chars($cleaned2, 1);
    }
}
