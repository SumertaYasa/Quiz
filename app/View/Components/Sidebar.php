<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $role;
    public function __construct($role)
    {
        $this -> role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
