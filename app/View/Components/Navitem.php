<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navitem extends Component
{
    /**
     * Create a new component instance.
     */
    public $url,$title;

    public function __construct($url,$title)
    {
        $this->url=$url;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navitem');
    }
}
