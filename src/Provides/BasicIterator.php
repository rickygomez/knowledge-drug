<?php

namespace Rickygomez\KnowledgeDrug\Provides;

use Iterator;
use IteratorAggregate;

class BasicIterator implements Iterator
{

    private int $position = 0;

    public function __construct(
        private IteratorAggregate $aggregate
    ) { }

    public function current(): mixed
    {
        return $this->aggregate->getItem($this->position);

    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return !is_null($this->aggregate->getItem($this->position));
    }

}
