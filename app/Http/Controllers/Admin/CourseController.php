<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('admin.course.index' , compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg',
            'title' => 'required',
            'link' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'price' => 'required|integer',
            'course_length' => 'required'
        ]);
        $req = $request->image;

        $img = generateFileName($req->getClientOriginalName());
        $req->move(public_path(env('COURSE_IMAGE_PATH')), $img);

        Course::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'started_time' => convertShamsiToGregorianDate($request->startDate),
            'category_id' => $request->category,
            'price' => $request->price,
            'is_active' => $request->is_active,
            'image' => $img,
            'course_length' => $request->course_length
        ]);

        alert()->success('کارگاه مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('admin.course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getImage(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->move(public_path(env('COURSE_IMAGE_PATH')), $fileName);
        return response()->json(['location' => "/upload/files/courses/images/$fileName"]);
    }
}
