<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../protected/boot.php';
require __DIR__ . '/../protected/autoload.php';

class MailerTest
    extends PHPUnit_Framework_TestCase
{
    public function testValidateEmail()
    {
        $class = new \App\Components\Mailer();
        $reflector = new \ReflectionMethod($class, 'validateEmail');
        $reflector->setAccessible(true);

        $this->assertEquals(true, $reflector->invoke($class, 'test@ya.ru'));
        $this->assertEquals(false, $reflector->invoke($class, 'testya.ru'));
    }
}