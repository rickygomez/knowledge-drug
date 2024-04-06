<?php
require __DIR__ . '/vendor/autoload.php';


use Rickygomez\KnowledgeDrug\Entities\Laboratory;
use Rickygomez\KnowledgeDrug\Entities\Pathology;
use Rickygomez\KnowledgeDrug\Entities\Product;
use Symfony\Component\ErrorHandler\Debug;

Debug::enable();

$laboratory = Laboratory::create(
    name: 'Xpto farmo'
);

$pathology1 = Pathology::create(
    name: 'Anatomia do Sistema Nervoso Central'
);

$pathology2 = Pathology::create(
    id: '8d952994-3b28-4a52-8817-f1610acebd4b',
    name: 'Virologia'
);

$productFull = Product::create(
    id: '172ee9df-195d-44c2-a2a8-0598fe677cfc',
    name: 'Semancol',
    status: 'Rascunho',
    laboratory: $laboratory,
    presentation: '5 cápsulas com 500mg; 10 cápsulas com 500mg; Quantidade de cepas = 20 bilhões de UFC',
    composition: 'Semancol 500mg; Quantidade de cepas = 20 bilhões de UFC',
    posology: '1 a 2 cápsulas ao dia',
    pathologies: [$pathology1, $pathology2, 'aaaa'],
    image: 'products/33d48950-b68d-4985-a383-dbd2e5f5ecb7.jpg',
    observations: 'Observações sobre o produto'
);

$productSimple = Product::create(
    name: 'Semancol',
    status: 'Rascunho',
    laboratory: $laboratory,
    presentation: '5 cápsulas com 500mg; 10 cápsulas com 500mg; Quantidade de cepas = 20 bilhões de UFC',
    composition: 'Semancol 500mg; Quantidade de cepas = 20 bilhões de UFC',
    posology: '1 a 2 cápsulas ao dia',
);


dump($productSimple, $productFull);

dump((string) $productSimple->pathologies);
dump((string) $productFull->pathologies);
