<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Calendar extends Component
{
    public $date;
    public $event;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($date, $event)
    {
        $this->date = $date;
        $this->event = $event;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.calendar');
    }
}
