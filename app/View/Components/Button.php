<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $class;
    public $onclick;
    public function __construct($type,$class,$onclick)
    {
        $this->type = $type;
        $this->class = $class;
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
