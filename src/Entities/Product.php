<?php

namespace Rickygomez\KnowledgeDrug\Entities;

use Rickygomez\KnowledgeDrug\Enums\ProductStatuses;
use Symfony\Component\Uid\UuidV4;

class Product
{
    private function __construct(
        public readonly UuidV4 $id,
        public readonly string $name,
        public readonly ProductStatuses $status,
        public readonly Laboratory $laboratory,
        public readonly Pathologies $pathologies,
        public readonly string $presentation,
        public readonly string $composition,
        public readonly string $posology,
        public readonly ?string $image = null,
        public readonly ?string $observations = null,
    ) {}

    public static function create(
        string $name,
        string $status,
        Laboratory $laboratory,
        string $presentation,
        string $composition,
        string $posology,
        ?array $pathologies = [],
        ?string $image = null,
        ?string $observations = null,
        ?string $id = null
    ): Product {
        $pathologiesAggregate = new Pathologies();
        foreach ($pathologies as $pathology) {
            if($pathology instanceof Pathology){
                $pathologiesAggregate->addItem($pathology);
            }
        }

        return new Product(
            id: empty($id) ? UuidV4::v4() : new UuidV4($id),
            name: $name,
            status: ProductStatuses::tryFrom($status),
            laboratory: $laboratory,
            pathologies: $pathologiesAggregate,
            presentation: $presentation,
            composition: $composition,
            posology: $posology,
            image: $image,
            observations: $observations,
        );
    }

}
