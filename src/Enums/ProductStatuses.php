<?php

namespace Rickygomez\KnowledgeDrug\Enums;

enum ProductStatuses : string {
    case DRAFT = 'Rascunho';
    case INACTIVE = 'Inativo';
    case PUBLISHED = 'Publicado';
}
