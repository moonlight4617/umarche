<div>
    @if (empty($filename))
        <img src="{{asset('images/no_image.jpg')}}">
    @else 
        <img src="{{ asset('strage/shops/' . $filename)}}">  
    @endif
</div>