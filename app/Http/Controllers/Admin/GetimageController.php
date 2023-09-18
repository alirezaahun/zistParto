<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetimageController extends Controller
{
    public function upload($get)
    {

        $img = generateFileName($get->getClientOriginalName());
        $get->move(public_path(env('COURSE_IMAGE_PATH')), $img);
        return ['img_name' => $img];
    }
}
