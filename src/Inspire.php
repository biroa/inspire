<?php

namespace Biroa\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt(): string
    {
        $response = Http::get('https://dummyjson.com/quotes/random');
        return $response['quote'] . ' - ' . $response['author'];
    }
}
