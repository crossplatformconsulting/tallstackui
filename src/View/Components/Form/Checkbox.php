<?php

namespace TallStackUi\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\View\ComponentSlot;
use TallStackUi\Foundation\Personalization\Contracts\Personalization;
use TallStackUi\Foundation\Personalization\SoftPersonalization;
use TallStackUi\Foundation\Personalization\Traits\InteractWithProviders;
use TallStackUi\Foundation\Personalization\Traits\InteractWithValidations;
use TallStackUi\View\Components\Form\Traits\SetupRadioCheckboxToggle;

#[SoftPersonalization('form.checkbox')]
class Checkbox extends Component implements Personalization
{
    use InteractWithProviders;
    use InteractWithValidations;
    use SetupRadioCheckboxToggle;

    public function __construct(
        public ?string $id = null,
        public string|null|ComponentSlot $label = null,
        public ?string $xs = null,
        public ?string $sm = null,
        public ?string $md = null,
        public ?string $lg = null,
        public ?string $size = null,
        public ?string $position = 'right',
        public ?string $color = 'primary',
    ) {
        $this->setup();
        $this->colors();
        $this->validate();
    }

    public function personalization(): array
    {
        return Arr::dot([
            'input' => [
                'class' => 'form-checkbox dark:border-dark-600 border-1 dark:bg-dark-800 rounded border-gray-300 bg-white transition duration-100 ease-in-out',
                'sizes' => [
                    'xs' => 'h-3 w-3',
                    'sm' => 'h-4 w-4',
                    'md' => 'h-5 w-5',
                    'lg' => 'h-6 w-6',
                ],
            ],
            'error' => 'border border-red-300 text-red-600 focus:border-red-400 focus:ring-red-600',
        ]);
    }

    public function render(): View
    {
        return view('tallstack-ui::components.form.checkbox');
    }
}
