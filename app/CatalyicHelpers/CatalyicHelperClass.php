<?php

namespace App\CatalyicHelpers;
use File;

class CatalyicHelperClass {

     /**
     * @author Muhammad Naveed
     * @github https://github.com/naveed504
     *
     * This class is a generic form of method which are to be used all around the
     * project, for reusability and static behaviour by laravel facades
     *
     * Write down all the generic methods here in this class for flexibility and reusability
     * Please note this class will be autoloaded via composer and injected to the service
     * providers.
     */

     /**
      * save image for all types of members, network-levels and admins
      */
      public function saveImage($image, $path)
      {
         $getImgPath =$this->checkImagePath($path);
         if(empty($image)) {
            $newImage = '';
         } else {
          $fileName = time().'.'.$image->clientExtension();
          $image->move($getImgPath, $fileName);
          $newImage = $fileName;
         }
         return $newImage;
      }
 
       /**
       * update image for all types of members, network-levels and admins
       */
      public function updateImage($formImage ,$dbImage, $path)
     {
         $getImgPath = $this->checkImagePath($path);
         if(empty($formImage)) {
             $newImage = $dbImage;
         } else {
             $prepareImgForDelete =  $getImgPath.$dbImage;
             if(File::exists($prepareImgForDelete)) {
                 File::delete($prepareImgForDelete);
             }
             $fileName = time().'.'.$formImage->clientExtension();
             $formImage->move($getImgPath, $fileName);
             $newImage = $fileName;
         }
         return $newImage;
     }
 
      /**
       * check image path . create directory if not exist
       */
     public function checkImagePath($imgpath)
     {
         if(!File::isDirectory($imgpath)){
            File::makeDirectory($imgpath, 0777, true, true);
         }
         return $imgpath;
     }

}