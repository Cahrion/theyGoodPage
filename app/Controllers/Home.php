<?php

namespace App\Controllers;

use App\Models\MainTableModel;
use App\Models\SubTableModel;

// USE 
    helper(["minRequire", "fonksiyonlar"]);
// EXTRA USE

class Home extends BaseController
{
    
        /* Select */

    public function index()
    {
        $mainArea = 1; // maintable  = 1, subtable = 0
        $active = 1;
        $mainTable = new MainTableModel();
        $subTable  = new SubTableModel();
        $leftMainContexts = $mainTable->getAllData();
        $myContexts = $subTable->getDataByTopTable($mainArea);

        $data = [
            "leftMainContexts"  => $leftMainContexts,
            "myContexts"        => $myContexts,
            "mainArea"          => $mainArea,
            "active"            => $active,
        ];
        return view("home", $data);
    }
}