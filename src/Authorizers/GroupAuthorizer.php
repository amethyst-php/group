<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class GroupAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array<string>
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'group.create',
        Tokens::PERMISSION_UPDATE => 'group.update',
        Tokens::PERMISSION_SHOW   => 'group.show',
        Tokens::PERMISSION_REMOVE => 'group.remove',
    ];
}
