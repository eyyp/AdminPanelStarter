<?php 
    function PageAdmin($page)
    {   
        switch ($page) 
        {
            case "approachBar":
                $approachBar = "Admin/include/approachBar";
                return $approachBar;
                break;
            case "telefonTable":
                $approachBar = "Admin/include/sonEklenenlerTelefonTable";
                return $approachBar;
                break;
            case "kisiSorguForm":
                $approachBar = "Admin/include/kisiSorguForm";
                return $approachBar;
                break;
            case "kisilerTable":
                $approachBar = "Admin/include/sonEklenenKisilerTable";
                return $approachBar;
                break;
            case "kisiEditForm":
                $approachBar = "Admin/include/kisiEditForm";
                return $approachBar;
                break;
            case "telefonEditForm":
                $approachBar = "Admin/include/telefonEditForm";
                return $approachBar;
                break;
            case "kisiEkleForm":
                $approachBar = "Admin/include/kisiEkleForm";
                return $approachBar;
                break;
            case "telefonEkleForm":
                $approachBar = "Admin/include/telefonEkleForm";
                return $approachBar;
                break;
            case "telefonSorguPage":
                $approachBar = "Admin/include/formTelefon";
                return $approachBar;
                break;    
            case "colorBar":
                $colorBar = "Admin/include/colorBar";
                return $colorBar;
                break;
            case "earningsOverview":
                $earningsOverview = "Admin/include/earningsOverview";
                return $earningsOverview;
                break;
            case "earningsRow":
                $earningsRow = "Admin/include/earningsRow";
                return $earningsRow;
                break; 
            case "footer":
                $footer = "Admin/include/footer";
                return $footer;
                break;
            case "head":
                $header = "Admin/include/head";
                return $header;
                break;
            case "illustrationsBar":
                $IllustrationsBar = "Admin/include/illustrationsBar";
                return $IllustrationsBar;
                break;        
            case "leftBar":
                $leftBar = "Admin/include/leftBar";
                return $leftBar;
                break;
            case "logoutBar":
                $logoutBar = "Admin/include/logoutBar";
                return $logoutBar;
                break;
            case "pageHeading":
                $pageHeading = "Admin/include/pageHeading";
                return $pageHeading;
                break;           
            case "revenueSources":
                $revenueSources = "Admin/include/revenueSources";
                return $revenueSources;
                break; 
            case "scriptsAdd":
                $scriptsAdd = "Admin/include/scriptsAdd";
                return $scriptsAdd;
                break;            
            case "topBar":
                $topBar = "Admin/include/topBar";
                return $topBar;
                break;                                                                   
            case "scrollButton":
                $scroll = "Admin/include/scrollButton";
                return $scroll;
                break;   
            case "settingsBar":
                $settings = "Admin/include/settingsBar";
                return $settings;
                break;
            case "task":
                $task = "Admin/include/task";
                return $task;
                break;
            case "pending":
                $peding = "Admin/include/pending";
                return $peding;
                break;
            case "topSourceBar":
                $peding = "Admin/include/source";
                return $peding;
                break; 
            case "messagesBar":
                $peding = "Admin/include/messagesBar";
                return $peding;
                break;
            case "dropdownMessages":
                $peding = "Admin/include/dropdownMessages";
                return $peding;
                break;                                                                                              
        }
    }
?>