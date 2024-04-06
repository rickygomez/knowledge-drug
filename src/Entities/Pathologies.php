<?php

namespace Rickygomez\KnowledgeDrug\Entities;

use IteratorAggregate;
use Rickygomez\KnowledgeDrug\Entities\Pathology;
use Rickygomez\KnowledgeDrug\Provides\BasicIterator;
use Stringable;
use Traversable;

class Pathologies implements IteratorAggregate, Stringable
{
    private array $pathologies = [];

    public function getIterator(): Traversable
    {
        return new BasicIterator($this);
    }

    public function removeItem(int $key): void
    {
        unset($this->pathologies[$key]);
    }

    public function addItem(Pathology $pathology): void
    {
        $this->pathologies[] = $pathology;
    }

    public function getItem(int $key): ?Pathology
    {
        return $this->pathologies[$key] ?? null;
    }

    public function __toString(): string
    {
        $pathologies = [];
        foreach ($this->pathologies as $pathology) {
            $pathologies[] = $pathology->name;
        }
        return implode('; ', $pathologies);
    }
}
