<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Forminput extends Component
{
    public $name,$title,$type;
    public function __construct($name,$title,$type)
    {
        $this->name=$name;
        $this->type=$type;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forminput');
    }
}
