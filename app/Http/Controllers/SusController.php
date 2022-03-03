<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SusController extends Controller
{
    public function whoAreYou(Request $request) {
        $name = $request->get('name');
        if (!$name) {
            return response()->json([
                "message" => "Who are you?"
            ], 200);
        }
        $name = strtolower($name);

        $response_luv = base64_decode('SGV5IHlvdSwgSSBsb3ZlIHlvdSB0byB0aGUgbW9vbiBhbmQgYmFjayA8Mw==');
        $names_luv = [
            base64_decode('dGlh'),
            base64_decode('YWRyaXRpYQ=='),
            base64_decode('aWE='),
        ];

        if (in_array($name, $names_luv, true)) {
            return response()->json([
                "message" => $response_luv
            ], 200);
        } elseif ($name === 'aaron') {
            return response()->json([
                "message" => "Yes, I made this site"
            ], 200);
        } else {
            return response()->json([
                "message" => "Hello {$name}!"
            ], 200);
        }
    }
}
