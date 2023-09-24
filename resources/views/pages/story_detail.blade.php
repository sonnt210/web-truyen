@extends('../layout')
{{--@section('slide')--}}
{{--    @include('pages.slide')--}}
{{--@endsection--}}
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <img class="card-img-top"
                         alt="Thumbnail [100%x225]" style="height: 250px; width: 100%; display: block;"
                         src="{{ asset('storage/story_images/linh-vu-thien-ha9.jpg') }}">
                </div>
                <div class="col-md-9">
                    <style>
                        .story-information,
                        .list-chapter {
                            list-style: none;
                        }
                    </style>
                    <ul class="story-information">
                        <li>Tác giả: Dịch Phong</li>
                        <li>Số chương: 200</li>
                        <li>Lượt đọc: 400</li>
                        <li>
                            <a href="#">Danh sách chương</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-primary">Đọc truyện</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <p>
                    Lục Thiếu Du, linh hồn bị xuyên qua đến thế giới khác, nhập vào thân thể của một thiếu gia không có
                    địa vị phải trải qua cuộc sống không khác gì nô bộc.
                    Thế giới này lấy Vũ vi cường, lấy Linh vi tôn, nghe đồn khi võ đạo đỉnh phong, linh đạo đạt đến cực
                    hạn có thể phá toái hư không.
                    Lục Thiếu Du mang theo ký ức từ kiếp trước tái sinh, không cam lòng làm một thiếu gia chẳng khác gì
                    củi mục.

                    Trong thế giới xa lạ,
                    Say - nằm trên gối mỹ nhân,
                    Tỉnh - nắm quyền thiên hạ.
                    Đây mới là cuộc sống đáng mơ ước.
                    Linh - Vũ song tu
                    Bá chủ kiêu hùng
                    Đã đến, ta sẽ lưu lại một huyền thoại......
                </p>
            </div>
            <hr>
            <h4>Danh sách truyện</h4>
            <ul class="list-chapter">
                <li>
                    <a href="#">Chapter 1: Tên chương</a>
                </li>
                <li>
                    <a href="#">Chapter 1: Tên chương</a>
                </li>
                <li>
                    <a href="#">Chapter 1: Tên chương</a>
                </li>
                <li>
                    <a href="#">Chapter 1: Tên chương</a>
                </li>
            </ul>
            <h4>Truyện cùng thể loại</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3 box-shadow">
                        <a href="">
                            <img class="card-img-top"
                                 alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                                 src="{{ asset('storage/story_images/linh-vu-thien-ha9.jpg') }}">
                            <div class="card-body">
                                <h5>Tên truyện</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <h3>Truyện nên đọc</h3>
        </div>
    </div>
@endsection
