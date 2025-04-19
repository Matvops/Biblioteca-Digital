<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categories_options extends Component
{
    protected $options;
    protected $placeholder;
    /**
     * Create a new component instance.
     */
    public function __construct($options, $placeholder = "ALL CATEGORIES")
    {
        $this->options = $options;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categories_options');
    }
}
