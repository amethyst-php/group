<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\GroupFaker;
use Amethyst\Managers\GroupManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class GroupTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = GroupManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = GroupFaker::class;
}
