<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImagePlugin;

class ImageController extends Controller
{
    public function store(Request $request)
    {
    	$image = $request->file('file');
        $file = $image->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
		$extension = pathinfo($file, PATHINFO_EXTENSION);
        $currentTime = date("dmy_His");
        $imageName = $filename . '_' . $currentTime . '.' . $extension;
        $imageThumbName = 'thumb_' . $filename . '_' . $currentTime . '.' . $extension;
        $path = public_path('images');
        $image->move($path, $imageName);
        $bigImage = $path . '/' . $imageName;
        $smallImage = $path . '/' . $imageThumbName;
        copy($bigImage, $smallImage);
       
        ImagePlugin::make($bigImage)->resize(360, 270)->save($bigImage);
        ImagePlugin::make($smallImage)->resize(120, 120)->save($smallImage);

        /*$resizedImage = ImagePlugin::make($uploadedImage)->resize(120, 120, function($constraint) {
            $constraint->aspectRatio();
        });
        $resizedImage->save($uploadedImage);*/
       
        return response()->json(['name' => $imageName]);
    }

    public function destroy()
    {

    }
}
