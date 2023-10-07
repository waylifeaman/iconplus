{{-- @extends('layout.main')
@section('container')
<div class="atas"></div>
    
<div class="containerSlide">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext" >1 / 3</div>
            <img src="img/im2.jpg" alt="" style="width:100%;">
            <div class="text">Caption text</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/im3.jpg" alt="" style="width: 100%">
            <div class="text">Caption text</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/im1.jpg" alt="" style="width: 100%">
            <div class="text">Caption text</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <br>
    <div style="text-align: center">
        <span class="dot" onclick="currentSlides(1)"></span>
        <span class="dot" onclick="currentSlides(2)"></span>
        <span class="dot" onclick="currentSlides(3)"></span>
    </div>
</div>

    <script src="homescript.js"></script>
    <script src="jquery.js"></script>
    <script src="zoomsl.min.js"></script>
    <script>
        // Detail Gambar Produk
        $(document).ready(function () {
            $('.small-images img').click(function () {
                var image = $(this).attr('src');
                $('.big-images img').attr('src', image);
            });
        });


        $('#zoom').imagezoomsl({
            zoomrange: [4, 4]
        })
    </script>
@endsection --}}
