<?php

trait MyMod_API_CLI_Process_Page
{
    //*
    //* Process $page.
    //*

    function API_CLI_Process_Page($args,$page)
    {
        $api_items=
            $this->API_CLI_Page_Read
            (
                $page,
                "",
                $ntries=5,$sleep=5,
                $fromfile=True
            );

        //print "Page: $page, ".count($api_items)." items\n\n";
        foreach ($api_items as $api_item)
        {
            $this->API_CLI_Process_Item($api_item);
        }

        return
            $this->API_CLI_Process_IDs_Page($page,$api_items);
    }
}

?>