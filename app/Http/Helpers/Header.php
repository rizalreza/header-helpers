<?php

namespace App\Helpers;

/**
 * 
 */
class Header
{
 	public static function add_headers()
 	{
        return response()->header('Content-Type','application/json');    
 	}
}
 