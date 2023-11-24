<?php

namespace TallStackUi\View\Components\Tab;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use TallStackUi\View\Personalizations\Contracts\Personalization;
use TallStackUi\View\Personalizations\SoftPersonalization;

#[SoftPersonalization('tab')]
class Tab extends Component implements Personalization
{
    public function __construct(
        public ?string $selected = null,
        public ?string $id = null,
    ) {
        $this->id ??= uniqid();
    }

    public function personalization(): array
    {
        return Arr::dot([
            'wrapper' => 'w-full bg-white rounded-lg shadow-md dark:bg-dark-700',
            'item' => [
                'wrapper' => 'flex overflow-auto flex-nowrap soft-scrollbar'
            ],
            'divider' => 'hidden h-px bg-gray-700 border-0 dark:bg-gray-600 sm:block',
            'select' => 'py-3 px-4 w-full rounded-lg border-gray-200 focus:border-primary-500 focus:ring-primary-500 dark:bg-dark-700 dark:border-dark-500 dark:text-gray-400 sm:hidden ',
            // 'wrapper' => '-mb-1.5 flex items-stretch overflow-auto',
            // 'select' => 'py-3 px-4 w-full rounded-lg border-gray-200 focus:border-primary-500 focus:ring-primary-500 dark:bg-dark-700 dark:border-dark-500 dark:text-gray-400 sm:hidden ',
            // 'item' => [
            //     'wrapper' => 'inline-flex cursor-pointer justify-center truncate px-5 py-3 text-gray-700 transition rounded-t-lg',
            //     'selected' => 'text-primary dark:bg-dark-700 dark:text-dark-300 bg-white font-medium',
            //     'unselected' => 'dark:text-dark-200 opacity-50',
            // ],
        ]);
    }

    public function render(): View
    {
        return view('tallstack-ui::components.tab.tab');
    }
}
