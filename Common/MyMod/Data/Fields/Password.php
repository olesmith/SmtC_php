<?php

trait MyMod_Data_Fields_Password
{
    //*
    //* function MyMod_Data_Field_Password_Edit, Parameter list: $data,$item,$rdata=""
    //*
    //* Creates edit password field.
    //* Should ONLY be called by MakeDataField, who checks access
    //*

    function MyMod_Data_Field_Password_Edit($data,$value,$rdata="")
    {
        $size=8;
        if ($this->ItemData[ $data ][ "Size" ]) { $size=$this->ItemData[ $data ][ "Size" ]; }

        if (empty($rdata)) { $rdata=$data; }
        
        return
            array
            (
                $this->Htmls_Input_Password
                (
                    $rdata,
                    $value,
                    array
                    (
                        "SIZE" => $size,
                        "STYLE" => array
                        (
                            //Doesn't work!
                            "text-security" => "disc",

                            "-moz-text-security" => 'disc',
                            "-webkit-text-security" => "disc",  
                        ),
                    ),
                    ""
                ),
            );
        //$this->Html_Password($rdata,$value,$size);
    }        
}

?>