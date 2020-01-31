<?php

namespace App\Service;

class CaptchaService extends BaseService
{
    public static function check($recaptcha)
    {
        $url  = 'https://www.google.com/recaptcha/api/siteverify';
        $teste = [
            'secret'   => env('CAPTCHA_SECRET_KEY'),
            'response' => $recaptcha
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($teste)
            ]
        ];

        $context = stream_context_create($options);

        return json_decode(file_get_contents($url, false, $context));
    }
}
