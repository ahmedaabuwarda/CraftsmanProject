@extends('layouts.welcome')
@section('content')
<section id="banner">
    <div class="inner">
        <h1>الدليل الموهوب</h1>
        <p class="sub">من افضل المواقع المتخصصة في الاعلانات المتعلقة بالمهن والمواهب في السعودية</p>
    </div>
    <video autoplay loop muted playsinline src="{{ asset('images/vid2.mp4') }}"></video>
</section>
<!-- Highlights -->
<section class="wrapper">
    <div class="inner" >
        <header class="special">
            <h2>إبحث عن الطالب الموهوب</h2>
            <p class="sub">سوف يساعدك موقعنا في البحث على الموهوب الأقرب والأنسب لك</p>
            @if(Session::has('success'))
                <div class="alert alert-danger" style="font-size: 33px; background-color: red;direction: rtl">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
        </header>

        <div class="container d-flex flex-column" style="width: auto">
            <div class="d-flex align-items-md-center mb-2 flex-column flex-md-row" dir="rtl">
                <div class="bg-white rounded p-4 d-flex flex-grow-1 flex-sm-grow-0" style="width:100%;">
                    <!--begin::Form-->
                    <form class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1 flex-sm-grow-0"  style="margin: 0 3px" action="{{ route('search') }}" METHOD="POST">
                        {{ csrf_field() }}
                        <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                            <i class="fa fa-search" style='font-size:30px;color:#24679e'></i>

                            <div class="col-11 col-12-xsmall" >
                                <input type="text" name="name" id="name" value="" placeholder="الاسم" style="background-color: #fcfffe" required/>
                            </div>
                        </div>
                        <span class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                        <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                            <i class='fas fa-map-marker-alt' style='font-size:30px;color:#24679e '></i>
                            <div class="col-11">
                                <select name="city" id="category" style="background-color: #fcfffe" required>
                                    <option value="">- اختر -</option>
                                    @foreach($data[0] as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <span class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                        <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                            <i class='fas fa-home' style='font-size:30px;color:#24679e'></i>
                                <div class="col-11">
                                    <select name="neber" id="category" style="background-color: #fcfffe" required>
                                        <option value="">- اختر -</option>
                                        @foreach($data[1] as $neighborhood)
                                            <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                        </div>
                        <button type="submit" class="btn font-weight-bold btn-hover-light-primary mt-3 mt-sm-0 px-7 text-white" style="background-color: #24679e">ابحث</button>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
    <div class="inner" style="margin-top: 50px">
        <header class="special">
            <h2>آلية الإستخدام</h2>
        </header>
        <div class="highlights">
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-star" style="color: #24679e"><span class="label">Icon</span></a>
                    </header>
                    <h3 style="text-align: center">يمكنك إضافة تقييم للموهوب</h3>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-phone" style="color: #24679e"><span class="label">Icon</span></a>
                    </header>
                    <h3 style="text-align: center">تواصل مع الموهوب بوسائل التواصل المعروضة على صفحته الشخصية</h3>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-search" style="color: #24679e"><span class="label">Icon</span></a>
                    </header>
                    <h3 style="text-align: center">يمكنك البحث عن الموهوب الأنسب بواسطة دليل البحث</h3>
                </div>
            </section>

        </div>
    </div>
    <div class="inner" style="margin-top: 50px">
        <header class="special">
            <h2>الموهوبين الأكثر تقييما</h2>
        </header>
        <div class="highlights">
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-user-circle"><span class="label">Icon</span></a>
                        <h3>احمد السلام</h3>
                    </header>
                    <p>حاسب آلي </p>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-user"><span class="label">Icon</span></a>
                        <h3>حسن يعقوب</h3>
                    </header>
                    <p>حاسب آلي</p>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-user-circle"><span class="label">Icon</span></a>
                        <h3>صالح تيسير معروف</h3>
                    </header>
                    <p>حاسب آلي</p>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="cta" class="wrapper">
    <div class="inner">
        <h2>لمذا دليل الموهوبين؟</h2>
        <p style="font-size: 30px">دليل الموهوبين هو موقع يتيح الفرصة لكل موهوب يعرض نا لديه من موهبة في أي مجال ليسهل الوصول اليه من خلال نظام البحث في الموقع</p>

    </div>
</section>

<!-- Testimonials -->
<section class="wrapper">
    <div class="inner">
        <header class="special">
            <h2>من نحن؟</h2>
            <p style="font-size: 28px">المعلم فهد وصفي الدندني سيتم تقديم هذا المشروع في مقرر المشاريع البرمجية</p>
        </header>
    </div>
</section>
@endsection