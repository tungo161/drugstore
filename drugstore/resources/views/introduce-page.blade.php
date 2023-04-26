{{-- Tất các các page cần extends từ master.blade.php --}}
@extends('layouts.app.master')

{{-- Đặt title cho page --}}
@section('title', 'Giới thiệu')

{{-- Đặt file css cho page --}}
@section('file', 'introduce-page')

{{-- Đặt class cho body --}}
@section('page', 'introduce-page')

@section('content')
    <div class='header-menu bg-color-5'>
        <div class='container align-items-center'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3">
                    <li class="breadcrumb-item"><a class='text-decoration-none color-14 fs-7' href='{{ url('') }}'>Trang
                            chủ</a></li>
                    <li class="breadcrumb-item active" id="breadcrumb-item-active"><a
                            class='text-decoration-none
                    color-9 fs-7' href='{{ url('gioi-thieu') }}'>Giới
                            thiệu</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <main class="main py-xl-5 my-4">
        <div class='container py-xl-2 py-3'>
            <div class='row'>
                <div class='col-xl-3 col-12 mb-xl-4 mt-xl-0 my-4 ps-4 ms-2 ps-xl-0 ms-xl-0'>
                    <ul id="list-example" class="list-group">
                        <li class='list-unstyled'>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#vmms-overview'>
                                <h6 class='fw-4'>Tổng quan về ABC drugstore</h6>
                            </a>
                        </li>
                        <li class='list-unstyled'>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#timeline-history'>
                                <h6 class='fw-4'>Lịch sử hình thành và phát triển</h6>
                            </a>
                        </li>
                        <li class='list-unstyled'>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#vistion'>
                                <h6 class='fw-4'>Tầm nhìn, Sứ mệnh và Giá trị cốt lõi</h6>
                            </a>
                        <li class='list-unstyled '>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#organization'>
                                <h6 class='fw-4'>Cơ cấu tổ chức</h6>
                            </a>
                        </li>
                        <li class='list-unstyled'>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#administrators'>
                                <h6 class='fw-4'>Đội ngũ nhân viên</h6>
                            </a>
                        </li>
                        <li class='list-unstyled'>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#infrastructure'>
                                <h6 class='fw-4'>Cơ sở vật chất</h6>
                            </a>
                        </li>
                        <li class='list-unstyled'>
                            <a class='maps-item list-group-item border-0 border-start border-color-1 list-group-item-action text-decoration-none fw-4 color-7'
                                href='#achievements'>
                                <h6 class='fw-4'>Giải thưởng và Thành tích</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='col-xl-9 col-12'>
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example"
                        tabindex="0">
                        <div class='vmms-overview'>
                            <h2 id='vmms-overview' class='fw-4 d-inline-block mb-xl-4 under-line position-relative'>
                                Tổng quan về ABC drugstore
                            </h2>
                            <div class='vmms-overview__content pb-xl-5 mb-xl-4 pb-3'>
                                <div class='row py-xl-2'>
                                    <div class='vmms-overview__content__text col-xl-6 col-12'>
                                        <p class='color-7 fs-7'>Nhà thuốc ABC - thành viên của tập đoàn Nhà Thuốc Thế Giới
                                            (DSW)
                                            là một
                                            trong những chuỗi bán lẻ uy tín hàng đầu tại Việt Nam với hơn 200 năm tận tâm
                                            phục
                                            vụ.
                                            Chuỗi nhà thuốc ABC (tiền thân là nhà thuốc CBA) được thành lập năm 1850.
                                            Năm 2010 nhà thuốc CBA chính thức là thành viên của tập đoàn Nhà Thuốc Thế Giới
                                            với
                                            20 nhà thuốc
                                            tại TP. Hồ Chí Minh và đổi tên thành Nhà thuốc ABC
                                            với bộ nhận diện thương hiệu mới thuộc Nhà Thuốc Thế Giới, đến nay hệ thống đã
                                            có
                                            hơn 1500 nhà
                                            thuốc đạt chuẩn GPP rải khắp các tỉnh thành Bắc - Trung - Nam.
                                            Nhà thuốc ABC chuyên cung cấp đa dạng các loại dược phẩm, sản phẩm thực phẩm
                                            chức
                                            năng, trang
                                            thiết bị y tế, dược mỹ phẩm cùng nhiều sản phẩm chăm sóc sức khoẻ, tiêu dùng
                                            hàng
                                            ngày,....</p>
                                        <p class='color-7 fs-7 m-0'>Qua hơn 12 năm xây dựng và phát triển, ABC đã thể hiện
                                            tầm ảnh hưởng không chỉ trong khu vực mà toàn thế giới
                                        </p>
                                    </div>
                                    <div class='vmms-overview__content__video col-xl-6 col-12'>
                                        <img class='w-100 h-100' src='/img/Pietercil-kanalen-Drug-1560x1040_2.jpg'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='timeline-history mb-xl-5 pb-4'>
                            <div class="pb-xl-2 pb-3">
                                <h2 id='timeline-history' class='d-inline-block fw-4 mb-xl-4 under-line position-relative'>
                                    Lịch sử hình thành và phát triển
                                </h2>
                                <div class='timeline-history__content pt-xl-2 pt-4'>
                                    <img class='w-100' src='/img/September-History-LAND.png'>
                                </div>
                            </div>
                        </div>
                        <div class='vistion mb-xl-5 pb-4'>
                            <div class="pb-xl-2 pb-3">
                                <h2 id='vistion' class='d-inline-block fw-4 mb-xl-4 under-line position-relative'>
                                    Tầm nhìn, Sứ mệnh và Giá trị cốt lõi
                                </h2>
                                <div class='vistion__content pt-xl-2 pt-4'>
                                    <div class='row'>
                                        <div class='vistion__content__text col-xl-6 col-12 fs-7'>
                                            <p class='color-7'><span class="color-9 fw-4">Tầm nhìn:</span> Đến năm 2030,
                                                Trường Đại học ABC, trở thành chuỗi nhà thuốc
                                                đa ngành định hướng ứng dụng, nằm trong tốp đầu của Việt Nam, có danh tiếng
                                                ở
                                                châu Á.
                                            </p>
                                            <p class='color-7'><span class="color-9 fw-4">Sứ mệnh:</span>Mong muốn được chăm
                                                sóc, phục vụ sức khỏe cộng đồng với chất lượng tốt nhất và giá cả hợp lý với
                                                đội ngũ dược sỹ chuyên môn cao, đáng tin cậy.
                                            </p>
                                            <p class='color-7'><span class="color-9 fw-4">Giá trị cốt lõi:</span>Tất cả các
                                                Nhà thuốc trực thuộc hệ thống đều đạt chuẩn Thực hành thuốc tốt – GPP, với
                                                đội ngũ dược sĩ có chuyên môn và giàu kinh nghiệm. Cam kết phục vụ theo 4
                                                tiêu chí:
                                            <ul class='color-7'>
                                                <li>Đủ thuốc bạn cần</li>
                                                <li>Nguồn gốc rõ ràng</li>
                                                <li>Tận tình tư vấn</li>
                                                <li>An tâm về giá</li>
                                            </ul>

                                            </p>
                                        </div>
                                        <div class='vistion__content__video col-xl-6 col-12'>
                                            <img class='w-100' src='/img/pharmacist.png'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='organization mb-xl-5 pb-4'>
                            <div class="pb-xl-2 pb-3">
                                <h2 id='organization' class='d-inline-block fw-4 mb-xl-4 under-line position-relative'>
                                    Cơ cấu tổ chức
                                </h2>
                                <div class='organization__content pt-xl-2 pt-4'>
                                    <img class='w-100' src='/img/5647195@2x.png'>
                                </div>
                            </div>
                        </div>
                        <div class='administrators mb-xl-5 pb-4'>
                            <div class="pb-xl-2 pb-3">
                                <h2 id='administrators' class='d-inline-block fw-4 mb-xl-4 under-line position-relative'>
                                    Đội ngũ nhân viên
                                </h2>
                                <div class='administrators__content pt-xl-2 pt-4'>
                                    <div class='administrators__content__slide owl-carousel owl-theme'>
                                        <div class="item bg-color-3 text-center h-100">
                                            <div class='px-xl-5 py-xl-4 p-3 d-flex flex-column justify-content-start'>
                                                <div class="img-hover-zoom rounded-circle">
                                                    <img class='w-100 mb-xl-3 px-xl-2'
                                                        src="/img/joseph-gonzalez-iFgRcqHznqg-unsplash@2x.png">
                                                </div>
                                                <h5 class='fw-4 mt-2'>Hồ Mạnh Quân</h5>
                                                <p class='color-7'>Nhân viên bán hàng</p>
                                            </div>
                                        </div>
                                        <div class="item bg-color-3 text-center">
                                            <div class='px-xl-5 py-xl-4 p-3 d-flex flex-column justify-content-start'>
                                                <div class="img-hover-zoom rounded-circle">
                                                    <img class='w-100 mb-xl-3 px-xl-2'
                                                        src="/img/hannah-nicollet-JQ2D4I-2eyw-unsplash@2x.png">
                                                </div>
                                                <h5 class='fw-4 mt-2'>Đặng Bảo Trung</h5>
                                                <p class='color-7'>Nhân viên kỹ thuật</p>
                                            </div>
                                        </div>
                                        <div class="item bg-color-3 text-center">
                                            <div class='px-xl-5 py-xl-4 p-3 d-flex flex-column justify-content-start'>
                                                <div class="img-hover-zoom rounded-circle">
                                                    <img class='w-100 mb-xl-3 px-xl-2'
                                                        src="/img/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash@2x.png">
                                                </div>
                                                <h5 class='fw-4 mt-2'>Hà Thu Trang</h5>
                                                <p class='color-7'>Chủ cửa hàng</p>
                                            </div>
                                        </div>
                                        <div class="item bg-color-3 text-center">
                                            <div class='px-xl-5 py-xl-4 p-3 d-flex flex-column justify-content-start'>
                                                <div class="img-hover-zoom rounded-circle">
                                                    <img class='w-100 mb-xl-3 px-xl-2'
                                                        src="/img/joseph-gonzalez-iFgRcqHznqg-unsplash@2x.png">
                                                </div>
                                                <h5 class='fw-4 mt-2'>Hồ Mạnh Quân</h5>
                                                <p class='color-7'>Nhân viên bán hàng</p>
                                            </div>
                                        </div>
                                        <div class="item bg-color-3 text-center">
                                            <div class='px-xl-5 py-xl-4 p-3'>
                                                <div class="img-hover-zoom rounded-circle">
                                                    <img class='w-100 mb-xl-3 px-xl-2 mb-2'
                                                        src="/img/hannah-nicollet-JQ2D4I-2eyw-unsplash@2x.png">
                                                </div>
                                                <h5 class='fw-4'>Đặng Bảo Trung</h5>
                                                <p class='color-7'>Nhân viên kỹ thuật</p>
                                            </div>
                                        </div>
                                        <div class="item bg-color-3 text-center">
                                            <div class='px-xl-5 py-xl-4 p-3'>
                                                <div class="img-hover-zoom rounded-circle">
                                                    <img class='w-100 mb-xl-3 px-xl-2 mb-2'
                                                        src="/img/christina-wocintechchat-com-0Zx1bDv5BNY-unsplash@2x.png">
                                                </div>
                                                <h5 class='fw-4'>Hà Thu Trang</h5>
                                                <p class='color-7'>Chủ cửa hàng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='infrastructure mb-xl-5 pb-4'>
                            <div class="pb-xl-2 pb-3">
                                <h2 id='infrastructure' class='d-inline-block fw-4 mb-xl-4 under-line position-relative'>
                                    Cơ sở vật chất
                                </h2>
                                <div class="infrastructure__content position-relative rounded-10 pt-xl-2 pt-4">
                                    <iframe class="w-100" height="500px" src="https://www.youtube.com/embed/RHWLVheYDzs"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class='achievements'>
                            <h3 id='achievements' class='d-inline-block fw-4 mb-xl-4 under-line position-relative'>
                                Giải thưởng và Thành tích
                            </h3>
                            <div class='achievements__content pt-xl-2 pt-4'>
                                <ul class='ps-3 color-7 fs-7'>
                                    <li class='mb-xl-2'><a class='color-7 text-decoration-none' href='#'>01 Huân
                                            chương lao động hạng Nhất (QĐ số 2452/QĐ-CTN ngày 29/9/2014)</a></li>
                                    <li class='mb-xl-2'><a class='color-7 text-decoration-none' href='#'>01 Huân
                                            chương lao động hạng Ba (QĐ số 323/2004/QĐ/CTN)</a></li>
                                    <li class='mb-xl-2'><a class='color-7 text-decoration-none' href='#'>01 Bằng
                                            khen của Thủ tướng Chính phủ Hoàn thành nhiệm vụ kế hoạch Nhà nước năm 2019</a>
                                    </li>
                                    <li class='mb-xl-2'><a class='color-7 text-decoration-none' href='#'>01 Cờ thi
                                            đua xuất sắc dẫn đầu về công tác an toàn vệ sinh lao động năm 2008 của Bộ Lao
                                            động - Thương binh và Xã hội</a></li>
                                    <li class='mb-xl-2'><a class='color-7 text-decoration-none' href='#'>Đại diện
                                            Việt Nam có mặt trong Top 100 trường tham gia Chung kết ACM/ICPC toàn cầu</a>
                                    </li>
                                </ul>
                                <p class='color-7 mb-0 mb-0 mb-xl-0'>Và nhiều danh hiệu thi đua, hình thức khen thưởng cao
                                    quý khác.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
