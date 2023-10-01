<?php

namespace TasteUi\Support\Personalizations\Components\Interactions;

use TasteUi\Support\Personalizations\Contracts\Personalizable;
use TasteUi\Support\Personalizations\Traits\ShareablePersonalization;
use TasteUi\View\Components\Interaction\Toast as Component;

class Toast implements Personalizable
{
    use ShareablePersonalization;

    public function component(): string
    {
        return Component::class;
    }
}
