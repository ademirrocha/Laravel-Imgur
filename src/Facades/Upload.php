<?php

namespace Arf\Imgur\Facades;

use Illuminate\Support\Facades\Facade;

class Upload extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Arf\Imgur\Upload::class;
    }
}