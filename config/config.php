<?php

use Core\Contracts\RouterInterface;
use Core\Services\Routing\RouterFactory;

return [
    'services' => [
        RouterInterface::class => RouterFactory::class,
    ],
];