<?php

trait MyMod_HorMenu_Entry_JS
{
    //*
    //*
    //*

    function MyMod_HorMenu_Entry_JS($action,$id,$item,$destination="")
    {
        $dest_id=
            $this->MyMod_HorMenu_Destination_ID
            (
                $action,$destination
            );
                
        return
            $this->JS_Load_URL_2_Element
            (
                $this->MyMod_HorMenu_Entry_URL
                (
                    $action,$item,$dest_id
                ),
                $dest_id,
                "HorMenu"
            );
    }
    
}

?>