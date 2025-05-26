<?php

///even or odd/////
$num = readline("Enter a number: ");
$result = "Odd";
if ($num % 2 == 0) {
    $result = "Even";
}
echo "The number is {$result}\n";

////prime or not prime/////
function isPrimeNumber($number)
{
    if ($number < 2) {
        return "{$number} is not a prime\n";
    }
    if ($number == 2) {
        return "{$number} is prime\n";
    }
    if ($number % 2 == 0) {
        return "{$number} is not prime\n";
    }

    $sqrtNumber = sqrt($number);
    for ($i = 3; $i <= $sqrtNumber; $i += 2) {
        if ($number % $i == 0) {
            return "{$number} is not prime\n";
        }
    }

    return "{$number} is prime\n";
}

$number = readline("Enter a number: ");
if (!is_numeric($number)) {
    echo "Invalid input!";
    exit(1);
}

$number = (int) $number;
for ($i = 0; $i <= $number; $i++) {
    echo isPrimeNumber($i);
}

require __DIR__ . "/vendor/autoload.php";

use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use demi\timelog\TimeLog;

$sluggify = new Slugify();
echo $slugify.slugify("This is the new sample text.");

$uuid = Uuid->uuid4();
echo $uuid.toString();

$faker = Faker\Factory->create();
echo $faker.name();
echo $faker.email();
echo $faker.text();

