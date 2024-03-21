<?php

namespace Rickygomez\KnowledgeDrug\Entities;

use Symfony\Component\Uid\UuidV4;

class Pathology
{
    private function __construct(
        public readonly UuidV4 $id,
        public readonly string $name,
    ) {}

    public static function create(
        string $name,
        ?string $id = null
    ): Pathology {
        return new Pathology(
            id: empty($id) ? UuidV4::v4() : new UuidV4($id),
            name: $name,
        );
    }

}
