<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $navbarItems;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navbarItems = [
            (object) [
                'name' => 'Home',
                'routeName' => 'home',
                'extraClass' => ''
            ],
            (object) [
                'name' => 'Destinations',
                'routeName' => 'destinations',
                'extraClass' => ''
            ],
            // (object) [
            //     'name' => 'About',
            //     'routeName' => 'help',
            //     'extraClass' => ''
            // ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
