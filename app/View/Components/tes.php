<?php

namespace App\View\Components;

use App\Models\Tour;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tes extends Component
{
    public $tours = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
            $this->tours = Tour::all();    
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $tours = $this->tours;
        return view('components.tes', compact('tours'));
    }
}
