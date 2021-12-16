@extends('frontend.layouts.app')

@section('main-content')
<section class="specialities-single-area">

    <div class="container">
        <div class="row">

            <div class="col-xl-8">

                <div class="specialities-single-content">
                    <div class="specialities-title fix">
                        <div class="icon-holder">
                            <span class="icon-tooth1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span>
                            </span>
                        </div>
                        <div class="title-holder">
                            <h2>{{$service->name}}</h2>
                        </div>
                    </div>
                    <div class="specialities-top-content">
                        <p>{!!$service->short_description!!}</p>
                        <div>
                            <div class="single-item">
                                <img src="{{asset($service->image)}}" alt="Awesome Image">
                            </div>

                        </div>
                        <p>{!!$service->content!!}</p>
                    </div>
                    <div class="what-wedo-content">
                        <div class="top fix">
                            <h3>Những gì chúng tôi làm</h3>
                            <p>Nụ cười của bạn rất quan trọng, Vì vậy, hãy bước vào Phòng khám H-Smile và Nụ cười khuôn mặt và nuông chiều bản thân với một nha sĩ thẩm mỹ tốt nhất, thiết kế nụ cười, có thể tặng bạn DOC. DMD. </p>
                        </div>
                        <div class="inner-content">
                            <div class="row">
                                <!--Start Single wedo box-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="single-wedo-box">
                                        <div class="inner">
                                            <div class="image">
                                                <img src="{{asset('frontend/images/services/service-single/wedo-1.png')}}" alt="Awesome Image">
                                            </div>
                                            <div class="text">
                                                <h3>Làm trắng răng</h3>
                                                <p>Ý tưởng tố cáo những thú vui và tất cả ca ngợi nỗi đau đã được sinh ra bạn đã hoàn thành bây giờ ...</p>
                                                <a class="btn-two" href="#"><span class="icon-plus"></span>Đọc thêm</a>
                                            </div>
                                        </div>
                                        <div class="overlay-image">
                                            <img src="{{asset('frontend/images/services/service-single/wedo-overlay-bg.jpg')}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <!--End Single wedo box-->
                                <!--Start Single wedo box-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="single-wedo-box">
                                        <div class="inner">
                                            <div class="image">
                                                <img src="{{asset('frontend/images/services/service-single/wedo-2.png')}}" alt="Awesome Image">
                                            </div>
                                            <div class="text">
                                                <h3>Ván lạng / Gia công</h3>
                                                <p>Mong muốn tự mình đạt được và vượt qua những nỗi đau, bởi vì nó đau, đôi khi hoàn cảnh xảy ra ... </p>
                                                <a class="btn-two" href="#"><span class="icon-plus"></span>Đọc thêm</a>
                                            </div>
                                        </div>
                                        <div class="overlay-image">
                                            <img src="{{asset('frontend/images/services/service-single/wedo-overlay-bg.jpg')}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <!--End Single wedo box-->
                                <!--Start Single wedo box-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="single-wedo-box">
                                        <div class="inner">
                                            <div class="image">
                                                <img src="{{asset('frontend/images/services/service-single/wedo-3.png')}}" alt="Awesome Image">
                                            </div>
                                            <div class="text">
                                                <h3>Tái tạo </h3>
                                                <p>Để lấy một ví dụ tầm thường, ai trong chúng ta đã từng thực hiện bài tập thể dục ... </p>
                                                <a class="btn-two" href="#"><span class="icon-plus"></span>Đọc thêm</a>
                                            </div>
                                        </div>
                                        <div class="overlay-image">
                                            <img src="{{asset('frontend/images/services/service-single/wedo-overlay-bg.jpg')}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <!--End Single wedo box-->
                                <!--Start Single wedo box-->
                                <div class="col-xl-6 col-lg-6">
                                    <div class="single-wedo-box">
                                        <div class="inner">
                                            <div class="image">
                                                <img src="{{asset('frontend/images/services/service-single/wedo-4.png')}}" alt="Awesome Image">
                                            </div>
                                            <div class="text">
                                                <h3>Tái tạo men </h3>
                                                <p>Mọi người đều thực hiện bài tập thể dục nặng nhọc, ngoại trừ một số lợi thế ... </p>
                                                <a class="btn-two" href="#"><span class="icon-plus"></span>Đọc thêm</a>
                                            </div>
                                        </div>
                                        <div class="overlay-image">
                                            <img src="{{asset('frontend/images/services/service-single/wedo-overlay-bg.jpg')}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <!--End Single wedo box-->
                            </div>
                        </div>
                    </div>
                    <div class="transform-smile-content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="text-holder">
                                    <h3>Biến đổi nụ cười của bạn</h3>
                                    <p>Nụ cười của bạn rất quan trọng, Vì vậy, hãy bước vào Phòng khám Makeover và Nụ cười khuôn mặt và nuông chiều bản thân với một nha sĩ thẩm mỹ tốt nhất, thiết kế nụ cười, có thể tặng bạn DOC. DMD.</p>
                                    <ul>
                                        <li>Hệ thống kích hoạt Zoom ligt</li>
                                        <li>Ngoài hệ thống kích hoạt ligt</li>
                                        <li>Opalescence tăng cường hệ thống kích hoạt hóa học</li>
                                        <li>Hệ thống tẩy trắng hóa học tại nhà</li>
                                        <li>Laser điều trị làm trắng</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="video-holder-box2" style="background-image: url(images/services/service-single/video-bg.jpg);">
                                    <div class="icon-holder">
                                        <div class="icon">
                                            <div class="inner">
                                                <a class="html5lightbox" title="Dento Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                                                    <span class="flaticon-multimedia"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-text">
                                        <h3>Trước và Sau</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="treatments-pricing-box">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="pricing-plan">
                                    <table>
                                        <thead class="table-heading">
                                            <tr>
                                                <th class="left">Điều trị</th>
                                                <th>Giá</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-body">
                                            @if($service->serviceChildrent->count())
                                            <tr>
                                                @foreach($service->serviceChildrent as $service1)
                                                <td>
                                                    <p>{{$service1->name}}</p>
                                                </td>
                                                <td>
                                                    <span>{{$service1->price}}</span>
                                                </td>
                                                @endforeach
                                            </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="meet-our-specialist">
                        <h3>Gặp gỡ chuyên gia của chúng tôi</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="{{asset('frontend/images/team/1.jpg')}}" alt="Awesome Image">
                                        <div class="overlay-style-one"></div>
                                        <div class="text-holder text-center">
                                            <h3>Tiến sĩ Daryl Cornelius</h3>
                                            <span>Bác sĩ cấy ghép</span>
                                            <div class="button">
                                                <a class="btn-one" href="#">Biết thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="{{asset('frontend/images/team/2.jpg')}}" alt="Awesome Image">
                                        <div class="overlay-style-one"></div>
                                        <div class="text-holder text-center">
                                            <h3>Tiến sĩ Eugene Renolds</h3>
                                            <span>Nha chu</span>
                                            <div class="button">
                                                <a class="btn-one" href="#">Biết thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

            <div class="col-xl-4 col-lg-7 col-md-9 col-sm-12">
                <div class="specialities-sidebar">
                    <!--Start Single sidebar-->
                    <div class="single-sidebar">
                        <div class="inner">
                            <h3>Dịch vụ liên qua</h3>

                            @if($service->serviceChildrent->count())
                            <ul class="specialities-categories">
                                @foreach($service->serviceChildrent as $service1)
                                <li class="active"><a href="#">{{$service1->name}}</a></li>

                                @endforeach
                            </ul>
                            @endif

                        </div>
                    </div>
                    <!--End Single sidebar-->

                    <!--Start Single sidebar-->
                    <div class="single-sidebar">
                        <div class="brochures-sidebar">
                            <h3>Tài liệu quảng cáo của chúng tôi</h3>
                            <ul class="our-brochures">
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="icon-word"></span>
                                        </div>
                                        <div class="title-holder">
                                            <p>Tổng quan về Dịch vụ<br> 1.3 mb</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon-holder">
                                            <span class="icon-text-file"></span>
                                        </div>
                                        <div class="title-holder">
                                            <p>Công nghệ của chúng tôi<br> 2.5 mb</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Single sidebar-->

                    <div class="sidebar-appointment-box">
                        <span class="icon-calendar"></span>
                        <h3>Hẹn</h3>
                        <p>Ở đây bạn có thể có được thời gian thăm khám hoàn hảo của bạn đến bệnh viện.</p>
                        <a class="btn-one" href="{{ route('hsmile.appointment') }}">Làm cho nó</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>
@endsection