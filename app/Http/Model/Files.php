<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class Files extends Model
{
    protected $table = "files";

    public function contents()
    {
        return $this->belongsTo('App\Http\Model\Contents');
    }

    public function Upload(&$file, $base64)
    {
        // dd($base64);
        if ($base64) {

            $contents = file_get_contents($base64);
            $mimeType = Image::make($contents)->mime();

            switch ($mimeType) {
                case 'image/jpeg':
                case 'image/jpg':
                    $extension = '.jpg';
                    break;

                case 'image/png':
                    $extension = '.png';
                    break;

                case 'image/bmp';
                    $extension = '.bmp';
                    break;

                case 'image/gif':
                    $extension = '.gif';
                    break;

                case 'image/tiff':
                case 'image/x-tiff':
                    $extension = '.tiff';
                    break;

                default:
                    throw new \Exception("Invalid Mime-Type file.");
            }

            $imageName = md5(microtime()) . $extension;


            $path = public_path('uploads/'.$imageName);

            try {
                Image::make($contents)->save($path);
                
                $file->name = $imageName;
                $file->filename = 'uploads/'.$imageName;
                $file->save();

                return true;
            } catch (Exception $e) {
                dd($e);
            }

            return  false;
        }
    }
}
