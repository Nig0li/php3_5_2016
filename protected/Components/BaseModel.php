<?php

namespace App\Components;

use App\Models\User;
use T4\Orm\Model;

class BaseModel
    extends Model
{
    public function getFullName()
    {
        $class = new User();
        $reflector = new \ReflectionMethod($class, 'getFullName');
        $doc = $reflector->getDocComment();

        $annotation = strstr($doc, '$');
        $trimAnnotation = strstr($annotation, '"', true);
        $var = explode(' ', $trimAnnotation);
        $mass = [];
        foreach ($var as $el) {
            $mass[] = substr($el, 1);
        }
        $a = $mass[0];
        $b = $mass[1];
        $res = $this->$a . ' ' . $this->$b;
        return $res;
    }

}