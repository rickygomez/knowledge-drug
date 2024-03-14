<?php

namespace Rickygomez\KnowledgeDrug\Entities;

use Symfony\Component\Uid\UuidV4;

class Pathology
{
    public function __construct(
        public readonly UuidV4 $id,
        public readonly string $name,
    ) {}

}
