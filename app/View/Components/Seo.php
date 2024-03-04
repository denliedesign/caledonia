<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Seo extends Component
{
    public $image1;
    public $image2;
    public $image3;
    public $heading1;
    public $heading2;
    public $heading3;
    public $content1;
    public $content2;
    public $content3;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image1, $image2, $image3, $heading1, $heading2, $heading3, $content1, $content2, $content3)
    {
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->heading1 = $heading1;
        $this->heading2 = $heading2;
        $this->heading3 = $heading3;
        $this->content1 = $content1;
        $this->content2 = $content2;
        $this->content3 = $content3;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.seo');
    }
}
