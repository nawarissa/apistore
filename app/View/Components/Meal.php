<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Meal extends Component
{
    public $meal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($meal)
    {
        $this->meal = $meal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.meal');
    }
}
