<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $search = $_GET["search"];
    $modelsearch = new ModelSearch();   
    $r = $modelsearch->SearchProduct($search);
    if($r=1){
        
    }
}
    else{
        $modelread = new ModelRead() ;
        $r = $modelread->ReadProduct();
    }

?>
