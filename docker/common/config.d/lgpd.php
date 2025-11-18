<?php

return [
    'module.LGPD' => [
        'termsOfUsage'=>[
            'title'=> i::__('Termos e Condições de Uso'), 
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/terms-of-usage.html'),
            'buttonText' => i::__('Aceito os termos e condições de uso')
        ],
        'privacyPolicy' => [
            'title'=>  i::__('Política de Privacidade'),
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/privacy-policy.html'),
            'buttonText' => i::__('Aceito as políticas de privacidade')
        ],
        'imageOfUsage' => [
            'title'=>  i::__('Autorização de uso de imagem'),
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/image-of-usage.html'),
            'buttonText' => i::__('Autorizo o uso de imagem')
        ],
    ]
];