<?php

namespace App\View\Components\Custom;

use Illuminate\View\Component;

class Button extends Component
{
    public $class, $type, $nama;
    public function __construct($class, $type, $nama)
    {
        $this->class = $class;
        $this->type = $type;
        $this->nama = $nama;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.custom.button');
    }
}
