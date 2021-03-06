<?php

namespace Amethyst\Serializers;

use Illuminate\Support\Collection;
use Railken\Lem\Contracts\EntityContract;
use Railken\Lem\Serializer;

class GroupSerializer extends Serializer
{
    /**
     * Serialize entity.
     *
     * @param \Railken\Lem\Contracts\EntityContract  $entity
     * @param \Illuminate\Support\Collection<string> $select
     *
     * @return \Railken\Bag<mixed>
     */
    public function serialize(EntityContract $entity, Collection $select = null)
    {
        $bag = parent::serialize($entity, $select);

        // ...

        return $bag;
    }
}
