<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\Dashboard\DashboardController;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    //public $active;


    
    public function __construct()
    {
      //  $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $list = $this->list();

        return view('components.menu',[
            'list' => $list,    
            //'active' => $this->active
        ]);
    }

    public function list()
    {
        return [
            [
                'label' => 'Dashboard',
                'link' => 'dashboard',
                'route' => 'dashboard.index',
                'icon' =>  'gauge'
            ],
            [
                'label' => 'Siswa',
                'link' => 'students',
                'route' => 'students.index',
                'icon' => 'graduation-cap'

            ],
            [
                'label' => 'User',
                'link' => 'users',
                'route' => 'users.index',
                'icon' => 'users'

            ]
        ];
    }
}
