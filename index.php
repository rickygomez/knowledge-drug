<?php
require __DIR__ . '/vendor/autoload.php';


use Rickygomez\KnowledgeDrug\Entities\Laboratory;
use Rickygomez\KnowledgeDrug\Entities\Pathology;
use Rickygomez\KnowledgeDrug\Entities\Product;
use Rickygomez\KnowledgeDrug\Enums\ProductStatuses;
use Symfony\Component\Uid\UuidV4;

$laboratory = new Laboratory(
    id: UuidV4::v4(),
    name: 'Xpto farmo'
);

$pathology1 = new Pathology(
    id: UuidV4::v4(),
    name: 'Anatomia do Sistema Nervoso Central'
);

$pathology2 = new Pathology(
    id: UuidV4::v4(),
    name: 'Virologia'
);

$product = new Product(
    id: UuidV4::v4(),
    name: 'Semancol',
    status: ProductStatuses::DRAFT,
    laboratory: $laboratory,
    pathology: [$pathology1, $pathology2],
    presentation: '5 cápsulas com 500mg; 10 cápsulas com 500mg; Quantidade de cepas = 20 bilhões de UFC',
    composition: 'Semancol 500mg; Quantidade de cepas = 20 bilhões de UFC',
    posology: '1 a 2 cápsulas ao dia',
    image: 'products/33d48950-b68d-4985-a383-dbd2e5f5ecb7.jpg'
);


dump($product);
