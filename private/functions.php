<?php
    function route_to_url($route_path){
        return WWW_ROOT.$route_path;
    }

    function enc($string=""){
        return urlencode($string);
    }

    function raw_enc($string=""){
        return rawencode($string);
    }

    function dec($string=""){
        return urldecode($string);
    }

    function raw_dec($string=""){
        return rawdecode($string);
    }

    //to prevent cross-site scripting by hackers
    //use it anytime you are loading dynamic data
    function htm_safe($string=""){
        return htmlspecialchars($string);
    }
?>