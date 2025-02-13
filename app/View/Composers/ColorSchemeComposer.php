<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ColorSchemeComposer
{
    /**
     * Bind menu to the view.
     */
    public function compose(View $view): void
    {
        if (!is_null(request()->route())) {
            $activeColorScheme = $this->activeColorScheme($view);
            $view->with('activeColorScheme', $activeColorScheme);
        }
    }

    /**
     * Selected Color Sceheme.
     */
    public function activeColorScheme($view): string
    {
        if (isset($view->activeColorScheme)) {
            return $view->activeColorScheme;
        } else if (request()->has('activeColorScheme')) {
            return request()->query('activeColorScheme');
        }

        return session()->has('activeColorScheme') ? session('activeColorScheme') : "default";
    }
}
