<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Testimonial extends Component
{
    public $image;
    public $name;
    public $review;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $name, $review)
    {
        $this->image = $image;
        $this->name = $name;
        $this->review = $review;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
