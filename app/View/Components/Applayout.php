<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Applayout extends Component
{
    public $title;
    public $judul;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$judul)
    {
        $this->title = $title;
        $this->judul = $judul;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout/app-layout');
    }
}
