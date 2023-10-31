<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;


class ChatController extends Controller
{
    /*
     * @param Request $request
     * @return string
    */
    public function __invoke(Request $request): string
    {
       
  
        $openaiApiKey = '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';
        $apiUrl = 'https://api.openai.com/v1/chat/completions';

        $data = [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "system",
                    "content" => "what  is morocco "
                ]
            ]
        ];

        $data = json_encode($data);

        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $openaiApiKey,
        ]);

        $response = curl_exec($ch);

        if ($response === false) {
            echo 'cURL Error: ' . curl_error($ch);
        } else {
           return view('welcome',['x'=>$response]) ;
        }

        curl_close($ch);

    }
}