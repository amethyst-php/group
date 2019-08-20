<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\GroupsController::class,
    'router'     => [
        'as'     => 'group.',
        'prefix' => '/groups',
    ],
];
