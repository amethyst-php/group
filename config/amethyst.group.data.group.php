<?php

return [
    'table'      => 'group',
    'comment'    => 'Group',
    'model'      => Amethyst\Models\Group::class,
    'schema'     => Amethyst\Schemas\GroupSchema::class,
    'repository' => Amethyst\Repositories\GroupRepository::class,
    'serializer' => Amethyst\Serializers\GroupSerializer::class,
    'validator'  => Amethyst\Validators\GroupValidator::class,
    'authorizer' => Amethyst\Authorizers\GroupAuthorizer::class,
    'faker'      => Amethyst\Fakers\GroupFaker::class,
    'manager'    => Amethyst\Managers\GroupManager::class,
];
