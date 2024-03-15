<?php
    // My Functions
    function productWrite($data, $spaceValue) // Product Writer
    {
        $html = "";
        foreach ($data as $dataKey => $dataValue) {
            $dataProductID                  = $dataValue["productID"];
            $dataProductName                = $dataValue["productName"];
            $dataProductMenuID              = $dataValue["productMenuID"];

            $htmlX = "
                        <div class='dropdown'>
                            <a class='btn btn-danger dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fa-solid fa-sliders'></i>
                            </a>
                            <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                                <div class='dropdown-item mb-2 adminSettingsArea'>
                                    <div name='Fpanel/product/update/" . $dataProductID . "' class='goInLink adminUpdateColor'>
                                        <i class='fa-solid fa-highlighter'></i> Güncelle
                                    </div>
                                </div>
                                
                                <div class='dropdown-item adminSettingsArea'>
                                    <div name='Fpanel/product/delete_result/" .  $dataProductID . "' class='goInDeleteComplete adminDeleteColor'>
                                        <i class='fa-solid fa-trash-can'></i> Sil
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            $html .= "
                        <div class='d-flex categoryItem' style='display:none!important'>
                            <div class='col-8 categoryMenuArea'>
                                <div style='margin-left:" . $spaceValue . "px;' class='row categoryProductBlocks categoryMenuBottomArea' name='X-" . $dataProductMenuID . "'> 
                                    <div class='categoryProductItemLineArea'>
                                        <span style='color:red'>[Urun]</span> $dataProductName
                                    </div>
                                </div> 
                            </div> 
                            <div class='col-4 categorySelectArea'>
                                $htmlX
                            </div> 
                        </div>
                    ";
        }
        return $html;
    }
    function menuWrite($data, $spaceValue = 0) // Menu Writer
    {
        $html                   = "";
        foreach ($data as $dataKey => $dataValue) {
            $dataCategoryID         = $dataValue["categoryId"];
            $dataCategoryName       = $dataValue["categoryName"];
            $dataCategoryRumuz      = $dataValue["categoryRumuz"];
            $dataCategoryBottomId   = $dataValue["categoryBottomId"];
            if(isset($dataValue["bottomData"])){
                $dataBottomData         = $dataValue["bottomData"];
            }else{
                $dataBottomData         = "";
            }

            if($dataBottomData != ""){
                if ($dataCategoryRumuz == 1) {
                    $clickEvent = "categoryIndexChange(" . $dataCategoryID . ")";
                } else {
                    $clickEvent = "menuIndexChange(" . $dataCategoryID . ")";
                }
                $htmlXIn = "
                    <div class='dropdown-item mb-2 adminSettingsArea' onclick='" . $clickEvent ."'>
                        <i class='fa-solid fa-stairs'></i> Yeniden sırala
                    </div>
                ";
                $htmlIcon = "
                    <i class='fa-solid fa-angle-right'></i>
                ";
            }else{
                $htmlXIn = "";
                $htmlIcon = "
                <i class='fa-solid fa-minus'></i>
                ";
                $clickEvent = "";
            }
            if ($dataCategoryBottomId > 1) {
                $styleFacktor = "none";
            } else {
                $styleFacktor = "flex";
            }

            $htmlX                  = "";
            if ($dataCategoryID != 1) {
                $htmlX = "
                    <div class='dropdown'>
                        <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <i class='fa-solid fa-sliders'></i>
                        </a>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                            " . $htmlXIn . "
                            <div class='dropdown-item mb-2 adminSettingsArea'>
                            
                                <div name='Fpanel/category/update/" . $dataCategoryID . "' class='goInLink adminUpdateColor'>
                                    <i class='fa-solid fa-highlighter'></i> Güncelle
                                </div>
                            </div>
                            
                            <div class='dropdown-item adminSettingsArea'>
                                <div name='Fpanel/category/delete_result/" .  $dataCategoryID . "' class='goInDeleteComplete adminDeleteColor'>
                                    <i class='fa-solid fa-trash-can'></i> Sil
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            } else {
                $htmlX = "
                    <div class='dropdown'>
                        <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <i class='fa-solid fa-sliders'></i>
                        </a>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                            <div class='dropdown-item mb-2 adminSettingsArea' onclick='" . $clickEvent ."'>
                                <i class='fa-solid fa-stairs'></i> Yeniden sırala
                            </div>
                        </div>
                    </div>
                    ";
            }
            $html .= "
                    <div class='d-flex categoryItem' style='display:" . $styleFacktor . "!important'>
                        <div class='col-8 categoryMenuArea'>
                            <div style='margin-left:" . $spaceValue . "px;' class='row categoryMenuBlocks categoryMenuBottomArea' name='" . $dataCategoryID . "-" . $dataCategoryBottomId . "' status='0' onclick='treeModel(this)'> 
                                <span class='categorySelectIcon' style='left: -" . ($spaceValue + 35) . "px'>
                                    " . $htmlIcon . "
                                </span>
                                <div class='categoryMenuItemLineArea'>
                                    $dataCategoryName  
                                </div>
                            </div>
                        </div>
                        <div class='col-4 categorySelectArea'>
                        $htmlX
                        </div> 
                    </div>
                    ";

            if ($dataBottomData != "") {
                if ($dataCategoryRumuz == 1) {
                    $html .= productWrite($dataBottomData, $spaceValue + 20);
                } else {
                    $html .= menuWrite($dataBottomData, $spaceValue + 20);
                }
            }
        }
        return $html;
    }
?>
