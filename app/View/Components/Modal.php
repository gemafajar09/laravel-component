<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $action;
    public $method;
    public function __construct($id,$action,$method)
    {
        $this->id = $id;
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
