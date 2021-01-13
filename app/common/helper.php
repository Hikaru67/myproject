<?php
    function current_url()
    {
        $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $validURL = str_replace("&", "&amp", $url);
        return $validURL;
    }

    function checkActiceMenu($menuName){
        /*$url = current_url();*/
        return (strcmp($_SERVER['REQUEST_URI'], $menuName) === 0 ? 'active' : '');
    }
?>
