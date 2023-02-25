<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function main()
    {
        return ['abc', 123, true];
    }
}
