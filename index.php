<?php
require __DIR__ . '/vendor/autoload.php';


use Rickygomez\KnowledgeDrug\Entities\Laboratory;
use Rickygomez\KnowledgeDrug\Entities\Pathology;
use Rickygomez\KnowledgeDrug\Entities\Product;
use Rickygomez\KnowledgeDrug\Enums\ProductStatuses;
use Symfony\Component\Uid\UuidV4;

$laboratory = new Laboratory(
    UuidV4::v4(),
    'Xpto farmo'
);

$pathology1 = new Pathology(
    UuidV4::v4(),
    'Anatomia do Sistema Nervoso Central'
);

$pathology2 = new Pathology(
    UuidV4::v4(),
    'Virologia'
);

$product = new Product(
    UuidV4::v4(),
    'Semancol',
    ProductStatuses::DRAFT,
    $laboratory,
    [$pathology1, $pathology2],
    'products/33d48950-b68d-4985-a383-dbd2e5f5ecb7.jpg',
    '5 cápsulas com 500mg; 10 cápsulas com 500mg; Quantidade de cepas = 20 bilhões de UFC',
    'Semancol 500mg; Quantidade de cepas = 20 bilhões de UFC',
    '1 a 2 cápsulas ao dia'
);


dump($product);
