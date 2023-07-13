<?php 

function component($file = 'base',$page='head'){
    $component = 'component/';
    return path($file.'/'.$page); 
}

function pages($file,$page = 'index'){
    $pages = 'pages/';
    if(isset($file)){
        $page=$file.'/'.$page;
    }
    return path($page,$pages);
}

function path($fileName = 'index',$path = 'component/'){
    $basePath='admin/';
    return $basePath.$path.$fileName;
}
?>