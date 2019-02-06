<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class CurrentDateComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View stw  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('current_date',date("d/m/Y", mktime(0, 0, 0, 2, 1, 2019)));
    }
}