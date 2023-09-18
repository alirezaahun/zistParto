@extends('admin.layouts.admin')

@section('title')
    index course
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست دوره ها ({{ $courses->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.course.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد دوره
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>تصویر</th>
                            <th>عنوان</th>
                            <th>متن</th>
                            <th>الویت</th>
                            <th>وضعیت</th>
                            <th>نوع</th>
                            <th>متن دکمه</th>
                            <th>لینک دکمه</th>
                            <th>آیکون دکمه</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $key => $course)
                            <tr>
                                <th>
                                    {{ $courses->firstItem() + $key }}
                                </th>
                                <th>
                                    <img style="height: 30px;width: 30px" src="{{ url( env('COURSE_IMAGE_PATH').$course->image ) }}">

                                </th>
                                <th>
                                    {{ $course->title }}
                                </th>
                                <th>
                                    {{ $course->text }}
                                </th>
                                <th>
                                    {{ $course->is_active }}
                                </th>
                                <th>
                                    <span
                                        class="{{ $course->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $course->is_active }}
                                    </span>
                                </th>
                                <th>
                                    {{ $course->type }}
                                </th>
                                <th>
                                    {{ $course->link }}
                                </th>
                                <th>
                                    {{ $course->link }}
                                </th>
                                <th>
                                    {{ $course->link }}
                                </th>

                                <th>
                                    <form action="{{ route('admin.course.destroy', ['course' => $course->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-outline-danger" type="submit">حذف</button>
                                    </form>
                                    <a class="btn btn-sm btn-outline-info mr-3 mt-2"
                                        href="{{ route('admin.course.edit', ['course' => $course->id]) }}">ویرایش</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <div class="d-flex justify-content-center mt-5">
                {{ $courses->render() }}
            </div> --}}
        </div>
    </div>
@endsection
