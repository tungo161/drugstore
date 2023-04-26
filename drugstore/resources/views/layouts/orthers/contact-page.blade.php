{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Liên hệ')

{{-- Đặt file css cho page --}}
@section('file', 'contact-page')

{{-- Đặt class cho body --}}
@section('page', 'contact-page')

@section('content')
    <main class="main mb-xl-5">
        <section class='header-menu bg-color-5 mb-xl-5'>
            <div class='container align-items-center'>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3">
                        <li class="breadcrumb-item fs-7"><a class='text-decoration-none color-12'
                                href='{{ url('') }}'>Trang
                                chủ</a></li>
                        <li class="breadcrumb-item fs-7" id='breadcrumb-item'><a
                                class=' d-inline-block text-decoration-none
                            text-black'
                                href='{{ url('') }}'>Liên hệ</a></li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class='maps py-xl-4'>
            <div class='container py-xl-2'>
                <div class='row pb-xl-5 mb-xl-4'>
                    <div class='col-xl-4 mb-xl-0 mb-3'>
                        <div class='location rounded-10 border border-color-1 overflow-auto'>
                            <div class="location__body p-xl-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class='location__body__item py-3 border-bottom'>
                                    <a class="text-decoration-none d-flex text-black active mb-1" id="location-1-tab"
                                        data-bs-toggle="pill" data-bs-target="#location-1" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true"><img class='me-1'
                                            src='img/location1.png'>
                                        <h6 class='fs-7 fw-4 m-0'>Cơ sở Pháo Đài Láng</h6>
                                    </a>
                                    <div class='location__body__item__content container'>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Địa chỉ: </span>Tầng 3
                                            số 14 Pháo Đài Láng, Láng Thượng, Đống Đa, Hà Nội</p>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Thời gian mở cửa:
                                            </span>8:00 - 21:00</p>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Điện thoại:
                                            </span>0962.180.180</p>
                                        <a class='mb-1 fs-8 d-flex'><img class='me-1' src='img/Mask Group 409.png'>Chỉ
                                            đường</a>
                                    </div>
                                </div>
                                <div class='location__body__item pb-3 border-bottom mt-3'>
                                    <a class="text-decoration-none d-flex text-black" id="location-2-tab"
                                        data-bs-toggle="pill" data-bs-target="#location-2" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false"><img class='me-1'
                                            src='img/location1.png'>
                                        <h6 class='fs-7 fw-4 m-0'>Cơ sở Xã Đàn</h6>
                                    </a>
                                    <div class='location__body__item__content container'>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Địa chỉ: </span>Tầng 7
                                            số 234 Xã Đàn, Phương Liên, Đống Đa, Hà Nội</p>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Thời gian mở cửa:
                                            </span>8:00 - 21:00</p>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Điện thoại:
                                            </span>0962.180.180</p>
                                        <a class='mb-1 fs-8 d-flex'><img class='me-1' src='img/Mask Group 409.png'>Chỉ
                                            đường</a>
                                    </div>
                                </div>
                                <div class='location__body__item pb-3 border-bottom mt-3'>
                                    <a class="text-decoration-none d-flex text-black" id="location-3-tab"
                                        data-bs-toggle="pill" data-bs-target="#location-3" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false"><img class='me-1'
                                            src='img/location1.png'>
                                        <h6 class='fs-7 fw-4 m-0'>Cơ sở Cầu Giấy</h6>
                                    </a>
                                    <div class='location__body__item__content container'>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Địa chỉ: </span>Tầng 7
                                            Tầng 2 số 350 Cầu Giấy, Dịch Vọng, Cầu Giấy, Hà Nội</p>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Thời gian mở cửa:
                                            </span>8:00 - 21:00</p>
                                        <p class='mb-1 color-7 fs-7 '><span class='text-black fw-4'>Điện thoại:
                                            </span>0962.180.180</p>
                                        <a class='mb-1 fs-8 d-flex'><img class='me-1' src='img/Mask Group 409.png'>Chỉ
                                            đường</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-xl-8'>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="location-1" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0"><iframe class='w-100 border-0'
                                    height='600px'
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.320252263764!2d105.80386291473123!3d21.019868186003205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab677bc39f5d%3A0x26d043cd1bbe8c4d!2zMTQgUC4gUGjDoW8gxJDDoGkgTMOhbmcsIEzDoW5nIFRoxrDhu6NuZywgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1679455676693!5m2!1svi!2s"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab-pane fade" id="location-2" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0"><iframe class='w-100 border-0'
                                    height='600px'
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2329.4407492697146!2d105.83698451013274!3d21.010586549051105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab86e779fd9b%3A0x379021dada85aff2!2zMjM0IFAuIFjDoyDEkMOgbiwgUGjGsMahbmcgTGnDqm4sIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1679455913806!5m2!1svi!2s"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="tab-pane fade" id="location-3" role="tabpanel">
                                <iframe class='w-100 border-0' height='600px'
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9242988211804!2d105.79028791473162!3d21.03571478599466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4818e2d1c5%3A0x98f7ee012655e46e!2zMzUwIMSQLiBD4bqndSBHaeG6pXksIEThu4tjaCBW4buNbmcsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1679458242063!5m2!1svi!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            </div>
        </section>
@endsection


