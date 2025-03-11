<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/revolution-slider/5.4.8/css/settings.css">
    <title>Document</title>
</head>
<body>
    <style>
        html,body,ul{
            height: 100%;
            width: 100%;
            padding:0;
        }
    </style>
<ul >
        @foreach($slide as $sl)
            <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; ">
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                    data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                    data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                    data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                    data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                    src="{{ asset('source/image/slide/'. $sl->image) }}" data-src="source/image/slide/{{$sl->image}}"
                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url({{ asset('source/image/slide/'. $sl->image) }}); background-size: cover; background-position: center center; width: 100%; height: 100%;">
                    </div>
                </div>
            </li>
            <!-- <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                style="width: 100%; height: 100%;  z-index: 18;">
                <img style="width:100%;height:100%;" src='/source/image/slide/{{$sl->image}}' alt="silde">
            </li> -->
            <!-- <li>
                <img src='/source/image/slide/{{$sl->image}}' alt="silde">
            </li> -->
        @endforeach
            <!-- <img src='/source/image/slide/{{$sl->image}}' alt="Hình ảnh slide"> -->
        
    </ul>
</body>
</html>