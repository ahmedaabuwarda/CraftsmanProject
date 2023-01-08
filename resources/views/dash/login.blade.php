@extends('layouts.welcome')
@section('content')
<div class="inner" style="margin-top: 10% ; margin-bottom: 10%">
    <header class="special">
        <h2>إختيار تسجيل الدخول</h2>
    </header>
    <div class="highlights">
        <section>
            <div class="content">
                <header>
                    <a href="{{ route('admin.login') }}" class="icon fa-star" style="color: #24679e"><span class="label">Icon</span></a>
                </header>
                <h3 style="text-align: center">تسجيل الدخول كمسؤل</h3>
                <h3 style="text-align: center">Admin</h3>
            </div>
        </section>
        <section>
            <div class="content">
                <header>
                    <a href="{{route('craftsman.login')}}" class="icon fa-user" style="color: #24679e"><span class="label">Icon</span></a>
                </header>
                <h3 style="text-align: center">تسجيل الدخول كصاحب موهبة</h3>
                <h3 style="text-align: center">Gifted</h3>
            </div>
        </section>
        <section>
            <div class="content">
                <header>
                    <a href="{{route('login')}}" class="icon fa-search" style="color: #24679e"><span class="label">Icon</span></a>
                </header>
                <h3 style="text-align: center">تسجيل الدخول كباحث عن موهبة او خدمات</h3>
            </div>
        </section>

    </div>
</div>
@endsection