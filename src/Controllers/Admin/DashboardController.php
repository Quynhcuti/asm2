<?php

namespace  Peach\COop\Controllers\Admin;

use  Peach\COop\Commons\Controller;
use  Peach\COop\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}