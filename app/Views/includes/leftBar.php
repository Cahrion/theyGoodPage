<?php
    foreach($leftMainContexts as $leftMainContext){
        $myId = $leftMainContext["id"];
        $myName = $leftMainContext["tableName"];
        $myLink = $leftMainContext["tableLink"];

        if($mainArea == $myId){
            $myPoint = "-";
        }else{
            $myPoint = "+";
        }

        ?>
           
            <div class="col-6">
                <a href="<?= base_url("Sayfalar/$myLink"); ?>" style="color:#882d5e;text-decoration: none;font-size: 16px;">
                <?php
                    
                ?>
                    <div class="d-flex"><div style="color:black;font-size: 25px;font-weight: bold;width: 20px;text-align: center;"><?= $myPoint; ?></div>
                    <div style="align-items: center;" class="d-flex"><?= $myName; ?></div></div>
                </a>
                <?php
                if($mainArea == $myId){
                        
                        foreach($myContexts as $myContext){
                            $myName = $myContext["tableName"];
                            $myLink = $myContext["tableLink"];
                            ?>
                            <div style="margin-left: 40px;">
                                <a href="<?= base_url("Sayfalar/$myLink"); ?>" style="color:#882d5e;text-decoration: none;font-size: 16px;">
                                    <div class="d-flex"><div style="color:black;font-size: 25px;font-weight: bold;width: 20px;text-align: center;">•</div>
                                    <div style="align-items: center;" class="d-flex"><?= $myName; ?></div></div>
                                </a>
                            </div>

                            <?php
                        }

                }
                ?>
            </div>
        <?php
    }
    

?>
<div class="leftMainContext">

</div>