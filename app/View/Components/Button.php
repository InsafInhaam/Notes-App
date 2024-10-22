<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    public $primary;

    public $xl;

    /**
     * Create a new component instance.
     */
    public function __construct($primary = false, $xl = false)
    {
        $this->primary = $primary;
        $this->xl = $xl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
