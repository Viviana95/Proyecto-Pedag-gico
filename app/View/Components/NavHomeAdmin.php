<?php

namespace App\View\Components;

use App\Models\Language;
use Illuminate\View\Component;

class NavHomeAdmin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $languages = Language::all();
        return view('components.nav_home_admin', ['languages' => $languages]);
    }
}
