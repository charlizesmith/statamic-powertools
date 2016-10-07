<?php

namespace Statamic\Addons\SearchManager;

use Statamic\Extend\Widget;

class SearchManagerWidget extends Widget
{

    /**
     * The HTML that should be shown in the widget
     *
     * @return string
     */
    public function html()
    {
        // Get settings
        $settings    = $this->getConfig();
        $github_page = $this->getMeta()['url'];
        $cp_path     = CP_ROUTE;

        return $this->view('widget', compact('settings', 'github_page', 'cp_path'))->render();
    }
}
