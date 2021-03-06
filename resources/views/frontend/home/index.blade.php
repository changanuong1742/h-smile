@extends('frontend.layouts.app')

@section('main-content')
<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_two_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
            <ul>
                @foreach ($slide as $image)
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1691" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset($image->image) }}" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset($image->image) }}">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','700','700','460']" data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['-130','-140','-125','-110']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content text-center">
                            <div class="big-title">
                                {{ $image->title }}
                            </div>
                        </div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['700','700','700','460']" data-hoffset="['15','15','15','15']" data-voffset="['20','30','25','10']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                        <div class="slide-content text-center">
                            <div class="text">{!! $image->description !!}</div>
                        </div>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','700','700','460']" data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['110','120','120','90']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!--Start Welcome area-->
<section class="welcome-area sec-pd1">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>Ch??o m???ng ?????n v???i H-Smile</h3>
            <h1>H??y thi???t k??? n??? c?????i c???a b???n</h1>
            <p>R??ng ????ng m???t vai tr?? quan tr???ng trong cu???c s???ng h??ng ng??y c???a b???n. N?? kh??ng ch??? gi??p b???n nhai v?? ??n th???c ??n m?? c??n gi??p t???o khu??n m???t c???a b???n. B???t k??? chi???c r??ng n??o b??? m???t ?????u c?? th??? g??y ???nh h?????ng l???n ?????n ch???t l?????ng cu???c s???ng c???a b???n.</p>
        </div>
    </div>
</section>
<!--End Welcome area-->

