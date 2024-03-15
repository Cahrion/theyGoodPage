<?php

namespace App\Controllers;

use App\Models\MainTableModel;
use App\Models\SubTableModel;

// USE 
    helper(["minRequire", "fonksiyonlar"]);
// EXTRA USE

class Sayfalar extends BaseController
{

    /* Select */

    public function index($incomingSayfa)
    {
        $mainTable = new MainTableModel();
        $subTable  = new SubTableModel();
        $active = 1;
        $mainMain = $mainTable->getDataByTableLink($incomingSayfa);
        $main = $mainTable->getDataByTableLink($incomingSayfa);
        if(!$mainMain){
            $subMain = $subTable->getDataByTableLink($incomingSayfa);
            if($subMain){
                $mainMain   = $mainTable->getDataByID($subMain["topTable"]);
                $main       = $subMain;
                $active = 0;
            }else{
                echo "Hata !!!";
                die();
            }
        }
        $mainArea = $mainMain["id"]; // maintable  = 1, subtable = 0
        $mainTable = new MainTableModel();
        $subTable  = new SubTableModel();
        $leftMainContexts = $mainTable->getAllData();
        $myContexts = $subTable->getDataByTopTable($mainMain["id"]);

        $data = [
            "leftMainContexts"  => $leftMainContexts,
            "myContexts"        => $myContexts,
            "mainArea"          => $mainArea,
            "main"              => $main,
            "active"            => $active,
        ];
        return view("home", $data);

        
    }
}
