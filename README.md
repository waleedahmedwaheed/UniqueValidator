# UniqueValidator

A PHP library for unique validation rules such as palindrome, isogram, and anagram checks.

## Installation

You can install the package via Composer:

```bash
composer require waleedahmedwaheed/unique-validator
```

## Usage

### Palindrome Check

```bash
use UniqueValidator\Validator;

if (Validator::isPalindrome('A man, a plan, a canal, Panama')) {
    echo 'This is a palindrome.';
} else {
    echo 'This is not a palindrome.';
}
```

### Isogram Check

```bash
if (Validator::isIsogram('Dermatoglyphics')) {
    echo 'This is an isogram.';
} else {
    echo 'This is not an isogram.';
}
```

### Anagram Check

```bash
if (Validator::isAnagram('listen', 'silent')) {
    echo 'These are anagrams.';
} else {
    echo 'These are not anagrams.';
}
```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details