<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image: url(/frontend/images/parallax-background/fact-counter-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <ul class="clearfix">
                    <!--Start single fact counter-->
                    <li class="single-fact-counter text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="count-box">
                            <div class="icon">
                                <span class="icon-tooth-3"></span>
                            </div>
                            <h1>
                                <span class="timer" data-from="1" data-to="{{ $doneAppoint }}" data-speed="5000" data-refresh-interval="50">{{ $doneAppoint }}</span>
                            </h1>
                            <div class="title">
                                <h3>???? ho??n th??nh</h3>
                            </div>
                            <div class="text">
                                <p>S??? d??? ??n ???? th??nh c??ng c???a ch??ng t??i.</p>
                            </div>
                        </div>
                    </li>
                    <!--End single fact counter-->
                    <!--Start single fact counter-->
                    <li class="single-fact-counter text-center wow fadeInUp" data-wow-delay="600ms">
                        <div class="count-box">
                            <div class="icon">
                                <span class="icon-doctor-1"></span>
                            </div>
                            <h1>
                                <span class="timer" data-from="1" data-to="{{ $countDoctor }}" data-speed="5000" data-refresh-interval="50">{{ $countDoctor }}</span>
                            </h1>
                            <div class="title">
                                <h3>Nha s?? chuy??n nghi???p</h3>
                            </div>
                            <div class="text">
                                <p>Kinh nghi???m l??m vi???c mang ?????n cho kh??ch h??ng s??? tin t?????ng</p>
                            </div>
                        </div>
                    </li>
                    <!--End single fact counter-->
                    <!--Start single fact counter-->
                    <li class="single-fact-counter text-center wow fadeInUp" data-wow-delay="900ms">
                        <div class="count-box">
                            <div class="icon">
                                <span class="icon-hospital"></span>
                            </div>
                            <h1>
                                <span class="timer" data-from="1" data-to="1" data-speed="5000" data-refresh-interval="50">1</span>
                            </h1>
                            <div class="title">
                                <h3>C?? S???</h3>
                            </div>
                            <div class="text">
                                <p>Ch??ng t??i s??? m??? r???ng chi nh??nh trong t????ng lai</p>
                            </div>
                        </div>
                    </li>
                    <!--End single fact counter-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End fact counter area-->

<!--Start About Area-->
<section class="about-area home2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-image-holder">
                    <img src="/frontend/images/resources/about.jpg" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="inner-content">
                    <div class="sec-title">
                        <h3>Gi???i thi???u</h3>
                        <h1>S??? m???nh c???a H-Smile</h1>
                    </div>
                    <div class="about-text-holder">
                        <p>Nha khoa th???m m??? qu???c t??? H-Smile ???????c th??nh l???p v???i t??n ch??? gi??p ????? kh??ch h??ng thay ?????i cu???c s???ng th??ng qua n??? c?????i m???i mang l???i h???nh ph??c v?? s??? th??nh c??ng. H-Smile quan t??m v?? ch?? tr???ng ?????n v???n ????? s???c kh???e v?? t??nh th???m m??? cao trong d???ch v??? nha khoa. Ch??ng t??i cam k???t t?? v???n th???t t??m, hi???u qu??? v?? cung c???p d???ch v??? ch???t l?????ng ho??n h???o ??em l???i s??? tr???i nghi???m tuy???t v???i nh???t cho kh??ch h??ng tr??n m???i h??? th???ng c???a nha khoa H-Smile.
                            H-Smile hi???u r???ng, m???i kh??ch h??ng ?????n v???i ch??ng t??i lu??n c?? 1 c??u chuy???n ri??ng, m???t nhu c???u v?? mong mu???n ri??ng.
                            Th???u hi???u ???????c t??m l?? ???? H-Smile l???a ch???n gi???i ph??p t???i ??u cho kh??ch h??ng trong qu?? tr??nh t?? v???n nha khoa th???m m???. ?????c bi???t, ch??ng t??i t??? h??o r???ng c??c k??? thu???t th???m m??? nha c???a H-Smile ???????c c???p nh???t th?????ng xuy??n, l?? c??ng ngh??? ti??n ti???n v?? m???i nh???t tr??n th??? gi???i, b???o to??n r??ng g???c t???i ??a, an to??n, b??ng v???ng theo th???i gian. H???u x??? t??? nhi??n h????ng ???? c??ng l?? l?? do v?? sao H-Smile l???i c?? t??? l??? gi???i thi???u kh??ch h??ng t??? kh??ch h??ng c?? cao nh???t trong gi???i nha khoa th???m m???.
                        </p>
                        <div class="read-more">
                            <a class="btn-two" href="{{ route('hsmile.aboutus') }}"><span class="flaticon-next"></span>Xem th??m</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Area-->

<!--Start services style2 area-->
<section class="services-style1-area spec-page">
    <div class="container">
        <div class="sec-title max-width text-center">
            <h3>D???ch V???</h3>
            <h1>D???ch v??? ch??m s??c r??ng mi???ng</h1>
            <p>Di??ch vu?? ta??i H-Smile cung c???p ?????y ????? c??c lo???i h??nh d???ch v??? nha khoa theo ti??u chu???n qu???c t???.</p>
        </div>
        <div class="row">
            @if (count($service))
            @foreach ($service as $row)
            <!--Start single solution style1-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-solution-style1 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="img-holder">
                        <img src="{{ $row->image }}" alt="{{ $row->slug }}">
                        <div class="icon-holder">
                            <div class="inner-content">
                                <div class="box">
                                    <span class="icon-teeth-1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>{{ $row->name }}</h3>
                        <p>{!! $row->short_description !!}</p>
                        <div class="readmore">
                            <a href="{{ route('hsmile.service.detail',['id'=>$row->id]) }}"><span class="icon-plus"></span></a>
                            <div class="overlay-button">
                                <a href="{{ route('hsmile.service.detail',['id'=>$row->id]) }}">Xem th??m</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single solution style1-->
            @endforeach
            @endif
        </div>
    </div>
</section>
<!--End services style2 area-->

<!--Start Appointment Area-->
{{-- <section class="appointment-area">
    <div class="appointment-title-box" style="background-image: url(/frontend/images/parallax-background/appointment-title-bg.jpg);">
        <div class="sec-title text-center">
            <h3>Cu???c H???n</h3>
            <h1>?????t ch??? tr???c tuy???n cho chuy???n th??m</h1>
        </div>
    </div>
    <div class="container appointment-content">
        <div class="row">

            <div class="col-xl-6 col-lg-6">
                <div class="appointment-image text-center">
                    <img src="/frontend/images/resources/appointment.png" alt="Awesome Image">
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="appointment-form">
                    <form name="appointment-form" action="#" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="H??? v?? t??n*" required="">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="form_phone" value="" placeholder="S??? ??i???n tho???i">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="date" placeholder="Ng??y" id="datepicker">
                                    <div class="icon-box">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box">
                                    <input type="email" name="form_email" value="" placeholder="Email*" required="">
                                </div>
                                <div class="input-box">
                                    <select class="selectmenu">
                                        <option selected="selected">Nha s??</option>
                                        <option>Dr. Daryl Cornelius</option>
                                        <option>Evelynne Mirando</option>
                                        <option>Dr. Robert B. Moreau</option>
                                        <option>Dr. Greg House</option>
                                        <option>Dr. Sarah Johnson</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <input type="text" name="time" placeholder="Th???i gian">
                                    <div class="icon-box">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-box">
                                    <textarea name="form_message" placeholder="L???i nh???n c???a b???n..." required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="button-box">
                                    <button class="btn-one" type="submit">G???i</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section> --}}
<!--End Appointment Area-->

<!--Start team area-->
<section class="team-area">
    <div class="container" style="margin-top: 100px">
        <div class="sec-title text-center">
            <h3>Nha S?? Chuy??n Nghi???p</h3>
            <h1>?????i ng?? nha s?? c?? tr??nh ????? cao</h1>
        </div>

        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="team-carousel owl-carousel owl-theme">

                    <!--Start single item member-->
                    @foreach($doctor as $row)
                    <div class="single-team-member">

                        <div class="img-holder">
                            <img src="{{ $row->users->avatar ? $row->users->avatar :'/frontend/images/team/1.jpg' }}" alt="{{ $row->users->avatar ?? '/frontend/images/team/1.jpg' }}">
                            <div class="overlay-style-one"></div>
                            <div class="text-holder text-center">

                                <h3>{{$row->name}}</h3>
                                <span>{{ $row->majors }}</span>
                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</section>
<!--End team area-->


<!--Start Testimonial Sec style2-->
<section class="testimonial-sec style2">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title max-width text-center">
                    <h3>L???i ch???ng th???c</h3>
                    <h1>Kh??ch h??ng c???a ch??ng t??i n??i g???</h1>
                    <a class="btn-one" href="#">Xem th??m</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-carousel2 owl-carousel owl-theme">
                    @foreach ($feedback as $row)
                    <!--Start Single Testimonial Item-->
                    <div class="single-testimonial-style2 text-center">
                        <div class="quote-icon">
                            <img src="/frontend/images/icon/1.png" alt="Quote Icon">
                        </div>
                        <div class="text-holder">
                            <p>{{ $row->message }}</p>
                        </div>
                        <div class="name">
                            <h3>{{ $row->name }}</h3>
                            <span>{{ $row->address }}</span>
                        </div>
                        <div class="quote-icon2">
                            <img src="/frontend/images/icon/2.png" alt="Quote Icon">
                        </div>
                    </div>
                    <!--End Single Testimonial Item-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Sec style2-->

<!--Start Warranties sec-->
<section class="warranties-sec" style="background-image: url(/frontend/images/parallax-background/warranties-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="video-holder">
                    <div class="icon-holder">
                        <div class="icon">
                            <div class="inner">
                                <a class="html5lightbox" title="Dento Video Gallery" href="https://www.youtube.com/embed/k0j16iZm-VY">
                                    <span class="icon-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="warranties-content">
                    <h2>??i???u tr??? nha khoa c?? b???o h??nh</h2>
                    <p>????? l???y m???t v?? d??? t???m th?????ng, ai trong ch??ng ta ???? t???ng th???c hi???n c??c b??i t???p th??? d???c v???t v???, ngo???i tr??? vi???c ?????t ???????c m???t s??? l???i ??ch t??? n???</p>
                    <ul>
                        <li>B???c S???: B???o h??nh thay th??? mi???n ph?? 5 n??m.</li>
                        <li>Tr???ng r??ng: B???o h??nh thay th??? mi???n ph?? 3 n??m.</li>
                        <li>Tr??m: B???o h??nh 2 n??m.</li>
                        <li>C???y implant: B???o h??nh 5 n??m.</li>
                        <li>Ni???ng r??ng: B???o h??nh mi???n ph?? 20 n??m.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Warranties sec-->

<!--Start latest blog area-->
<section class="latest-blog-area sec-pd1 pd-btm60">
    <div class="container inner-content">
        <div class="sec-title max-width text-center">
            <h3>Tin t???c v?? Tips</h3>
            <h1>B??i ????ng m???i nh???t</h1>
        </div>
        <div class="row">
            <!--Start single blog post-->
            @foreach($blog as $row)
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="{{asset($row->image)}}" alt="Awesome Image">
                        <div class="categorie-button">
                            <a class="btn-one" href="#">{{$row->category}}</a>
                        </div>
                    </div>
                    <div class="text-holder">
                        <div class="meta-box">
                            <div class="author-thumb">
                                <img src="/frontend/images/blog/author-2.png" alt="Image">
                            </div>
                            <ul class="meta-info">
                                <li><a href="#">By {{$row->author}}</a></li>
                                <li><a href="#">{{$row->created_at}}</a></li>
                            </ul>
                        </div>
                        <h3 class="blog-title"><a href="blog-single.html">{{$row->title}}</a></h3>
                        <div class="text-box">
                            <p>{{$row->short_desc}}</p>
                        </div>
                        <div class="readmore-button">
                            <a class="btn-two" href="{{route('hsmile.blog.detail',['id'=>$row->id])}}"><span class="flaticon-next"></span>Xem th??m</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--End single blog post-->
            <!--Start single blog post-->

            <!--End single blog post-->
        </div>
    </div>
</section>
<!--End latest blog area-->

<!--Start Brand area-->
<section class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="brand">
                    @if (count($partner))
                    @foreach ($partner as $row)
                    <!--Start single item-->
                    <li class="single-item">
                        <a href="#"><img src="{{ $row->logo }}" alt="{{ $row->name }}"></a>
                    </li>
                    <!--End single item-->
                    @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->
@endsection
