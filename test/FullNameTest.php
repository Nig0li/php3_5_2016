<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../protected/boot.php';
require __DIR__ . '/../protected/autoload.php';

class FullNameTest
    extends PHPUnit_Framework_TestCase
{
    public function testFullName()
    {
        $user = new \App\Models\User(['firstName' => 'Иван', 'lastName' => 'Иванов']);

        $this->assertEquals('Иван Иванов', $user->getFullName());
    }
}