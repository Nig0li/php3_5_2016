<?php

namespace App\Models;

use App\Components\BaseModel;

class User
    extends BaseModel
{
    /**
     * @template "$firstName $lastName"
     */
    public function getFullName()
    {
        return parent::getFullName();
    }

}
