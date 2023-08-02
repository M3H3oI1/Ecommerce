<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;
    private static $product, $image, $imageName, $directory, $imageUrl;
    public static function getImageUrl($request)
    {
        self:: $image        = $request->file('image');
        self:: $imageName    = self::$image->getClientOriginalName();
        self:: $directory    = 'Upload/product-images/';
        self:: $image->move(self::$directory, self::$imageName);
        self:: $imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newOtherImage(){

    }
}
