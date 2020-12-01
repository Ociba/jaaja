<!-- SLIDER -->
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slider1 img-gradient active">
                <img class ="images" src="{{asset('images/web4.jpg')}}" style="height:500px; width:100%;" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Welcome to <span>JAAJA</span></h2>
                    <p>IT SOLUTIONS LIMITED</p>
                    <a href="#" class="bann-btn-1 hidden">All Courses</a><a href="#" class="bann-btn-2 hidden">Read More</a>
                </div>
            </div>
            <div class="item img-gradient">
                <img src="{{asset('images/webapp3.jpg')}}" style="height:500px; width:1800px" alt="">
                <div class="carousel-caption slider-con">
                {{--
                     <h2>For IT  <span>Solutuons</span></h2>
                    
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2"></a>
                    --}}
                </div>
            </div>
            <div class="item img-gradient">
                <img src="{{asset('images/mob6.jpg')}}" style="height:500px; width:1800px;" alt="">
                <div class="carousel-caption slider-con">
                    
                    <h2>Mobile Application<span> Development</span></h2>
                    {{--
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                    --}}
                </div>
            </div>
            <div class="item img-gradient">
                <img src="{{asset('images/graphic6.jpg')}}" style="height:500px; width:1800px;" alt="">
                <div class="carousel-caption slider-con">
                {{--
                     <h2>For IT  <span>Solutuons</span></h2>
                    
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2"></a>
                    --}}
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
</section>