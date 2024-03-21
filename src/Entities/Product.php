<?php

namespace Rickygomez\KnowledgeDrug\Entities;

use Rickygomez\KnowledgeDrug\Enums\ProductStatuses;
use Symfony\Component\Uid\UuidV4;

class Product
{
    public function __construct(
        public readonly UuidV4 $id,
        public readonly string $name,
        public readonly ProductStatuses $status,
        public readonly Laboratory $laboratory,
        public readonly array $pathology,
        public readonly string $presentation,
        public readonly string $composition,
        public readonly string $posology,
        public readonly ?string $image = null,
        public readonly ?string $observations = null,
    ) {}

}
