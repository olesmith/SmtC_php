<?php

trait MyMod_Handle_Unlink
{
    //*
    //* Handles module object file data Download.
    //*

   function MyMod_Handle_Unlink($echo=TRUE)
   {
       $id=$this->CGI_GETint("ID");
       $data=$this->CGI_GET("Data");

       if (empty($id)) { return; }
       
       $access=$this->MyMod_Data_Access($data,$this->ItemHash);
       
       if ($access>=2 && $this->ItemData[ $data ][ "Sql" ]=="FILE")
       {
           if (!empty($id))
           {
               #Reads into $this->ItemHash
               $this->MyMod_Item_Read($id,array("ID",$data));
           }

           $file=
               $this->MyMod_Data_Fields_File_FileName
               (
                   $data,
                   $this->ItemHash
               );

           $title="Unaltered";
           if (file_exists($file))
           {
               $fields=array($data,$data."_OrigName",$data."_Time",$data."_Size");
               foreach ($fields as $field)
               {
                   $this->ItemHash[ $field ]="";
               }

               unlink($file);
               $title="Upload Deleted";
               $this->Sql_Update_Item_Values_Set($fields,$this->ItemHash);
           }

           $this->MyMod_Handle_Edit($echo=TRUE,$formurl=NULL,$title);
           
           //$args=$this->CGI_URI2Hash($_SERVER[ "HTTP_REFERER" ]);
           //$args=$this->CGI_URI2Hash();

           //var_dump($args);
           //$this->CGI_Redirect("?".$this->CGI_Hash2URI($args)."#HorMenu");

       }
       else
       {
           echo "Access denied";
       }
   }
}

?>