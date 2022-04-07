<?php

namespace App\CatalyicFacades;
use Illuminate\Support\Facades\Facade;

class CatalyicHelperFacade extends Facade {
    
    protected static function getFacadeAccessor()
    {
        return 'catalyiceHelper';
    }
}
