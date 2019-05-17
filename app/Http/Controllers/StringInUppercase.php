<?php

namespace App\Http\Controllers;

class StringInUppercase
{
    public function capitalize($str)
    {
        return strtoupper($str);
    }
}