<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $contactInfo;

    public function __construct($contactInfo = 'Contact us: +1 123-456-7890 | email@example.com')
    {
        $this->contactInfo = $contactInfo;
    }

    public function render()
    {
        return view('components.header');
    }
}
