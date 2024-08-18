<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class NavLink extends Component
{
    public $activeClass;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public $routeName,
        public $name,
        public $extraClass = '',
    )
    {
        $this->activeClass = (Route::currentRouteName() == $routeName) ? 'text-blue-500 focus:outline-none' : 'text-gray-600 hover:text-gray-400 focus:outline-none focus:text-gray-400';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
