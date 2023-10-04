<?php

namespace TasteUi\Support\Personalizations\Components\Button;

use TasteUi\Support\Personalizations\Components\PersonalizationResource;
use TasteUi\Support\Personalizations\Contracts\Personalizable;
use TasteUi\View\Components\Button\Circle as Component;

class Circle extends PersonalizationResource implements Personalizable
{
    protected function component(): string
    {
        return Component::class;
    }
}
