@foreach ($products as $key => $value)
<div class="item {{$key == 0 ? "active" : ''}}">
    <div class="col-xs-4"><a href="#1"><img
                src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $value->image) }}"
                class="img-responsive"></a></div>
</div>
@endforeach
