<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MenusComposer
{
    public function compose(View $view)
    {
        $menus = DB::table('menu')->get();
        $view->with('menus', $menus);
    }
}