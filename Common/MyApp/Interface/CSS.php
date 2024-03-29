<?php

include("CSS/InLine.php");
include("CSS/OnLine.php");
include("CSS/Module.php");


trait MyApp_Interface_CSS
{
    use
        MyApp_Interface_CSS_InLine,
        MyApp_Interface_CSS_OnLine,
        MyApp_Interface_CSS_Module;

    
    //*
    //*  MyApp_Interface_CSS_Path accessor.
    //*
    //*

    function MyApp_Interface_CSS_Root()
    {
        return dirname($_SERVER[ "SCRIPT_FILENAME" ]);
    }
    
    
    //*
    //*  MyApp_Interface_CSS_Path accessor.
    //*
    //*

    function MyApp_Interface_CSS_Path()
    {
        return $this->MyApp_Interface_CSS_Path;
    }
    
    //*
    //*  MyApp_Interface_CSS_Path accessor.
    //*
    //*

    function MyApp_Interface_CSS_Uri()
    {
        return $this->MyApp_Interface_CSS_Path;
    }
    
    //*
    //*  MyApp_Interface_CSS_Path accessor.
    //*
    //*

    function MyApp_Interface_CSS($css)
    {
        return
            $this->Htmls_Tag_List
            (
               "STYLE",
               $css
            );
    }
}

?>