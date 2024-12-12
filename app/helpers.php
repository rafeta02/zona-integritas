<?php

use Carbon\Carbon;
use App\Models\tim;
use App\Models\image;
use App\Models\berita;
use App\Models\setting;

function get_setting_value($key){
    $data = setting::where('key',$key)->first();
    if(isset($data->value)){
        return $data->value ;
     } 
     else {
        return 'empty';
     }
    }
    
    
      function get_tim_data($key){
         $data = tim::where('key',$key)->first();
         if(isset($data)){
             return $data;
          } 
          else {
             return 'empty';
          }
         }
         
      function get_logo($id)
      {
         $logo=image::where('id',$id)->first();

         if(isset($logo)){
            return $logo;
         } 
         else {
            return 'empty';
         }
         
      }

       function tanggal()
      {
             $tanggal = Carbon::now();
            $tanggalIndonesia = $tanggal->translatedFormat('d F Y');

             
      }
      
     


