<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Program extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image;
    public $slug;
    public $group;

    public function __construct($image, $slug, $group)
    {
        $this->image = $image;
        $this->slug = $slug;
        $this->group = $group;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.program');
    }
}
