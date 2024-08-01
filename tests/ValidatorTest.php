<?php

use PHPUnit\Framework\TestCase;
use UniqueValidator\Validator;

class ValidatorTest extends TestCase
{
    public function testIsPalindrome()
    {
        $this->assertTrue(Validator::isPalindrome('A man, a plan, a canal, Panama'));
        $this->assertFalse(Validator::isPalindrome('Hello, World'));
    }

    public function testIsIsogram()
    {
        $this->assertTrue(Validator::isIsogram('Dermatoglyphics'));
        $this->assertFalse(Validator::isIsogram('Hello'));
    }

    public function testIsAnagram()
    {
        $this->assertTrue(Validator::isAnagram('listen', 'silent'));
        $this->assertFalse(Validator::isAnagram('hello', 'world'));
    }
}
